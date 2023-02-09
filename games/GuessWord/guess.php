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

    <link rel="stylesheet" href="guess.css">
</head>
<body>
    <div class="wrapper">
        <h1>Guess the word</h1>
        <div class="content">
            <input type="text" class="typing-input" maxlength="1">
            <div class="inputs">
            </div>
            <div class="details">
                <p class="hint">HINT:
                    <span></span>
                </p>
                <p class="guess-left">
                    Remaining Guesses:
                    <span></span>
                </p>
                <p class="wrong-letter">
                    Wrong letters:
                    <span></span>
                </p>
                <button class="reset-btn">RESET GAME</button>
                <div class="score">SCORE:<span></span><br></div>
                <div class="score">YOUR HIGH-SCORE:<span></span></div>
            </div>
        </div>
    </div>
    <script src="guess.js"></script> 
    <script src="word.js"></script> 
</body>
</html>