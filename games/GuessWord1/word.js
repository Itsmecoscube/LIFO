const inputs=document.querySelector(".inputs"),
resetBtn=document.querySelector(".reset-btn"),
hint=document.querySelector(".hint span"),
guessLeft=document.querySelector(".guess-left span"),
scoreText=document.querySelector(".score span"),
wrongLetter=document.querySelector(".wrong-letter span"),
typingInput=document.querySelector(".typing-input");

let word,maxGuesses,correct=[],incorrects=[];
let highScore=0;
let timer;

function randomWord(){
    let ranObj=wordList[Math.floor(Math.random()*wordList.length)];
    word=ranObj.word;
    console.log(word);
    maxGuesses=5;

    scoreText.innerText=highScore;
    hint.innerText=ranObj.hint;
    maxGuesses.innerText=maxGuesses;
    guessLeft.innerText=maxGuesses;
    let html="";
    for(let i=0;i<word.length;i++){
        html+='<input type="text" disabled>';
    }

    inputs.innerHTML=html;
}
randomWord();

function initGame(e){
    let key=e.target.value;
    if(key.match(/^[A-Za-z]+$/)){
        console.log(key);
        if(word.includes(key)){
            for(let i=0; i<word.length; i++){
                if(word[i]===key){
                    inputs.querySelectorAll("input")[i].value=key;
                }
            }
            correct.push(key);
            if (correct.length === word.length) {
                alert("Congratulations, you won!");
                highScore+=10;
                incorrects.splice(0, incorrects.length);
                randomWord();
            }
        }
        else{
            maxGuesses--;
            incorrects.push(key);
        }
        guessLeft.innerText=maxGuesses;
        wrongLetter.innerText=incorrects;
    }
    typingInput.value="";

    if(maxGuesses<1){
        alert("Game OVER!");
        window.open('gameover.php');
        return;
    }
    
}

resetBtn.addEventListener("click",randomWord);
typingInput.addEventListener("input",initGame);
document.addEventListener("keydown",()=>typingInput.focus());
