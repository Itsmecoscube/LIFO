<?php session_start(); ?>
<html>
<head>
<link href="./style.css" rel="stylesheet">
<style>
    *{
        font-size:22px;
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
<?php
//Category 9:GK, 11:Film, 12:Music,
$api_url = 'https://opentdb.com/api.php?amount=10&category=9&difficulty=medium&type=multiple';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

$value = (array) $response_data;
//Print data if need to debug
echo '<form method="post" style="margin:20;top:10px;" action="quizverify.php">';
for ($i = 0; $i < 10;$i++)
{
    $result = (array) $value['results'][$i];
    echo"Q".($i+1).") ".($result['question'])."<br>";
    $answers = $result['incorrect_answers'];
    array_push($answers, $result['correct_answer']);
    shuffle($answers);
    //echo "Correct Answer: ".$result['correct_answer'];
    //print_r($answers);
    $_SESSION["question$i"] = $result['question'];
    $_SESSION["result$i"] = $result['correct_answer'];
    echo "<input type='radio' name='quiz$i' value = '".(string)$answers[0]."' required> " .(string)$answers[0].
    "<br><input type='radio' name='quiz$i' value = '".(string)$answers[1]."' required> " .(string)$answers[1].
    "<br><input type='radio' name='quiz$i' value = '".(string)$answers[2]."' required> " .(string)$answers[2].
    "<br><input type='radio' name='quiz$i' value = '".(string)$answers[3]."' required> " .(string)$answers[3].'<br><br>';
}
echo '<input type = "submit" name ="submit" value="Submit" style="background-color:yellow; width:150px; height: 50px; border-radius:20px; font-weight:600;">';


?>
</body>
</html>