<?php
session_start();
if (!isset($_SESSION['gitUserData']))
	header('Location:github_login/index.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" type="image/x-icon" href="images/icon2.ico">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quiztopia | Profile</title>

	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,1,0" />
	<link href="./style.css" rel="stylesheet">
	<meta charset="UTF-8" />
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Document</title>
	<style>
		html,
		body {
			width: 800px;
			height: 500px;
			margin-top: 40px;
			border: none;
		}

		.frame {
			width: 800px;
			height: 500px;
			margin: 0;
			padding: 20px;
			border: none;
		}

		* {
			cursor: default;
		}

		.profile-pic {
			width: 50px;
			height: 50px;

		}

		a:hover {
			cursor: pointer;
		}
	</style>
</head>

<body>
	<section class="bg">
		<div class="star star1"></div>
		<div class="star star2"></div>
		<div class="star star3"></div>
		<div class="star star4"></div>
		<div class="star star5"></div>
		<div class="star star6"></div>
	</section>
	<div class="nav">
        <div class="webname">Quiztopia</div>
        <div class="maintabs">
            <li><a href="./home.php">Home</a></li>
            <li><a href="games/universes.php">Universes</a></li>
            <li><a href="./profile.php">Profile</a></li>
            <li><a href="./aboutus.php">About Us</a></li>
        </div>

        <div class="profile">

            <a href="../profile.php">
                <div class="dropdown dropdown-end">
                    <label tabindex="0">
                        <?php echo $_SESSION['gitUserData']['username'] ?>
                    </label>
                </div>
            </a>
        </div>
    </div>
		
	<img align="right" src="images/avatar-removebg.png" style="width:180px;position:fixed;left:1350px;top:100px;">
	<section class="main" style="position:relative; left:10px;">
		<!-- <div w3-include-html="index.html"></div> -->
		<div width="100%" style="margin:auto">
			<h1>Profile</h1>
			<img class="profile-pic" style="width:50px;height:50px;border-radius:25px;"
				src="<?php echo $_SESSION['gitUserData']['picture'] ?>">
			<p> Welcome,
				<?php echo $_SESSION['gitUserData']['username']; ?>
			</p>




			<?php
			echo $_SESSION['userOutput'];
			?>
			<a href="avatar.php"><button class="tablinks"
					style="background-color: yellow; color:black;font-weight: 500;width:150px;height:40px;border-radius:35px;">Change
					Avatar</button></a>
		</div>





















		<div class="cursor"></div>
	</section>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
		integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="sc.js"></script>
	<script>
		includeHTML();
	</script> -->
</body>

</html>