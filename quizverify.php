<?php session_start();
if (!isset($_SESSION['gitUserData']))
    header('Location:github_login/index.php');
if (!isset($_POST['submit']))
    header('Location:home.php');
?>
<html>

<head>
    <title>Score</title>
    <link rel="icon" type="image/x-icon" href="images/icon2.ico">
    <link href="./style.css" rel="stylesheet">
    <style>
        * {
            align-items: center;
            align-self: center;
            align-content: center;
            text-align: center;
        }
    </style>
</head>

<body>
    <p align="right" style="position:fixed;left:1300px;">
        <?php echo $_SESSION['gitUserData']['username'] ?>
    </p>
    <img align="right" src="images/avatar-removebg.png" style="width:180px;position:fixed;left:1300px;top:50px;">
    <section class="bg">
        <div class="star star1"></div>
        <div class="star star2"></div>
        <div class="star star3"></div>
        <div class="star star4"></div>
        <div class="star star5"></div>
        <div class="star star6"></div>
    </section>
    <div style="margin:20;top:10px;">

        <?php
        $score = 0;
        for ($i = 0; $i < 10; $i++) {
            $selected_answer = $_POST['quiz' . $i];
            $correct_answer = $_SESSION["result$i"];
            if ($selected_answer == $correct_answer)
                $score++;
        }
        echo "<h1 class='shine'>Your Score is " . $score . "/10</h1><br/><br/>";
        for ($i = 0; $i < 10; $i++) {
            $selected_answer = $_POST['quiz' . $i];
            $correct_answer = $_SESSION["result$i"];
            echo "Q" . ($i + 1) . ": " . $_SESSION["question$i"];
            echo "<br>Selected Answer: " . $_POST['quiz' . $i] . '<br>';
            echo "Correct Answer: " . $_SESSION["result$i"] . '<br><br>';
        }
        $email = $_SESSION['userData']['email'];
        $category = $_GET['category'];
        $name = $_SESSION['userData']['name'];
        echo $email.$name;
        $mysqli = new mysqli('localhost', 'root', '', 'hack1');
if ($mysqli->connect_error) {
    die('Connection Failed: ' . $mysqli->connect_error);
        } else {
            $query = "SELECT score from scores where email = '$email' and category = '$category'";
            if ($result = $mysqli->query($query)) {
                if ($row = $result->fetch_assoc()) {
                    $maxscore = $row['score'];
                    if($score > $maxscore)
                    {
                        $stmt = $mysqli->prepare("update scores set score='$score' where email='$email' and category='$category'");
                        $stmt->execute();
                        $stmt->close();
                    }
            }
            else{
                $stmt = $mysqli->prepare("insert into scores (score, email, category, name) values('$score','$email', '$category','$name')");
                        $stmt->execute();
                        $stmt->close();
            }
            }
        }
        ?>
    </div>
    <a href="home.php" style="cursor:pointer;">Go Back Home</a>
</body>

</html>