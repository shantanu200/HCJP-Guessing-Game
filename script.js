const btn = document.querySelector(".btn");
const start_block = document.querySelector(".start_block");
const game_block = document.querySelector(".game_block");
const num = document.getElementById("num");
const score = document.querySelector(".score");
const check = document.getElementById("check_btn");
const message = document.querySelector(".message");
const restart = document.querySelector(".restart");
const restart_btn = document.getElementById("restart");
const leaderboard = document.querySelector("#leaderboard");
const table = document.querySelector(".table_block");
const instruction = document.querySelector(".instruction_block");
const inst_start = document.getElementById("info_btn");
let guess_num = Math.floor(Math.random() * 100 + 1);
let count = 0;

btn.addEventListener("click", () => {
  start_block.style.display = "none";
  game_block.style.display = "none";
  instruction.style.display = "flex";
  console.log(num.value);
});

inst_start.addEventListener("click",()=>{
  instruction.style.display = "none";
  game_block.style.display = "flex";
})

check.addEventListener("click", () => {
  let user_num = Number(num.value);

  if (count > 10) {
    message.textContent = "Game Over!!!";
    score.textContent = "All Chances are Over!!";
    num.style.display = "none";
    check.style.display = "none";
    restart.style.display = "block";
  } else {
    if(num.value!=""){
      if (user_num > guess_num) {
        message.textContent = "Guess is High 😔";
        count++;
      } else if (user_num < guess_num) {
        message.textContent = "Guess is Low 😯";
        count++;
      } else if(user_num == guess_num) {
        message.textContent = "You win the game 🥳";
        check.style.display = "none";
        num.style.display = "none";
        restart.style.display = "block";
        alert_message()
      }
      score.textContent = "Total Attempt: " + count;
    }
  }
  num.value = "";
});

restart_btn.addEventListener("click",()=>{
  document.location.reload(true);
});

leaderboard.addEventListener("click",()=>{
  game_block.style.display = "none";
  start_block.style.display = "none";
  table.style.display="flex";
})


function alert_message(){
  swal("Enter Your Name", {
  content: "input",
  })
  .then((name) => {
     $.ajax({
       type:"POST",
       url:"data.php",
       data:{name:name,score:count},
       success: () =>{
        swal("Thank You!!❤️"+name)
       }
     })
  });
}