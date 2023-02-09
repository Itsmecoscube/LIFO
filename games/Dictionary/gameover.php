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
    <title>Police</title>
    <link rel="stylesheet" href="gameover.css">
</head>
<body>
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
          <li><a href=".../home.php">Home</a></li>
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
      <div>
    <section>
        <div class="scroll" style="--d:25; --y:0;">
            <div>
                <span>
                    Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over -Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over
                </span>
            </div>
            <div>
                <span>
                    Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over -Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over
                </span>
            </div>
        </div>
        <div class="scroll" style="--d:15; --y:110;">
            <div>
                <span>
                    Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over -Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over
                </span>
            </div>
            <div>
                <span>
                    Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over -Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over
                </span>
            </div>
        </div>
        <div class="scroll" style="--d:15; --y:200;">
            <div>
                <span>
                    Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over -Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over
                </span>
            </div>
            <div>
                <span>
                    Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over -Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over
                </span>
            </div>
        </div>
        <div class="scroll" style="--d:-20; --y:100;">
            <div>
                <span>
                    Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over -Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over
                </span>
            </div>
            <div>
                <span>
                    Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over -Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over
                </span>
            </div>
        </div>
        <div class="scroll" style="--d:20; --y:-100;">
            <div>
                <span>
                    Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over -Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over
                </span>
            </div>
            <div>
                <span>
                    Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over -Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over - Better luck next time! Your adventure has reached its conclusion. Game Over
                </span>
            </div>
        </div>
    </section>
    </div>
</body>
</html>