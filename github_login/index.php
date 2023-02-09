<?php
// Include configuration file 
require_once 'config.php';

// Include and initialize user class 
require_once 'User.class.php';
$user = new User();

if (isset($accessToken)) {
    // Get the user profile data from Github 
    $gitUser = $gitClient->getAuthenticatedUser($accessToken);

    if (!empty($gitUser)) {
        // Getting user profile details 

        $gitUserData = array();
        $gitUserData['oauth_uid'] = !empty($gitUser->id) ? $gitUser->id : '';
        $gitUserData['name'] = !empty($gitUser->name) ? $gitUser->name : '';
        $gitUserData['username'] = !empty($gitUser->login) ? $gitUser->login : '';
        $gitUserData['email'] = !empty($gitUser->email) ? $gitUser->email : '';
        $gitUserData['location'] = !empty($gitUser->location) ? $gitUser->location : '';
        $gitUserData['picture'] = !empty($gitUser->avatar_url) ? $gitUser->avatar_url : '';
        $gitUserData['link'] = !empty($gitUser->html_url) ? $gitUser->html_url : '';
        $_SESSION['gitUserData'] = $gitUserData;
        // Insert or update user data to the database 
        $gitUserData['oauth_provider'] = 'github';
        $userData = $user->checkUser($gitUserData);

        // Storing user data in the session 
        $_SESSION['userData'] = $userData;
        
        // Render Github profile data 
        //$output = '<h2>Profile</h2>';
        $output .= '<div class="ac-data">';
        //$output .= '<img class="profile-pic" src="' . $userData['picture'] . '">';
        $output .= '<p><b>ID:</b> ' . $userData['oauth_uid'] . '</p>';
        $output .= '<p><b>Name:</b> ' . $userData['name'] . '</p>';
        $output .= '<p><b>Login Username:</b> ' . $userData['username'] . '</p>';
        $output .= '<p><b>Email:</b> ' . $userData['email'] . '</p>';
        $output .= '<p><b>Location:</b> ' . $userData['location'] . '</p>';
        $output .= '<p><b>Profile Link:</b> <a href="' . $userData['link'] . '" target="_blank">Click to visit GitHub page</a></p>';
        $output .= '<p>Logout from <a href="github_login/logout.php">GitHub</a></p>';
        $output .= '</div>';
    } else {
        $output = '<h3 style="color:red">Something went wrong, please try again!</h3>';
    }
    header('Location:../avatar.php');
    $_SESSION['userOutput'] = $output;
} elseif (isset($_GET['code'])) {
    // Verify the state matches the stored state 
    if (!$_GET['state'] || $_SESSION['state'] != $_GET['state']) {
        header("Location: " . $_SERVER['PHP_SELF']);
    }

    // Exchange the auth code for a token 
    $accessToken = $gitClient->getAccessToken($_GET['state'], $_GET['code']);

    $_SESSION['access_token'] = $accessToken;

    header('Location: ./');
} else {
    // Generate a random hash and store in the session for security 
    $_SESSION['state'] = hash('sha256', microtime(TRUE) . rand() . $_SERVER['REMOTE_ADDR']);

    // Remove access token from the session 
    unset($_SESSION['access_token']);

    // Get the URL to authorize 
    $authUrl = $gitClient->getAuthorizeURL($_SESSION['state']);

    // Render Github login button 
    $output = '<p style="position:absolute;left:675px;top:240px;">Login with Github</p><a href="' . htmlspecialchars($authUrl) . '"><img class="login-image" src="images/github.png"></a>';
}
?>
<html>

<head>
    <title>Github Login</title>
    <link rel="icon" type="image/x-icon" href="../images/icon2.ico">
    <style>
        .profile-pic {
            width: 50px;
            height: 50px;

        }

        .container {
            width: 200px;
            height: 200px;
        }

        .login-image {
            position: absolute;
            width: 200px;
            height: 200px;
            left: 640px;
            top: 250px;

        }

        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }

        body {
            font-family: poppins, sans-serif;
            overflow-x: hidden;
            color: white;
            background: rgb(0, 0, 0);
        }

        .bg {
            position: fixed;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            background: black;
            z-index: -2;
        }

        .bg .star {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            animation: bgstar 8s ease-in-out infinite;
            /* bgmove 16s linear infinite; */
        }

        .star.star1 {
            animation-delay: 0s;
            background: url(images/star1.png);
        }

        .star.star2 {
            animation-delay: -1s;
            background: url(images/star2.png);
        }

        .star.star3 {
            animation-delay: -2s;
            background: url(images/star3.png);
        }

        .star.star4 {
            animation-delay: -3s;
            background: url(images/star4.png);
        }

        .star.star5 {
            animation-delay: -4s;
            background: url(images/star5.png);
        }

        .star.star6 {
            animation-delay: -5s;
            background: url(images/star6.png);
        }

        @keyframes bgstar {

            0%,
            20%,
            40%,
            60%,
            80%,
            100% {
                opacity: 0;
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                opacity: 0.8;
            }
        }

        @keyframes bgmove {
            0% {
                transform: scale(0.9);
            }

            100% {
                transform: scale(1.1);
            }
        }
    </style>
</head>
<section class="bg">
    <div class="star star1"></div>
    <div class="star star2"></div>
    <div class="star star3"></div>
    <div class="star star4"></div>
    <div class="star star5"></div>
    <div class="star star6"></div>
</section>
<div class="container">
    <div class="wrapper">
        <!-- Display login button / GitHub profile information -->

        <?php echo $output; ?>
    </div>
</div>

</html>