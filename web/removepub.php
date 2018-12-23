<?php
require 'C:\xampp\htdocs\book1\dbconfig\config.php';
session_start();
    if(isset($_SESSION['userUId'])){
        $ui=$_SESSION['userUId'];

        $query="delete from images where id='$_POST[id]'";
        $run=mysqli_query($conn,$query);
        echo "<script type='text/javascript'>location.href='MyPublish.php'</script>";
    }
?>
