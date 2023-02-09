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
    <title>Home</title>


    <!-- material icon stylesheet -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Symbols+Sharp">
    <!-- daisyui linking file -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.50.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="style.css" rel="stylesheet">
    <link href="home.css" rel="stylesheet">
</head>

<body>
    <section class="main">
        <div w3-include-html="index.html"></div>
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
                  <li><a href="home.php">Home</a></li>
                  <li><a href="universe.php">Multiverse</a></li>
                  <li><a href="profile.php">Profile</a></li>
                  <li><a href="aboutus.php">About Us</a></li>
                </div>
                <div class="profile">
                  <div class="dropdown dropdown-end">
                    <label tabindex="0">
                      <?php echo $_SESSION['gitUserData']['username'] ?>
                    </label>
                  </div>
                </div>
              </div>
            <div class="topabout">
                <div class="toptitle">About Quiztopia</div>
                <p>
                    Welcome to the Multiverse Survival Quizzards website! Our goal is to provide an exciting and
                    challenging platform for quizzards to hone their skills and test their abilities across multiple
                    universes. We believe that travel between these universes is not only thrilling but also offers a
                    unique opportunity for personal growth and development.
                    <br><br>
                    Our website is designed for quizzards of all ages and skill levels, and offers a range of activities
                    and games to challenge and improve their mind. From memory tests to problem-solving puzzles, we aim
                    to provide a comprehensive and fun experience that will help them build their mental prowess.
                    <br><br>

                    One of the key features of our website is our multiplayer game. This exciting and fast-paced
                    competition will put their speed, attention and focus, as well as their problem-solving and
                    strategic skills, to the test. With the ability to adapt to different universes and their unique
                    characteristics, quizzards will need to use their flexibility and adaptability to succeed.
                    <br><br>

                    Our website is built by a team of experts who are dedicated to helping quizzards achieve their full
                    potential. We believe that by challenging their minds and helping them develop their skills, we can
                    help create a generation of quizzards who are capable of navigating the multiverse with confidence
                    and success.
                    <br><br>

                    Whether you are a seasoned quizzard or just starting out, we invite you to join us on this exciting
                    journey through the multiverse. With our website, you'll have the tools and resources you need to
                    achieve your goals and become a master of the multiverse.

                </p>
            </div>
            <div class="bottomabout">
                <div class="members">Our Team</div>
                <div class="mem">
                    <div class="one">
                        <div class="photo bg-[url(images/p3.png)]"></div>
                        <div class="textpara">
                            Caymann Velingkar, the Problem Solver <br><br>
                            "He is a B.E. student with a deep understanding of how to solve complex problems and a
                            talent for
                            finding creative solutions. He has a unique perspective on the intersection of technology
                            and business, and
                            is always looking for ways to bring new ideas to life.
                            Whether he is working on a group project or an individual task,his ultimate goal is always
                            to find
                            the best possible solution."
                        </div>
                    </div>
                </div>
                <div class="mem">
                    <div class="two">
                        <div class="textpara">
                            Mallika Desai, the Innovator <br> <br>
                            "She is a B.E. student with a passion for innovation and a drive to push the boundaries of
                            what's
                            possible. Her technical skills are matched only by her creativity, and is always seeking
                            new and better ways to tackle complex problems. Whether it may be coding, designing, or
                            prototyping, she
                            is always pushing the envelope and seeking to find better solutions."
                        </div>
                        <div class="photo bg-[url(images/p1.jpg)]"></div>
                    </div>
                </div>
                <div class="mem">
                    <div class="one">
                        <div class="photo bg-[url(images/p2.png)]"></div>
                        <div class="textpara">
                            Kaustubh Athalekar, the Tech Guru<br><br>
                            "He is a B.E. student with a deep understanding of all things technical. With a strong
                            knowledge of core
                            concepts in technology, he has a wealth of experience and expertise and is always seeking
                            new
                            and
                            innovative ways to use technology to solve problems. Whether he is working on a coding
                            project,
                            designing a new system, or simply helping a fellow student,his ultimate goal is always to
                            make a
                            positive impact in the lives of those he serves."

                        </div>
                    </div>
                </div>

            </div>




























        </div>
        <div class="cursor"></div>
    </section>
    <!-- jquery link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="sc.js"></script>
    <script>
        includeHTML();
    </script>
</body>

</html>