<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <style>
    html,
    body,
    .frame {
      width: 1080px;
      height: 800px;
      margin: 0;
      padding: 20px;
      border: none;
    }
  </style>
</head>

<body>
  <div style="position:relative;">
  <iframe id="frame" class="frame" allow="camera *; microphone *"></iframe>

  <script>
    const subdomain = 'quiztopia';
    const frame = document.getElementById('frame');

    frame.src = `https://${subdomain}.readyplayer.me/avatar?frameApi`;

    window.addEventListener('message', subscribe);
    document.addEventListener('message', subscribe);

    function subscribe(event) {
      const json = parse(event);

      if (json?.source !== 'readyplayerme') {
        return;
      }

      // Susbribe to all events sent from Ready Player Me once frame is ready
      if (json.eventName === 'v1.frame.ready') {
        frame.contentWindow.postMessage(
          JSON.stringify({
            target: 'readyplayerme',
            type: 'subscribe',
            eventName: 'v1.**'
          }),
          '*'
        );
      }
    }

    function parse(event) {
      try {
        return JSON.parse(event.data);
      } catch (error) {
        return null;
      }
    }

    function displayIframe() {
      document.getElementById('frame').hidden = false;
    }
  </script>
</div>
  
</body>

</html>