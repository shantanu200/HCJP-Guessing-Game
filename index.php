<?php include "dbconfig.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Guessing Game</title>
</head>
<body>
    <section>
    <div class="start_block"> 
        <div class="title">
            <h1>Number Guessing Game</h1>
        </div>
        <div class="div_img">
            <img src="img/game.png"/>
        </div>
        <div class="div_btn">
            <button class="btn">Start Game</button>
            <button id="leaderboard">LeaderBoard</button>
        </div>
    </div>
    <div class="instruction_block">
     <h1>Instructions</h1>
     <div class="inst_list">
         <div class="info">1.Player has only one chance to play the game.</div>
          <div class="info">2.User has to guess 1-100 number.</div>
          <div class="info">3.Only 10 chances is provided to player.</div>          
          <div class="info">4.There is no time limit restrication.</div>
     </div>
     <button id="info_btn">Start Game!!</button>
    </div>
    <div class="game_block">
        <h1>Play & Enjoy!!</h1>
        <div class="message"></div>
       <input type="number"  id="num"  placeholder="Enter Number"/>
       <button id="check_btn">Check!!</button>
       <div class="score"></div>
       <div class="restart">
           <button id="restart">Restart Game</button>
       </div>
    </div>
    <div class="table_block">
        <h1>LeaderBoard</h1>
        <div class="t_block"> 
        <table class="table table-striped">
        <thead>
            <tr>    
            <th>Rank</th>
            <th>Name</th>
            <th>Score</th>
            </tr>
        </thead>
        <tbody>
        <tr>
<?php


$que = "SELECT * FROM score_data ORDER BY score DESC";
$exe = mysqli_query($conn,$que);
$row = mysqli_num_rows($exe);
$cnt = 0;
while($row = mysqli_fetch_array($exe)){
$cnt += 1;
?>
        <td><?php echo $cnt; ?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['score']; ?></td>   
    </tr>
<?php } ?>
        </tbody>
        </table>
        </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="script.js"></script>
</body>
</html>