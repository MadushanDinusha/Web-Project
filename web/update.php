<?php
require'C:\xampp\htdocs\book1\dbconfig\config.php';
session_start();
 $uer=$_SESSION['userUId'];


$im="select image from images where id='$_POST[id]'";

$re=mysqli_query($conn,$im);
$img=mysqli_fetch_array($re);

$check="select image from cart where image='$img[image]' and username='$uer'";
$run=mysqli_query($conn,$check);
$img1=mysqli_fetch_array($run);

if(empty($img1['image'])){
$a= "insert into cart (username,image) values('$uer','$img[image]')";
mysqli_query($conn,$a);
    echo"<script>location.href='home.php'</script>";
}
else{
echo "noo";

    echo"<script>alert('This book is already added to your cart')</script>";
    echo"<script>location.href='home.php'</script>";
}

?>
