<?php
session_start();
if (!isset($_SESSION['gitUserData']))
  header('Location:github_login/index.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/x-icon" href="images/icon2.ico">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiztopia</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,1,0" />
  <link href="./style.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <meta charset="UTF-8" />
  <style>
    * {
      background-color: black;
    }
  </style>
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <style>
    html,
    body,
    .frame {
      width: 800px;
      height: 500px;
      margin: 0;
      padding: 0px;
      border: none;
    }

    * {
      cursor: default;
    }
  </style>
</head>

<body>
  <section class="bg">
    <div class="star star1"></div>
    <div class="star star2"></div>
    <div class="star star3"></div>
    <div class="star star4"></div>
    <div class="star star5"></div>
    <div class="star star6"></div>
  </section>
  <!-- Avatar Frame -->
  <div style="position:relative; padding:50px;">
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
  <!-- End of Avatar Frame -->
  <form method="post" style="position:relative;bottom:300px;left:850px;" action="home.php">
    Paste the Avatar URL<br />
    <input type="text" name="avatar-url" id="avatar-url" style="width:200px;">
    <br>
    <button type="submit" style="width:70px;height:40px;background-color:blue; border-radius:15px;">Save</button>
  </form>
</body>