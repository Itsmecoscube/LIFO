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
    <title>Mindmaze Paradise</title>
    <link rel="icon" type="image/x-icon" href="images/icon2.ico">
    <!-- material icon stylesheet -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Symbols+Sharp">
    <!-- daisyui linking file -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.50.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="../style.css" rel="stylesheet">
    <link href="./games.css" rel="stylesheet">
</head>

<body>
    <div class="nav">
        <div class="webname">Quiztopia</div>
        <div class="maintabs">
            <li><a href="../home.php">Home</a></li>
            <li><a href="universes.php">Universes</a></li>
            <li><a href="../profile.php">Profile</a></li>
            <li><a href="../aboutus.php">About Us</a></li>
        </div>

        <div class="profile">
            <img align="right" src="../images/avatar-removebg.png"
                style="width:180px;position:fixed;left:1350px;top:80px;">

            <a href="../profile.php">
                <div class="dropdown dropdown-end">
                    <label tabindex="0">
                        <?php echo $_SESSION['gitUserData']['username'] ?>
                    </label>
                </div>
            </a>
        </div>
    </div>
    <section class="main">
        <div w3-include-html="../index.html"></div>
        <div class="content">


            <div class="boxx">
                <div class="top bg-[url(../images/img4.jpg)]">
                    <div class="title">Mindmaze Paradise [Scramble Words]</div>
                </div>

                <div class="bottom">
                    <div class="tabsection">
                        <div class="tabs">
                            <button class="tablinks" onclick="history.go(-1)">Back</button>
                            <button class="tablinks" onclick="opentab(event, 'about')" id="defaultOpen">about</button>
                            <button class="tablinks" onclick="opentab(event, 'rules')">rules</button>
                            <button class="tablinks" onclick="opentab(event, 'comments')">comments</button>
                            <a href="Dictionary/scramble.php"><button class="tablinks"
                                    style="background-color: yellow; color:black;font-weight: 600;">Start
                                    Game</button></a>
                        </div>
                    </div>

                    <div class="descriptionsection">
                        <div id="about" class="tabcontent">
                            <p>"Science is the poetry of reality." - Richard Dawkins
                            </p><p>
                            </p><p>Embark on a journey of discovery and unravel the mysteries of the world through this exciting Science Jumbled Word Quiz! 
                            </p><p>Test your knowledge of scientific terms and concepts by unscrambling jumbled words related to biology, physics, chemistry, and more. 
                            </p><p>With each correct answer, you'll gain a deeper understanding of the wonders of science. So sharpen your skills, challenge yourself, 
                            </p><p>and let the quest for knowledge begin.

                            </p>
                        </div>
                        <div id="rules" class="tabcontent">
                            <p>Put the letters in order to create a meaningful word according to the hint.
                            </p><p>You will receive +10 points for a correct answer.
                            </p><p>You have 30 seconds to answer as many as you can.
                            </p><p>If you don't know the answer, you can refresh it to get a new word.
                            </p><p>The answers are not case sensitive

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