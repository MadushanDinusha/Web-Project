<?php
require'C:\xampp\htdocs\book1\dbconfig\config.php';
session_start();
$x=$_SESSION['imgId'];
$q="select image form images where id='$x'";

echo"<img class='im' src ='uploads/".$q."'>";
?>
