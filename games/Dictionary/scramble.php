<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="scramble.css">
    <script src="wordsscramble.js" defer></script>
    <script src="scramble.js" defer></script>
</head>
<body>
    <div class="container">
        <h2>WORD SCRAMBLE</h2>
        <div class="content">
            <div class="word"></div>
            <div class="details">
                <p class="hint">HINT: <span></span></p>
                <p class="time">Time Left: <span><b></b>s</span></p>
                <input type="text" placeholder="Enter a valid word"> 
                <div class="buttons">
                    <button class="refresh-word">
                        REFRESH WORD
                    </button>
                    <button class="check-word">
                        CHECK WORD
                    </button>
                    
                </div>
            </div>
        </div><br><br>
        <div class="score">SCORE:<span></span><br></div>
    </div>
</body>
</html>