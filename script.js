const btn = document.querySelector(".btn");
const info_block = document.querySelector(".info_block");
const game_block = document.querySelector(".game_block");
const num = document.getElementById("num");
const score = document.querySelector(".score");
const check = document.getElementById("check_btn");
const message = document.querySelector(".message");

let guess_num = Math.floor(Math.random() * 100 + 1);
let count = 0;

btn.addEventListener("click", () => {
  info_block.style.display = "none";
  game_block.style.display = "flex";
  console.log(num.value);
});

check.addEventListener("click", () => {
  let user_num = Number(num.value);

  if (count >= 10) {
    message.textContent = "Game Over!!!";
  } else {
    if (user_num > guess_num) {
      message.textContent = "Guess is High";
      count++;
    } else if (user_num < guess_num) {
      message.textContent = "Guess is Low";
      count++;
    } else if(user_num == guess_num) {
      message.textContent = "You win the game";
    }
    score.textContent = "Total Attempt: " + count;
  }

  num.value = "";
});
