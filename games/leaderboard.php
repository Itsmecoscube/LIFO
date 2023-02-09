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
    <title>Techfin Galaxy</title>
    <link rel="icon" type="image/x-icon" href="images/icon2.ico">
    <!-- material icon stylesheet -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Symbols+Sharp">
    <!-- daisyui linking file -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.50.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
<style>
    .tablinks {
    border-radius: 0.5rem;
    padding: 0.5rem;
}

.tablinks.active,
.tablinks:hover {
    box-shadow: 0 0.25rem 1rem rgb(0, 0, 0);

}
</style>
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
        
        <div class="content"><br>
        <button style="border:solid white; border-radius:15px; width:100px;position:relative;left:20px;" onclick="history.go(-1)">Back</button>
<table bordercolor="white" border="10" cellspacing="10" cellpadding="10" width="50%"style="margin:auto; border:5px solid white; border-radius:10px;">
    <tr bgcolor = "blue">
    <th style="border:2px solid white">Rank</th>
    <th style="border:2px solid white">Name</th>
    <th style="border:2px solid white">Total Score</th>
</tr>
        <?php
        $mysqli = new mysqli('localhost', 'root', '', 'hack1');
        $query = "SELECT email,name,sum(score) as maxscore FROM scores group by email order by maxscore desc";
        $i = 1;
        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $field1name = $row["name"];
                $field2name = $row["maxscore"];
                echo '<tr align="center" style="border:2px solid white"><td style="border:2px solid white">'.$i.'</td style="border:2px solid white"><td style="border:2px solid white">'.$field1name.'</td><td>'.$field2name.'</td></tr>';
                $i++;
            }
            $result->free();
        }
        ?>
        </table>
            


        </div>
        <div class="cursor"></div>
    </section>

    <script src="../sc.js"></script>
    <script>
        includeHTML();
    </script>
</body>

</html>