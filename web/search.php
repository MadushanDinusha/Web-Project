<html>
    <head>
    <title>Guest</title>
    <style>
        div.ou{
            height: 380px;
            overflow: hidden;
            background-color: pink;
            margin-top: 2%;
            margin-left: 2%;
            margin-right: 1%;
            width: 200px;
            float: left;
            }
        div.s{
            height: 280px;
            width: 200px;
            padding: 0;
            float: left;
            margin-left: 1%;
            }

        #a::first-line{
            font-size: 30px;
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
		<a href="#" role="button" onclick=""><img id="icon" src="imagess/Group 17.png"><p>My Account</p></a>
	</div>
	<div style="border-right:0.0001px solid " id="nav_icon">
		<a href="logout.php" role="button" onclick=""><img id="icon" src="imagess/user-circle-regular.png"><p>Logout</p></a>
	</div>
</div>
    </body>
        </html>
<?php
require'C:\xampp\htdocs\book1\dbconfig\config.php'; //establish the connection
session_start();

if(isset($_POST['search1'])){ //checking which button has clicked

    if($_POST['search']!=null){ //check whether there are some text in search bar

        $user=$_POST['search']; //getting input to the variable
        $query="select * from images where title LIKE '$user%'"; //search query
        $run=mysqli_query($conn,$query);// run the query

    //display all matching results
        echo"<div style='margin-left:5%;margin-top:3%'>";
        echo"<p style='font-size:20px'>Search results for</p>"." ".$user;
        echo"</div>";
    while($row=mysqli_fetch_array($run)){
            echo"<div class='ou'>";
                echo"<div class='s'>";
                    echo"<a href='book.php'>";
                    echo"<img style='height:280px;width:200px' src ='uploadsimages/".$row['image']."'>";
                        $_SESSION['imgIds']=$row['image'];
                        $_SESSION['des']=$row['description'];
                        $_SESSION['pri']=$row['price'];
                        $_SESSION['aut']=$row['author'];
                        $_SESSION['isb']=$row['isbn'];
                    echo"</a>";

                echo"</div>";
                echo"<div style='width:auto;text-align:center;'>";
                echo "LKR"." ".$row['price'];
                echo "</div>";
                echo "<br>";
                echo"<div style='margin-top:-7%;HEIGHT:10PX;width:auto%;text-align:center;'>";
                echo $row['title'];
                echo "</div>";
                echo "<br>";
                echo"<form action='update.php' method='post'>";
                echo"<div style='margin-top:4%;margin-left:16%;width:17%;margin'>";
                    echo"<input type=hidden name=id value='".$row['id']."'>";
                    echo"<input type='submit' value='Add to cart'>";
                echo "</div>";
                echo "</form>";
                echo"</div>";

    }}

    //if no item typed and click on searched button
    elseif($_POST['search']==null){

        header("refresh:0.001; url=http:home.php#");
        //redirect to the homepage in 0.001 seconds
    }

}

else if(isset($_POST['search2'])){ //if advance search button clicked

    if($_POST['search']!=null){ //checking whether there are some text in search bar

        $user1=$_POST['search']; //getting input into variable
        $query1="select * from images where isbn LIKE '$user1%' or author like '$user1%' or title like '$user1%'"; // search query
        $run2=mysqli_query($conn,$query1);//run the query
    echo"<div style='margin-left:5%;margin-top:3%'>";
        echo"<p style='font-size:20px'>Search results for</p>"." ".$user1;
        echo"</div>";
       while($row2=mysqli_fetch_array($run2)){
            echo"<div class='ou'>";
                echo"<div class='s'>";
                    echo"<a href='book.php'>";
        echo"<img style='height:280px;width:200px' src ='uploadsimages/".$row2['image']."'>";
                        $_SESSION['imgIds']=$row2['image'];
                        $_SESSION['des']=$row2['description'];
                        $_SESSION['pri']=$row2['price'];
                        $_SESSION['aut']=$row2['author'];
                        $_SESSION['isb']=$row2['isbn'];
                    echo"</a>";

                echo"</div>";
                echo"<div style='width:auto;text-align:center;'>";
                echo "LKR"." ".$row2['price'];
                echo "</div>";
                echo "<br>";
                echo"<div style='margin-top:-7%;HEIGHT:10PX;width:auto%;text-align:center;'>";
                echo $row2['title'];
                echo "</div>";
                echo "<br>";
                echo"<form action=update.php method=post>";
                echo"<div style='margin-top:4%;margin-left:16%;width:17%;margin'>";
                    echo"<input type=hidden name=id value='".$row2['id']."'>";
                    echo"<input type='submit' value='Add to cart'>";
                echo "</div>";
                echo "</form>";
                echo"</div>";
        }

        }elseif($_POST['search']==null){

        header("refresh:0.001; url=home.php#");
        //redirect to the homepage in 0.001 seconds
    }}

?>
