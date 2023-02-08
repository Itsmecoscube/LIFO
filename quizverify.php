<?php session_start(); ?>
<html>
    <head>
        <title>Score</title>
        <link href="./style.css" rel="stylesheet">
        <style>
            *{
                align-items: center;
                align-self: center;
                align-content: center;
                text-align: center;
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
<div style="margin:20;top:10px;">

<?php
$score=0;
    for ($i = 0; $i < 10; $i++) {
        $selected_answer = $_POST['quiz'.$i];
    $correct_answer = $_SESSION["result$i"];
        if ($selected_answer == $correct_answer)
             $score++;
    }
    echo "<h1 class='shine'>Your Score is " . $score."/10</h1><br/><br/>";
    for ($i = 0; $i < 10; $i++) {
        $selected_answer = $_POST['quiz'.$i];
    $correct_answer = $_SESSION["result$i"];
    echo "Q" . ($i + 1).": ".$_SESSION["question$i"];
        echo "<br>Selected Answer: ". $_POST['quiz' . $i] . '<br>';
        echo "Correct Answer: ".$_SESSION["result$i"] . '<br><br>';
    }

?>
</div>
</body>
</html>