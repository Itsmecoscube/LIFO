<?php
session_start();
if (!isset($_SESSION['gitUserData']))
  header('Location:github_login/index.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quiztopia | Home</title>
  <link rel="icon" type="image/x-icon" href="images/icon2.ico">
  <!-- material icon stylesheet -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Symbols+Sharp" />
  <!-- daisyui linking file -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.50.0/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>

  <link href="style.css" rel="stylesheet" />
  <link href="home.css" rel="stylesheet" />
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
      
      <!-- <div class="box1 bg-[url(images/f1.png)]"> -->
      <span class="magic">
                        <span class="material-symbols-sharp magic-star"><span class="s">star</span></span>
                        <span class="material-symbols-sharp magic-star"><span class="s">star</span></span>
                        <span class="material-symbols-sharp magic-star"><span class="s">star</span></span>
                        <span class="material-symbols-sharp magic-star"><span class="s">star</span></span>
                        <span class="material-symbols-sharp magic-star"><span class="s">star</span></span>
                        <span class="magic-text2">
                            Welcome to the Multiverse</span>
                    </span>

                </div>
        <div class="aboutus">
          
          <div class="box2">
            <div class="abouttitle">About us</div>
            <div class="para">
              Welcome to the Multiverse Survival Quizzards website! Our goal
              is to provide an exciting and challenging platform for quizzards
              to hone their skills and test their abilities across multiple
              universes. We believe that travel between these universes is not
              only thrilling but also offers a unique opportunity for personal
              growth and development.
              <br />
              <br />
              Our website is designed for quizzards of all ages and skill
              levels, and offers a range of activities and games to challenge
              and improve their mind. From memory tests to problem-solving
              puzzles, we aim to provide a comprehensive and fun experience
              that will help them build their mental prowess.
              <br />
              <br />
              Whether you are a seasoned quizzard or just starting out, we
              invite you to join us on this exciting journey through the
              multiverse. With our website, you'll have the tools and
              resources you need to achieve your goals and become a master of
              the multiverse.
            </div>
          </div>
        </div>
      <!-- </div> -->
      <!-- <div class="explore">
        <div class="btnn">EXPLORE</div>
      </div> -->
      <div class="comparison" style="z-index:-10">
        <div class="topbox">
          <div class="search">
            <input type="text" id="myInput" onkeyup="myFunctionsearch()" placeholder="Search for names.." />
            <span class="material-symbols-sharp seacrch"> search </span>
          </div>
        </div>
        <table class="tablee" id="myTable">
          <tr class="trr headingrow header">
            <th class="tdd" onclick="sortTable(0)">
              Universe Name
              <span class="material-symbols-sharp sync_alt"> sync_alt </span>
            </th>
            <th class="tdd" onclick="sortTable(1)">
              Score
              <span class="material-symbols-sharp sync_alt"> sync_alt </span>
            </th>
            <th class="tdd" onclick="sortTable(2)">
              Difficulty level
              <span class="material-symbols-sharp sync_alt"> sync_alt </span>
            </th>
          </tr>
          <!-- <a href="./games/fintech.html" class="aa"> -->
          <tr class="trr">
            <td class="tdd">Techverse</td>
            <td class="tdd">9</td>
            <td class="tdd">Difficult</td>
          </tr>
          <!-- </a> -->
          <!-- <a href="./games/science.html" class="aa"> -->
          <tr class="trr">
            <td class="tdd">ScienceSphere</td>
            <td class="tdd">8</td>
            <td class="tdd">Easy</td>
          </tr>
          <!-- </a> -->
          <!-- <a href="./games/movies.html" class="aa"> -->
          <tr class="trr">
            <td class="tdd">FilmVerse</td>
            <td class="tdd">4</td>
            <td class="tdd">Difficult</td>
          </tr>
          <!-- </a> -->
          <!-- <a href="./games/braingames.html" class="aa"> -->
          <tr class="trr">
            <td class="tdd">MindMaze Paradise</td>
            <td class="tdd">6</td>
            <td class="tdd">Medium</td>
          </tr>
          <!-- </a> -->
          <!-- <a href="./games/brands.html" class="aa"> -->
          <tr class="trr">
            <td class="tdd">Mystery of History</td>
            <td class="tdd">8</td>
            <td class="tdd">Difficult</td>
          </tr>
          <!-- </a> -->
        </table>
      </div>
    </div>
    <div class="cursor"></div>
  </section>
  <img align="right" src="images/avatar-removebg.png" style="width:180px;position:fixed;left:1350px;top:100px;">
  <!-- jquery link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="sc.js"></script>
  <script>
    includeHTML();
    function sortTable(n) {
      var table,
        rows,
        switching,
        i,
        x,
        y,
        shouldSwitch,
        dir,
        switchcount = 0;
      table = document.getElementById("myTable");
      switching = true;
      dir = "asc";
      while (switching) {
        switching = false;
        rows = table.rows;
        for (i = 1; i < rows.length - 1; i++) {
          shouldSwitch = false;
          x = rows[i].getElementsByTagName("TD")[n];
          y = rows[i + 1].getElementsByTagName("TD")[n];
          if (dir == "asc") {
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
              shouldSwitch = true;
              break;
            }
          } else if (dir == "desc") {
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
              shouldSwitch = true;
              break;
            }
          }
        }
        if (shouldSwitch) {
          rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
          switching = true;
          switchcount++;
        } else {
          if (switchcount == 0 && dir == "asc") {
            dir = "desc";
            switching = true;
          }
        }
      }
    }
    function sortTable1(n) {
      var table,
        rows,
        switching,
        i,
        x,
        y,
        shouldSwitch,
        dir,
        switchcount = 0;
      table = document.getElementById("myTable");
      switching = true;
      dir = "asc";
      while (switching) {
        switching = false;
        rows = table.rows;
        for (i = 2; i < rows.length - 1; i++) {
          shouldSwitch = false;
          x = rows[i].getElementsByTagName("TD")[n];
          y = rows[i + 1].getElementsByTagName("TD")[n];
          if (dir == "asc") {
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
              shouldSwitch = true;
              break;
            }
          } else if (dir == "desc") {
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
              shouldSwitch = true;
              break;
            }
          }
        }
        if (shouldSwitch) {
          rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
          switching = true;
          switchcount++;
        } else {
          if (switchcount == 0 && dir == "asc") {
            dir = "desc";
            switching = true;
          }
        }
      }
    }

    function myFunctionsearch() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  </script>
</body>

</html>