const wordText=document.querySelector(".word");
const hintText=document.querySelector(".hint span"),
inputField=document.querySelector("input"),
timeText=document.querySelector(".time b"),
scoreText=document.querySelector(".score span")
refreshBtn=document.querySelector(".refresh-word"),
checkBtn=document.querySelector(".check-word");

let highScore=0;
let correctWord,timer;
const initTimer=(maxTime=30)=>{
    timer=setInterval(()=>{
        if(maxTime>0){
            maxTime--;
            return timeText.innerText=maxTime;
        }
        clearInterval(timer);
        alert('Time OVER'); 
        window.location.href = "../braingames.php";
    },1000);
}
initTimer();

const initGame = () => {
    scoreText.innerText=highScore;
    let randomObj = words[Math.floor(Math.random()*words.length)];
    let wordArray=randomObj.word.split("");
    
    for(let i=wordArray.length-1;i>0;i--){
        let j=Math.floor(Math.random()*(i+1));
        [wordArray[i],wordArray[j]]=[wordArray[j],wordArray[i]];
    }
    wordText.innerText=wordArray.join("");
    hintText.innerText=randomObj.hint;
    correctWord=randomObj.word.toLowerCase();
    inputField.value="";
    inputField.setAttribute("maxlength",correctWord.length);
    console.log(randomObj);

}
initGame();

const checkWord=()=>{
    let userWord= inputField.value.toLocaleLowerCase();
    if(!userWord)return alert('Please enter a word check');
    if(userWord!==correctWord){
         alert('Oops! Word is incorrect');
         window.location.href = "gameover.php";
         return;
       
    }
    highScore+=10;
    alert('Congratulations! '+userWord.toLocaleUpperCase()+' Word is correct');    
    initGame();
}

refreshBtn.addEventListener("click",initGame);
checkBtn.addEventListener("click",checkWord);