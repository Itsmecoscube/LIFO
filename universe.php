<?php
session_start();
if (!isset($_SESSION['gitUserData']))
  header('Location:github_login/index.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="universe.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/icon2.ico">
    <style>
        *,body{
            background:none;
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
    <button style="border:solid white; border-radius:15px; width:100px;position:absolute;left:20px;top:20px; color:white;" onclick="history.go(-1)">Back</button>
    <div class="card">
        <div class="circle" style="--clr:#f40103;">
           <!-- <img src="quiztopia.png" class="logo">-->
        </div>
        <div class="content">
            <h2>CHOOSE YOUR MULTIVERSE</h2>
            <a href = "games/universes.php"><button class="tablinks" style="background-color: yellow; color:black;font-weight: 500;">SINGLE PLAYER</button></a>
            <br><br>
            <a href="Multiplayer/multiuniverses.php"><button class="tablinks" style="background-color: yellow; color:black;font-weight: 500;">MULTI PLAYER</button>                      
        </div>
        <a href="./Multiplayer/puzzle.php">
            <img src="quiztopia.png" class="prod" alt="Button">
        </a>

    </div> 
</body>
</html>