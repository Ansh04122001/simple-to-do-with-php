<?php
// include "../classes/db.php";

if(isset($_POST['list'])){
    $body = $_POST['list'];
    // echo $body;
    DB::query("INSERT INTO `list_tb` (`body`) VALUES ('$body');");
    header("location: ./");
    
}
// To-do: replace 1 with user id
$todo =  DB::query("SELECT * FROM `list_tb` WHERE 1;");


// print_r($todo);


 

?>