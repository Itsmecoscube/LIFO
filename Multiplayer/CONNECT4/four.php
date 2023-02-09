<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/icon2.ico">
    <title>Document</title>
    <link rel="stylesheet" href="four.css">
</head>
<body>
<h1>Connect 4</h1>
<button onclick="history.go(-1)" style="margin:auto;">Back</button>
<form style="background-color:black">
  <div class="board">
    <div class="field">
      <div class="grid column">
        <input type="radio" name="slot11" tabindex="-1" required>
        <input type="radio" name="slot11" tabindex="-1" required>
        <div class="disc"></div>
        <input type="radio" name="slot12" tabindex="-1" required>
        <input type="radio" name="slot12" tabindex="-1" required>
        <div class="disc"></div>
        <input type="radio" name="slot13" tabindex="-1" required>
        <input type="radio" name="slot13" tabindex="-1" required>
        <div class="disc"></div>
        <input type="radio" name="slot14" tabindex="-1" required>
        <input type="radio" name="slot14" tabindex="-1" required>
        <div class="disc"></div>
        <input type="radio" name="slot15" tabindex="-1" required>
        <input type="radio" name="slot15" tabindex="-1" required>
        <div class="disc"></div>
        <input type="radio" name="slot16" tabindex="-1" required>
        <input type="radio" name="slot16" tabindex="-1" required>
        <div class="disc"></div>

        <!--Column 1 after-->
        <div class="column">
          <input type="radio" name="slot21" tabindex="-1" required>
          <input type="radio" name="slot21" tabindex="-1" required>
          <div class="disc"></div>
          <input type="radio" name="slot22" tabindex="-1" required>
          <input type="radio" name="slot22" tabindex="-1" required>
          <div class="disc"></div>
          <input type="radio" name="slot23" tabindex="-1" required>
          <input type="radio" name="slot23" tabindex="-1" required>
          <div class="disc"></div>
          <input type="radio" name="slot24" tabindex="-1" required>
          <input type="radio" name="slot24" tabindex="-1" required>
          <div class="disc"></div>
          <input type="radio" name="slot25" tabindex="-1" required>
          <input type="radio" name="slot25" tabindex="-1" required>
          <div class="disc"></div>
          <input type="radio" name="slot26" tabindex="-1" required>
          <input type="radio" name="slot26" tabindex="-1" required>
          <div class="disc"></div>

          <!--Column 2 after-->
          <div class="column">
            <input type="radio" name="slot31" tabindex="-1" required>
            <input type="radio" name="slot31" tabindex="-1" required>
            <div class="disc"></div>
            <input type="radio" name="slot32" tabindex="-1" required>
            <input type="radio" name="slot32" tabindex="-1" required>
            <div class="disc"></div>
            <input type="radio" name="slot33" tabindex="-1" required>
            <input type="radio" name="slot33" tabindex="-1" required>
            <div class="disc"></div>
            <input type="radio" name="slot34" tabindex="-1" required>
            <input type="radio" name="slot34" tabindex="-1" required>
            <div class="disc"></div>
            <input type="radio" name="slot35" tabindex="-1" required>
            <input type="radio" name="slot35" tabindex="-1" required>
            <div class="disc"></div>
            <input type="radio" name="slot36" tabindex="-1" required>
            <input type="radio" name="slot36" tabindex="-1" required>
            <div class="disc"></div>

            <!--Column 3 after-->
            <div class="column">
              <input type="radio" name="slot41" tabindex="-1" required>
              <input type="radio" name="slot41" tabindex="-1" required>
              <div class="disc"></div>
              <input type="radio" name="slot42" tabindex="-1" required>
              <input type="radio" name="slot42" tabindex="-1" required>
              <div class="disc"></div>
              <input type="radio" name="slot43" tabindex="-1" required>
              <input type="radio" name="slot43" tabindex="-1" required>
              <div class="disc"></div>
              <input type="radio" name="slot44" tabindex="-1" required>
              <input type="radio" name="slot44" tabindex="-1" required>
              <div class="disc"></div>
              <input type="radio" name="slot45" tabindex="-1" required>
              <input type="radio" name="slot45" tabindex="-1" required>
              <div class="disc"></div>
              <input type="radio" name="slot46" tabindex="-1" required>
              <input type="radio" name="slot46" tabindex="-1" required>
              <div class="disc"></div>

              <!--Column 4 after-->
              <div class="column">
                <input type="radio" name="slot51" tabindex="-1" required>
                <input type="radio" name="slot51" tabindex="-1" required>
                <div class="disc"></div>
                <input type="radio" name="slot52" tabindex="-1" required>
                <input type="radio" name="slot52" tabindex="-1" required>
                <div class="disc"></div>
                <input type="radio" name="slot53" tabindex="-1" required>
                <input type="radio" name="slot53" tabindex="-1" required>
                <div class="disc"></div>
                <input type="radio" name="slot54" tabindex="-1" required>
                <input type="radio" name="slot54" tabindex="-1" required>
                <div class="disc"></div>
                <input type="radio" name="slot55" tabindex="-1" required>
                <input type="radio" name="slot55" tabindex="-1" required>
                <div class="disc"></div>
                <input type="radio" name="slot56" tabindex="-1" required>
                <input type="radio" name="slot56" tabindex="-1" required>
                <div class="disc"></div>

                <!--Column 5 after-->
                <div class="column">
                  <input type="radio" name="slot61" tabindex="-1" required>
                  <input type="radio" name="slot61" tabindex="-1" required>
                  <div class="disc"></div>
                  <input type="radio" name="slot62" tabindex="-1" required>
                  <input type="radio" name="slot62" tabindex="-1" required>
                  <div class="disc"></div>
                  <input type="radio" name="slot63" tabindex="-1" required>
                  <input type="radio" name="slot63" tabindex="-1" required>
                  <div class="disc"></div>
                  <input type="radio" name="slot64" tabindex="-1" required>
                  <input type="radio" name="slot64" tabindex="-1" required>
                  <div class="disc"></div>
                  <input type="radio" name="slot65" tabindex="-1" required>
                  <input type="radio" name="slot65" tabindex="-1" required>
                  <div class="disc"></div>
                  <input type="radio" name="slot66" tabindex="-1" required>
                  <input type="radio" name="slot66" tabindex="-1" required>
                  <div class="disc"></div>

                  <!--Column 6 after-->
                  <div class="column">
                    <input type="radio" name="slot71" tabindex="-1" required>
                    <input type="radio" name="slot71" tabindex="-1" required>
                    <div class="disc"></div>
                    <input type="radio" name="slot72" tabindex="-1" required>
                    <input type="radio" name="slot72" tabindex="-1" required>
                    <div class="disc"></div>
                    <input type="radio" name="slot73" tabindex="-1" required>
                    <input type="radio" name="slot73" tabindex="-1" required>
                    <div class="disc"></div>
                    <input type="radio" name="slot74" tabindex="-1" required>
                    <input type="radio" name="slot74" tabindex="-1" required>
                    <div class="disc"></div>
                    <input type="radio" name="slot75" tabindex="-1" required>
                    <input type="radio" name="slot75" tabindex="-1" required>
                    <div class="disc"></div>
                    <input type="radio" name="slot76" tabindex="-1" required>
                    <input type="radio" name="slot76" tabindex="-1" required>
                    <div class="disc"></div>

                    <!--Column 7 after-->
                    <div class="column"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="front"></div>
  </div>
  <button type="reset">New Game</button>
</form>
</body>
</html>