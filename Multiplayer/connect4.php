<?php
session_start();
if (!isset($_SESSION['gitUserData']))
  header('Location:github_login/index.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="../images/icon2.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScienceSphere</title>

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
                <div class="top bg-[url(2inrow.jpg)]">
                    <div class="title">Connect 4</div>
                </div>

                <div class="bottom">
                    <div class="tabsection">
                        <div class="tabs">
                        <button class="tablinks" onclick="history.go(-1)">Back</button>
                            <button class="tablinks" onclick="opentab(event, 'about')" id="defaultOpen">about</button>
                            <button class="tablinks" onclick="opentab(event, 'rules')">rules</button>
                            <button class="tablinks" onclick="opentab(event, 'comments')">comments</button>
                            <a href="CONNECT4/four.php"><button class="tablinks"
                                    style="background-color: yellow; color:black;font-weight: 600;">Start
                                    Game</button></a>                      
                        </div>
                    </div>

                    <div class="descriptionsection">
                        <div id="about" class="tabcontent">
                            <p>The Connect 4 game is a classic strategy game in which 2 players go head-to-head in a battle to own the grid! 
                            </p><p>Players choose yellow or red discs. They drop the discs into the grid, starting in the middle or at the 
                            </p><p>edge to stack their colored discs upwards, horizontally, or diagonally.

                            </p>
                        </div>
                        <div id="rules" class="tabcontent">
                            <p>Connect 4 pieces horizontally, vertically or diagonally to win the match. 
                            </p><p>You can play against the computer, a friend, or challenge players online. 
                            </p><p>Take turns dropping chips into the columns in order to get four in a row. To drop a chip, click on a 
                            </p><p>column on the board or click and drag your chip into a column.

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