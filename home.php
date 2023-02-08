<?php
session_start();
if(!isset($_SESSION['gitUserData']))
header('Location:github_login_with_php/index.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiztopia</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,1,0" />
        <link href="./style.css" rel="stylesheet">
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <style>
      html,
      body,
      .frame {
        width: 800px;
        height: 500px;
        margin: 0;
        padding: 20px;
        border: none;
      }
      *{
        cursor:default;
      }
    </style>
</head>

<body>

    <section class="main">
        <div w3-include-html="index.html"></div>
        <h1>Profile</h1>
    <img class="profile-pic" style="width:50px;height:50px;border-radius:25px;" src="<?php echo $_SESSION['gitUserData']['picture'] ?>">
    <p> Welcome, <?php echo $_SESSION['gitUserData']['username']; ?></p>
    <p>Logout from <a href="github_login_with_php/logout.php">GitHub</a></p>
    <p><b>Profile Link:</b> <a href="<?php echo $_SESSION['gitUserData']['link'] ?>" target="_blank">Click to visit GitHub page</a></p>


    <!-- Avatar Frame -->
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
    <!-- End of Avatar Frame -->
    <form method="post" style="position:relative;bottom:300px;left:800px;">
    Paste the Avatar URL<br />
    <input type="text" name="avatar-url" id="avatar-url" style="width:200px;">
    <br>
    <button type="submit" style="width:70px;height:40px;background-color:blue; border-radius:15px;">Save</button>
  </form>
  
  <?php

  ?>























        <div class="cursor"></div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="sc.js"></script>
    <script>
        includeHTML();
    </script>
</body>

</html>