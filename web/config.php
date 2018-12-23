<?php
$severname="localhost";
$username="root";
$password="";
$conn=new mysqli($severname, $username, $password)or die("connection failed:" . $conn->connect_error);
mysqli_select_db($conn,'samplelogindb');
