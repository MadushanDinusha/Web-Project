<?php
require'C:\xampp\htdocs\book1\dbconfig\config.php';
session_start();
    if(isset($_SESSION['userUId'])){
     $query="select * from images where id='$_POST[id]'" ;
        $run=mysqli_query($conn,$query);
        $result=mysqli_fetch_assoc($run);
        $user=$result['username'];
        echo $user;
        $msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = "this is";
$headers = "haha";
        echo ""
// send email
//mail("djabc.pwc@gmail.com","My subject",$msg);


    }
?>
