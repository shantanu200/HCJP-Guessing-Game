<?php

include "dbconfig.php";

function existing_user($name){
    global $conn;
    $que = "SELECT * FROM score_data WHERE name='$name'";
    $exe = mysqli_query($conn,$que);

    $row = mysqli_num_rows($exe);

    if($row>0){
        return true;
    }else{
        return false;
    }
}

if(isset($_POST['name']) && isset($_POST['score'])){
    $name = $_POST['name'];
    $score = $_POST['score'];

    if(existing_user($name)){
       $score = (10-$score)*10;
       $que = "UPDATE score_data SET score='$score' WHERE name='$name'";

       $exe = mysqli_query($conn,$que);
    }else{
    $score = (10-$score)*10;
    $que = "INSERT INTO score_data(name,score) VALUES('$name','$score')";

    $exe = mysqli_query($conn,$que);
    }
    
}
?>

