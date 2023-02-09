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
    <link rel="icon" type="image/x-icon" href="../images/icon2.ico">
    <title>Universes</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link href="../style.css" rel="stylesheet">
    <link href="./stylegame.css" rel="stylesheet">
</head>

<body style="background-color:black">
    <section class="main">
        <section class="bg">
            <div class="star star1"></div>
            <div class="star star2"></div>
            <div class="star star3"></div>
            <div class="star star4"></div>
            <div class="star star5"></div>
            <div class="star star6"></div>
        </section>
        <div class="boxx" style="margin-top:5.5vh;">
            <div class="containerleft">
                
                <div class="mainns">
                    
                    <span class="magic">
                        <span class="material-symbols-sharp magic-star"><span class="s">star</span></span>
                        <span class="material-symbols-sharp magic-star"><span class="s">star</span></span>
                        <span class="material-symbols-sharp magic-star"><span class="s">star</span></span>
                        <span class="material-symbols-sharp magic-star"><span class="s">star</span></span>
                        <span class="material-symbols-sharp magic-star"><span class="s">star</span></span>
                        <span class="magic-text">
                            MULTI-PLAYER <br>MULTIVERSE</span>
                    </span>
                </div>
                <div><a href="../home.php">Go Back Home</a></div>
                <div class="bottomg">
                    <!--
                    <div class="score">User Score: score</div>
                    <div class="rank">User Rank: rank</div>
                    <div class="btnn">Leaderboard</div>-->
                </div>
            </div>
            <div class="container">
                <div class="icon">
                    <div class="imgBx active" style="--i:1;" data-id="content1">
                    <a href="xox.php"><img src="1xox.png">
                    </div>
                    <div class="imgBx" style="--i:2;" data-id="content2">
                    <a href="connect4.php"><img src="2inrow.jpg"></a>
                    </div>
                </div>
                
                <div class="content">
                    <div class="contentBx active" id="content1">
                        <div class="card">
                            <div class="imgBx">
                                <img src="1xox.png" width=10%>
                            </div>
                            <div class="textBx">
                                <h2>XOX-LAND
                                </h2>
                                <p>TIC TAC TOE</p>
                                <!--Mallika put a link here-->
                            </div>
                        </div>
                    </div>

                    <div class="contentBx" id="content2">
                        <div class="card">
                            <div class="imgBx">
                                <img src="2inrow.jpg" width=10%>
                            </div>
                            <div class="textBx">
                                <h2>4 in row
                                </h2>
                                <p>All about money</p>
                            </div>
                        </div>
                    </div>


                    <div class="contentBx" id="content3">
                        <div class="card">
                            <div class="imgBx">
                                <img src="img3.jpg " width=10%>
                            </div>
                            <div class="textBx">
                                <h2>Movie & TV<br>
                                </h2>
                                <p>Small description+Button</p>
                            </div>
                        </div>
                    </div>

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