<?php
session_start();
if (!isset($_SESSION['gitUserData']))
    header('Location:.../github_login/index.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="../images/icon2.ico">
</head>
<body>
    <!--Creating navbar-->
     
    <nav>
        <ul>
            <li>MyTicTacToe.com</li>
        </ul>
    </nav>
    <button onclick="history.go(-1)" style="margin:auto;">Back</button>
    <div class="gameContainer"> <!--div.gameContainer-->
        <div class="container"><!--This container will contain the game-->
            <!--Creating 9 boxes to play-->
            <div class="box bt-0 bl-0"><span class="boxtext"></span></div>
            <div class="box bt-0"><span class="boxtext"></span></div>
            <div class="box bt-0 br-0"><span class="boxtext"></span></div>
            <div class="box bl-0"><span class="boxtext"></span></div>
            <div class="box"><span class="boxtext"></span></div>
            <div class="box br-0"><span class="boxtext"></span></div>
            <div class="box bl-0 bb-0"><span class="boxtext"></span></div>
            <div class="box bb-0"><span class="boxtext"></span></div>
            <div class="box bb-0 br-0"><span class="boxtext"></span></div>
        </div>
        <div class="gameInfo"><!--This container will contain the game info-->
            <h1>Welcome to Tic-Tac-Toe MyTicTacToe</h1>
            <div>
                <h1><span class="info">
                    Turn for X</span></h1>
                <br>
                <button id="reset" onclick="location.reload()">RESET</button>
            </div>
            <div class="imgbox">
                <img src="excited.gif" alt="what is wrong">
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>