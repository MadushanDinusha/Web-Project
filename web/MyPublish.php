<html>
    <head>
<style>
     div.ou{
            height:460px;
            overflow: hidden;
         background-color: lightpink;
            margin-top: 6%;
            margin-left: 2%;
           border-radius: 40px;
            margin-right: 1%;
            width: auto;
            float: left;
            }
div.s{
            height: 280px;
            width: 200px;
            padding: 0;

            margin-left: 1%;
            }
    img.im{
        height: 280px;
        width: 200px;
    }

</style>
        <link rel="stylesheet" href="css.css">
    </head>
<body>
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
		<a href="myAccount.php#" role="button" onclick="showdiv()"><img id="icon" src="imagess/Group 17.png"><p>My Account</p></a>
	</div>
	<div style="border-right:0.0001px solid " id="nav_icon">
		<a href="logout.php" role="button" onclick="showdiv()"><img id="icon" src="imagess/user-circle-regular.png"><p>Logout</p></a>
	</div>
</div>



<?php
    require'C:\xampp\htdocs\book1\dbconfig\config.php';
session_start();

    if(isset($_SESSION['userUId'])){
        $username=$_SESSION['userUId'];
        $query="select * from images where username='$username'";
        $run_query=mysqli_query($conn,$query);

       echo"<p style='margin-left:-60%;margin-top:3%; font-size:20px'>My Publications</p>";

        while($result=mysqli_fetch_array($run_query)){
            echo"<div class='ou'";
              $qq="select count(comment) as total from comments where book='$result[image]'";
            $run=mysqli_query($conn,$qq);
            $resul=mysqli_fetch_array($run);
            echo"<div class='s'>";

             echo "<form id='form1' action='book.php' method='POST'>";


                echo"<input type=hidden name=id value='".$result['id']."'>";
            //echo "<script>";
    echo"<input type=submit value=''style='background: url(uploadsimages/".$result['image'].") ;height: 280px; width:210px;background-size: cover; margin-left:-0.1%; margin-top:-01%;'>";

       // echo"<img style='height:280px;width:200px' src ='uploadsimages/".$row['image']."'>";echo"</a>";
          //echo"</script>";
            echo "</form>";

            echo"<div style='height:130px;width:180px'>";
                echo"Title : $result[title]<br><br>";
            echo"Published on : $result[Date]<br><br>";

            echo"No of Reviews : $resul[total]";
            echo"</div>";

            echo"<form action='removepub.php' method='post'>";
              //  echo"<div style='margin-top:4%;margin-left:16%;width:17%;margin'>";
                    echo"<input type=hidden name=id value='".$result['id']."'>";
                    echo"<input style='margin-left:18%' type='submit' value='Remove'>";
               // echo "</div>";
                echo "</form>";



              echo "</div>";

            echo "</div>";
        }
    }
?></body></html>
