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
    <title>FilmVerse</title>
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
                <div class="top bg-[url(../images/img3.jpg)]">
                    <div class="title">FilmVerse</div>
                </div>



                <div class="bottom">

                    <div class="tabsection">
                        <div class="tabs">
                        <button class="tablinks" onclick="history.go(-1)">Back</button>
                            <button class="tablinks" onclick="opentab(event, 'about')" id="defaultOpen">about</button>
                            <button class="tablinks" onclick="opentab(event, 'rules')">rules</button>
                            <button class="tablinks" onclick="opentab(event, 'comments')">comments</button>
                            <a href="../quiz.php?category=11"><button class="tablinks"
                                    style="background-color: yellow; color:black;font-weight: 600;">Start
                                    Quiz</button></a>
                            <p style="position:relative;bottom:10px;font-weight:500;"> Your Top Score = 
                            <?php
                            $mysqli = new mysqli('localhost', 'root', '', 'hack1');
                            if ($mysqli->connect_error) {
                                die('Connection Failed: ' . $mysqli->connect_error);
                                    } else {
                                        $email = $_SESSION['userData']['email'];
                                $category = 11;
                                        $query = "SELECT score from scores where email = '$email' and category = '$category'";
                                        if ($result = $mysqli->query($query)) {
                                            if ($row = $result->fetch_assoc()) {
                                                $maxscore = $row['score'];
                                        echo $maxscore;
                                        }
                                        else{
                                        echo 0;
                                        }
                                        }
                                    }
                            ?>/10</p>
                        </div>
                    </div>

                    <div class="descriptionsection">
                        <div id="about" class="tabcontent">
                            <p>"The beauty of cinema is that it allows us to escape into a world of imagination, where anything is possible." - Steven Spielberg
                            </p><p>
                            </p><p>Get ready to dive into the world of films with our Filmverse Quiz! Test your knowledge of your favorite films, actors, directors, and movie trivia. 
                            </p><p>From classic films to modern blockbusters, this quiz will challenge your understanding of the film industry. 
                            </p><p>With no negative markings, you can answer as many questions as you like, with a +10 point reward for each correct answer. 
                            </p><p>So grab your popcorn and let the movie magic begin!

                            </p>
                        </div>
                        <div id="rules" class="tabcontent">
                            <p>- All questions will be in multiple choice format.
                                </p><p>- You are required to answer all questions.
                                </p><p>- There are no deductions for incorrect answers.
                                </p><p>- For each correct answer, you will receive +10 points.
                                </p><p>- Your highest score will be recorded and added to your overall total.


                            </p>
                        </div>

                        <div id="comments" class="tabcontent">
                            <p></p>
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