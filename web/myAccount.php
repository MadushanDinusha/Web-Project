<html>
<head>
        <style>

   #a::first-line{
        font-size: 30px;
        }
    </style>
<link rel="stylesheet" href="css.css">
</head>
<body >

    <div id="outter1">
            <div id="nav_icon">
		<a href="home.php"><img id="icon"src="imagess/home-solid.png"><p>Home</p></a>
	</div>
	<div id="nav_icon">
		<a href="#"><img id="icon"src= "imagess/envelope-regular.png"><p>Contact Us</p></a>
	</div>
	<div style="margin-right:45%;border-right: 0.000001px solid" id="nav_icon">
		<a href="#"><img id="icon" src="imagess/question-circle-solid.png"><p>Help</p></a>
	</div>
        <div style="border-right:0.0001px solid " id="nav_icon">
		<a href="#" role="button" onclick="showdiv()"><img id="icon" src="imagess/Group 17.png"><p>My Account</p></a>
	</div>
	<div style="border-right:0.0001px solid " id="nav_icon">
		<a href="logout.php" role="button" onclick="showdiv()"><img id="icon" src="imagess/user-circle-regular.png"><p>Logout</p></a>
	</div>
</div>



    <div style="overflow:hidden;border:8px double black;margin-left:20%;margin-right:20%;margin-top:5%;padding-bottom:10px;">
        <?php
require'C:\xampp\htdocs\book1\dbconfig\config.php';
session_start();
    if(isset($_SESSION['userUId'])){
        $uer=$_SESSION['userUId'];
        $query="Select * from user where username='$uer'";
            $run=mysqli_query($conn,$query);
        $as=mysqli_fetch_array($run);
        echo"<div style='margin-top:5%; margin-left:35%;width:200px; border-radius:100px; overflow:hidden'>";
        echo "<img style='height:200px;width:200px'src ='uploadsimages/".$as['dp']."'>";
        echo"</div>";
        echo"<div style='margin-top:5%; margin-left:35%'>";


    echo"User Name :  $uer<br><br><br>";
        echo"First Name :  $as[Fname]<br><br><br>";
        echo"Last Name :  $as[Lname]<br><br><br>";
    echo"Email :  $as[email]<br><br><br>";
        echo"Address :  $as[address]<br>";
        echo"</div >";
    } ?>
  </div>
    <?php
    echo"<div style='float:left;margin-top:1%; margin-left:35%'>";
   echo" <form action='MyCart.php'>";
    echo" <input type='submit' value='My Cart'>";
    echo"</div>";
     echo"<div style='float:left;margin-top:1%; margin-left:2%'>";
    echo" </form>";
    echo" <form action='MyPublish.php'>";
    echo" <input type='submit' value='Publish List'>";
     echo"</div>";
    echo" </form>";
    echo"<div style='float:left;margin-top:1%; margin-left:2%'>";
   echo" <form action='edit.php'>";
    echo" <input type='submit' value='Edit Details'>";
    echo"</div>";
     echo"<div style='float:left;margin-top:5%; margin-left:2%'>";
    echo" </form>";
    ?>
    </body>



</html>
