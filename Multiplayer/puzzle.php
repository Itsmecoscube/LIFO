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
    <title>Puzzle</title>
    <link rel="icon" type="image/x-icon" href="images/icon2.ico">
    <!-- material icon stylesheet -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Symbols+Sharp">
    <!-- daisyui linking file -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.50.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="../style.css" rel="stylesheet">
    <link href="./games.css" rel="stylesheet">
</head>

<body>        <div w3-include-html="../index.html"></div>
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
    <section class="main">
        <div w3-include-html="../index.html"></div>
        <div class="content">


            <div class="boxx">
                <div class="top bg-[url(../images/kaustu.jpg)]">
                    <div class="title">SPECIAL PUZZLE</div>
                </div>



                <div class="bottom">

                    <div class="descriptionsection">
                        <div id="about" class="tabcontent"><p>
                        Congratulations! You have reached the hidden puzzle. This challenge requires careful observation and attention to detail.A group of rabbits from the multiverse of the species Lopex are lost in the world of Quiztopia (on our website, note: only the frontend).The player must find all the rabbits and correctly determine the total number of rabbits. If the player's answer is correct, their score will be increased by 200 points. If the player's answer is incorrect, their score will be decreased by 100 points. The objective of the game is to find all the rabbits and accurately determine the total number of rabbits to increase the score.Good luck with finding them!
                            </p>
                        </div>
                        <div id="comments" class="tabcontent">
                            <p></p>
                        </div>
                    </div>

                    <input type="number" id="inputNumber">
                    <button class="tablinks" id="submitButton"
                    style="background-color: yellow; color:black;font-weight: 600;">PLAY</button></a>

<p id="result"></p>

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
    const inputNumber = document.querySelector("#inputNumber");
    const submitButton = document.querySelector("#submitButton");
    const result = document.querySelector("#result");
  
    submitButton.addEventListener("click", function() {
      if (inputNumber.value === "2") {
        result.innerHTML = "Winner";
      } else {
        result.innerHTML = "Lost";
      }
    });
  </script>
    <script>
        includeHTML();
    </script>
</body>

</html>