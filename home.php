<?php
session_start();
if(!isset($_SESSION['gitUserData']))
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
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <style>
      html,
      body{
        width: 800px;
        height: 500px;
        margin-top: 40px;
        border: none;
      }
      .frame{
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
<div class="nav">
    <div class="webname">website_name</div>
    <div class="maintabs">
        <li><a href="#">Home</a></li>
        <li><a href="games/universes.php">Universes</a></li>
        <li><a href="#">etc</a></li>
        <li><a href="#">etc</a></li>
    </div>
    <div class="profile">
        <div class="dropdown dropdown-end">
            <label tabindex="0"><?php echo $_SESSION['gitUserData']['username'] ?></label>
          </div>
    </div>
</div>
<p align="right" style="position:fixed;left:1325px;top:10px;font-size: 22px;"><?php echo $_SESSION['gitUserData']['username'] ?></p>
<img  align="right" src="images/avatar-removebg.png" style="width:180px;position:fixed;left:1350px;top:100px;">
    <section class="main">
        <div w3-include-html="index.html"></div>
        <h1>Profile</h1>
    <img class="profile-pic" style="width:50px;height:50px;border-radius:25px;" src="<?php echo $_SESSION['gitUserData']['picture'] ?>">
    <p> Welcome, <?php echo $_SESSION['gitUserData']['username']; ?></p>
    <p>Logout from <a href="github_login/logout.php">GitHub</a></p>
    <p><b>Profile Link:</b> <a href="<?php echo $_SESSION['gitUserData']['link'] ?>" target="_blank">Click to visit GitHub page</a></p>


    
  
  <?php

  ?>
  <a href="quiz.php?category=9">Answer Film Quiz here</a><br>
  <a href="quiz.php?category=18">Answer Science Quiz here</a>

  





















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