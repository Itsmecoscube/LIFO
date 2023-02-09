console.log("Welcome to Tic-Tac-Toe")
/*
- used to print any kind of variables defined before in it 
- or to just print any message that needs to be displayed to the user. Syntax: console. 
- Can be viewed in the console after inspect.
*/

let music=new Audio("FurElise.mp3")
let GameOver=new Audio("GameOver.mp3")
let AudioTurn=new Audio("Ting.mp3")
let Turn="X" 
let isGameOver="false"

//Function to change the turn
const changeTurn=()=>{
    return Turn === "X"?"O":"X";
}
/*
    The === operators follow Strictly equality comparison algorithm, i.e., 
    it doesn't do the type conversion of the operands before comparing their values and returns false even if the data type of the operands aren't the same.
*/


//Functio to check for a win
const checkWin=()=>{
    let boxtext=document.getElementsByClassName('boxtext');
    let wins=[
        [0,1,2],
        [3,4,5],
        [6,7,8],
        [0,3,6],
        [1,4,7],
        [2,5,8],
        [0,4,8],
        [2,4,6],
    ]
    wins.forEach(e=>{
        if((boxtext[e[0]].innerText===boxtext[e[1]].innerText) && (boxtext[e[2]].innerText===boxtext[e[1]].innerText) && (boxtext[e[2]].innerText===boxtext[e[0]].innerText) && (boxtext[e[0]].innerText!=="" )){
            document.querySelector('.info').innerText=boxtext[e[0]].innerText+" Won";
            isGameOver=true
        }
    })
}

//Game Logic
//Task1: To put onclick event for each box
music.play()
let boxes=document.getElementsByClassName("box");
//why Array.from() as it'll return an HTML collection
//Arrow function : => 
Array.from(boxes).forEach(element=>{
    //why wrong? let boxtext=document.querySelector('.boxtext');
    let boxtext=element.querySelector('.boxtext');
    element.addEventListener('click',()=>{
        //Event listener is on the div.box not in the span
        if(boxtext.innerText==''){
            boxtext.innerText= Turn;
            Turn=changeTurn();      //as you are returning and not setting thats why Turn
            AudioTurn.play();
            checkWin();
            if(!isGameOver){
                //Why 0?
                document.getElementsByClassName("info")[0].innerText="Turn for "+Turn;
            }
        }
    })
})
//AFTER DOING CHECK IN THE CONSOLE OF INSPECT FOR ANY ERRORS