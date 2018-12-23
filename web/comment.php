<?php
  require 'C:\xampp\htdocs\book1\dbconfig\config.php';
session_start();
    if(isset($_SESSION['userUId'])){
        $userId=$_SESSION['userUId'];
         $x=$_SESSION['book1'];
$query="insert into comments (username,book,comment) values ('$userId','$x','$_POST[txt]')";
             $run=mysqli_query($conn,$query);

        echo"<script>location.href='home.php'</script>";
    }
?>
