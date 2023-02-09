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
    <title>ScienceSphere</title>
    <link rel="icon" type="image/x-icon" href="../images/icon2.ico">

    <!-- material icon stylesheet -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Symbols+Sharp">
    <!-- daisyui linking file -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.50.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="../style.css" rel="stylesheet">
    <link href="./games.css" rel="stylesheet">
    <style>
        button {
    margin: 20px auto;
    border: none;
    border-radius: 2px;
    padding: 12px 18px;
    font-size: 16px;
    text-transform: uppercase;
    cursor: pointer;
    color: #000000;
    background: #2196f3 center;
    box-shadow: 0 0 4px #999;
    outline: none;
    transition: background 0.5s;
  }
  button:hover {
    background: #47a7f5 radial-gradient(circle, transparent 1%, #47a7f5 1%) center/15000%;
  }
  button:active {
    background-color: #6eb9f7;
    background-size: 100%;
    transition: background 0s;
  }
        </style>
</head>

<body>
    <section class="main">
        <div w3-include-html="../index.html"></div>
        <div class="content">
        <div class="nav">
        <div class="webname"><span class="magic">
            <span class="material-symbols-sharp magic-star"><span class="s">star</span></span>
            <!-- <span class="material-symbols-sharp magic-star"><span class="s">star</span></span> -->
            <span class="material-symbols-sharp magic-star"><span class="s">star</span></span>
            <!-- <span class="material-symbols-sharp magic-star"><span class="s">star</span></span> -->
            <span class="material-symbols-sharp magic-star"><span class="s">star</span></span>
            <span class="magic-text">
              Quiztopia</span>
          </span></div>
        <div class="maintabs">
          <li><a href="../home.php">Home</a></li>
          <li><a href="../universe.php">Multiverse</a></li>
          <li><a href="../profile.php">Profile</a></li>
          <li><a href="../aboutus.php">About Us</a></li>
        </div>
        <div class="profile">
          <div class="dropdown dropdown-end">
            <label tabindex="0">
              <?php echo $_SESSION['gitUserData']['username'] ?>
            </label>
          </div>
        </div>
      </div>

            <div class="boxx">
                <div class="top bg-[url(1xox.png)]">
                    <div class="title">XOX</div>
                </div>

                <div class="bottom">
                    <div class="tabsection">
                        <div class="tabs">
                        <button class="tablinks" onclick="history.go(-1)">Back</button>
                            <button class="tablinks" onclick="opentab(event, 'about')" id="defaultOpen">about</button>
                            <button class="tablinks" onclick="opentab(event, 'rules')">rules</button>
                            <button class="tablinks" onclick="opentab(event, 'comments')">comments</button>
                            <a href="TicTacToe/index.php"><button class="tablinks"
                                    style="background-color: yellow; color:black;font-weight: 600;">Start
                                    Game</button></a>                      
                        </div>
                    </div>

                    <div class="descriptionsection">
                        <div id="about" class="tabcontent">
                            <p>XOX, also known as Tic Tac Toe, is a childhood classic that brings back fond memories of carefree days 
                            </p><p>and friendly competition. This simple yet challenging game has been enjoyed by generations and is still as 
                            </p><p>popular today as it was decades ago. With its timeless appeal, XOX is a game that can be enjoyed by all ages, 
                            </p><p>whether you're looking to relive a childhood memory or introduce the next generation to a classic pastime. 
                            </p><p>So, grab a friend, and get ready to immerse yourself in the nostalgia of XOX!

                            </p>
                        </div>
                        <div id="rules" class="tabcontent">
                            <p>XOX, also known as Tic Tac Toe, is a simple two-player game.
                            </p><p>The objective of the game is to place three Xs or Os in a row either horizontally, vertically, or diagonally.
                            </p><p>The first player starts by placing an X, while the second player places an O.
                            </p><p>The players take turns marking their symbol on the 3x3 grid until one player gets three in a row.
                            </p><p>If all the squares are filled and no player has three in a row, the game is a draw.
                            </p><p>The player who successfully places three of their symbols in a row wins the game.

                            </p>
                        </div>

                        <div id="comments" class="tabcontent">
                            <p>











                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cursor"></div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="../sc.js"></script>
    <script>
        includeHTML();
    </script>
</body>

</html>