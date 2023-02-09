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
    <title>Techverse</title>
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
            <li><a href="../aboutus.php">About us</a></li>
        </div>

        <div class="profile">
            <img align="right" src="../images/avatar-removebg.png"
                style="width:180px;position:fixed;left:1350px;top:80px;">

            <a href="../home.php">
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
                <div class="top bg-[url(../images/img2.jpg)]">
                    <div class="title">Techverse</div>
                </div>
                <div class="bottom">

                    <div class="tabsection">
                        <div class="tabs">
                        <button class="tablinks" onclick="history.go(-1)">Back</button>
                            <button class="tablinks" onclick="opentab(event, 'about')" id="defaultOpen">about</button>
                            <button class="tablinks" onclick="opentab(event, 'rules')">rules</button>
                            <button class="tablinks" onclick="opentab(event, 'comments')">comments</button>
                            <a href="../quiz.php?category=30"><button class="tablinks"
                                    style="background-color: yellow; color:black;font-weight: 500;">Start
                                    Quiz</button></a>
                                    <p style="position:relative;bottom:10px;font-weight:500;"> Your Top Score = 
                            <?php
                            $mysqli = new mysqli('localhost', 'root', '', 'hack1');
                            if ($mysqli->connect_error) {
                                die('Connection Failed: ' . $mysqli->connect_error);
                                    } else {
                                        $email = $_SESSION['userData']['email'];
                                $category = 30;
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
                            <p>"Technology has always been the driving force behind human progress, pushing us to new heights and shaping the world as we know it today."
                                </p><p>
                                </p><p>Welcome to the Techverse Quiz, where you can test your knowledge and challenge yourself on the 
                                </p><p>latest advancements in technology. From smartphones to AI and everything in between, this quiz will put your 
                                </p><p>tech-savvy skills to the test. With questions on various topics related to technology, this quiz is designed to 
                                </p><p>be both educational and entertaining. So, are you ready to explore the world of technology?

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