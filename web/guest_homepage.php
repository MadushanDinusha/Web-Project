<?php
    if(isset($_POST['signin'])){
        require'C:\xampp\htdocs\book1\dbconfig\config.php';//establish the connection
        $username=$_POST['username'];//getting inputs to a variable
        $password=$_POST['password'];//getting inputs to a variable

        if(empty($username)||empty($password)){
            echo "<script type='text/javascript'>alert('username or password can not be empty')</script>";
        }
        else{
            $sql="select * from user where username=? OR email=?;";
            $stmt=mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt,$sql)){
                echo "<script type='text/javascript'>alert('2')</script>";
            }
            else{
                mysqli_stmt_bind_param($stmt,"ss",$username,$username);
                mysqli_stmt_execute($stmt);
                $result=mysqli_stmt_get_result($stmt);

                if($row=mysqli_fetch_assoc($result)){

                    if($password!=$row['password']){
                        echo "<script type='text/javascript'>alert('password does not match')</script>";
                    }
                    else if($password==$row['password']){
                        echo "<script type='text/javascript'>alert('welcome')</script>";
                        session_start();
                        $_SESSION['userId']=$row['userid'];
                        $_SESSION['userUId']=$row['username'];

                        header('Location: home.php');


                    }
                    else{
                        echo "<script type='text/javascript'>alert('lol')</script>";
                    }
                }
                else{
                    echo "<script type='text/javascript'>alert('User does not exist')</script>";
                }
            }
        }

    }
?>
<html>
<head>
    <title>Guest</title>
    <style>
	#outer {
	background-color: #374785;
	padding-top: 40px;
	margin: 0px;
	padding-bottom: 40px;
}
#white {
	background-color: #FFF;
	margin-top: 0px;
	color: #374785;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	font-weight: normal;
	line-height: 25px;
	font-style: normal;
	padding: 20px;
	z-index: -1;
}
#head {
	font-size: 18px;
	font-weight: bold;
}
#logo {
	background-repeat: no-repeat;
	position: absolute;
	top: 30px;
	left: 1150px;
}
#round{
 	border-radius: 50%;
}

#tbl {
	margin-top: 20px;
	color: #FFF;
	font-weight: bold;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	margin-left: 50px;
}
#allrights {
	font-family: Tahoma, Geneva, sans-serif;
	color: black;
	position: absolute;
	z-index: 2;
	font-weight: bold;
	font-size: 14px;
	top: 250px;
	left: 1000px;
}#outer {
	background-color: #374785;
	padding-top: 40px;
	margin: 0px;
	padding-bottom: 40px;
}
#white {
	background-color: #FFF;
	margin-top: 0px;
	color: #374785;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	font-weight: normal;
	line-height: 25px;
	font-style: normal;
	padding: 20px;
	z-index: -1;
}
#head {
	font-size: 18px;
	font-weight: bold;
}
#logo {
	background-repeat: no-repeat;
	position: absolute;
	top: 253%;
	left: 1150px;
}
#round{
 	border-radius: 50%;
}

#tbl {
	margin-top: 20px;
	color: #FFF;
	font-weight: bold;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	margin-left: 50px;
}
#allrights {
	font-family: Tahoma, Geneva, sans-serif;
	color: #FFF;
	position: absolute;
	z-index: 2;
	font-weight: bold;
	font-size: 14px;
	top: 250px;
	left: 1000px;
}
        #a::first-line{
            font-size: 30px;
        }
    </style>
<link rel="stylesheet" href="css.css">
</head>

<body>

        <!--Header bar-->
    <div id="outter1">
        <div id="nav_icon">
		  <a href="http://localhost/book1/guest_homepage/home.php"><img id="icon"src="imagess/home-solid.png"><p>Home</p></a>
        </div>
        <div id="nav_icon">
		  <a href="#"><img id="icon"src= "imagess/envelope-regular.png"><p>Contact Us</p></a>
        </div>
        <div style="margin-right:55%;border-right: 0.000001px solid" id="nav_icon">
		  <a href="#"><img id="icon" src="imagess/question-circle-solid.png"><p>Help</p></a>
        </div>
        <div style="border-right:0.0001px solid " id="nav_icon">
		  <a href="#" role="button" onclick="showdiv()"><img id="icon" src="imagess/user-circle-regular.png"><p>Login/Sign Up</p></a>
        </div>
    </div>

        <!--Login/Signup-->
    <div id="login" style="padding:2px;">
        <form action="" method="post">
            &nbsp;User Name  &nbsp;<input name="username" id="username" type="text"><br/><br/>
            &nbsp;Password &nbsp;<input name="password" id="password" type="password">
	       <input type="submit" id="signin"name="signin" value="Sign In"/><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a style="color: navajowhite; text-decoration: underline" href="signup2.php">Create an account</a>
        </form>
    </div>

        <!--Search bar-->
    <div id="outter2">
        <form action="search.php" method="POST" >
            <input  name="search" id="search" class="search" type="text" placeholder="Search for books by keyword/title/author/ISBN">
            <input type="submit" value="Search"  name="search1" class="btnSearch">
            <input type="submit" value="Advance Search" name="search2" class="btnAdvance"/>
        </form>
    </div>

        <!--Navigation Bar-->
    <div id="out" >
        <ul id="nav" style="">
            <a>    <li></li></a>
        <a><li></li></a>
        <a><li></li> </a>
            <a><li></li></a>
        </ul>
    </div>

        <!--Image slider-->
    <div id="slider">
        <figure>
            <img src="imagess/Books 1_21.jpg">
            <img src="imagess/Books.jpg">
            <img src="imagess/book2.jpg">
            <img src="imagess/top-7-books-that-changed-the-world.jpg">
            <img src="imagess/book3.jpg">
        </figure>
    </div>
        <!--content-->
    <div id="content">
        <div style="background-color: white;overflow: hidden;">
            <div style="display: block;margin:2% ">
                <p style="color:dimgray; font-size: 55px"><b>Buy and Sell</b> <br/>your books  for best price</p>
            </div>
            <div id="search01">
                <p style="color:orangered; font-size:50px; fon">1</p>
            </div>
            <div id="search1_1">
                <p style="font-size:35px;color: darkgray">SEARCH</p><br><p style="font-size: 18px;color: darkgray">42 buyback vendors</p>
            </div>
            <div id="search1">
                <p style="color:orangered; font-size:50px; fon">2</p>
            </div>
            <div id="search1_1">
                <p style="font-size:35px;color: darkgray">COMPARE</p><br><p style="font-size: 18px;color: darkgray">prices and seller feedback</p>
            </div>
            <div id="search1">
                <p style="color:orangered; font-size:50px; fon">3</p>
            </div>
            <div id="search1_1">
                <p style="font-size:35px;color: darkgray">POST</p><br><p style="font-size: 18px;color: darkgray">get paid</p>
            </div>
        </div>
        <div id="why">
            <p style="color: darkblue;font-size:30px ">Why use BookSwapper?</p>
            <div style="width: 50%; margin-left: 25%;margin-top: -2.5%; "><p style="font-size:20px">BookSwapper helps you sell textbooks and used books for the most money by comparing offers from over 35 book buyback vendors with a single search.</p></div>
        </div>
</div>
    <div id="container">
        <div style="margin-left: 10%;margin-bottom: 2%;">
            <p style="color: darkgray;font-size: 40px;">Why should you sell textbooks using BookSwapper?</p>
        </div>
        <div style="width: 50%;margin-left: 11%;">
        <p style="color: gray;font-size: 20px;">We pride ourselves in being the Sri Lanka's largest textbook buyback price comparison tool. In addition to helping you get rid of your old textbooks we also offer:</p>
        </div>
        <div id="books">
            <img style="margin-left: 20%;margin-top: 2%;" src="imagess/Capture.PNG">
            <img style="margin-top: 2%;"src="imagess/Capture1.PNG">
            <img style="margin-top: 2%;"src="imagess/Capture2.PNG">
        </div>
    </div>
<!--footter-->
<div id="logo"><img src="icons/log.jpg" id="round" width="175" alt="logo" /></div>
<div id="outer">

  <div id="white">
    <div id="head">
    Why use Book Swapper?</div>
  <p>BookSwapper helps you to sell textbooks for the most money by comparing offers from over 35 book buyback vendors with a single search.<br />
We pride ourslves in being the Sri Lanka's largest textbook buyback price comparison tool, in addition to helping you to get rid of your old textbooks.</p>
</div>
<div id="tbl"><table width="136" height="108" border="0">
  <tr>
    <td colspan="3">Find Us On</td>

  </tr>
  <tr>
   <td width="40" height="65"><img src="icons/facebook logo png transparent background.png" width="39" height="43" alt="fb" /></td>
      <td width="39"><img src="icons/download.jpg" width="39" height="43" alt="insta" /></td>
    <td width="39"><img src="icons/twitter-style-icons-png-6.png" width="46" height="49" alt="twit" /></td>

  </tr>


</table>
</div>

<div id="allrights">@2018 All rights reserved by<br />Bookswap.lk</div>
</div>

<script>
    function showdiv(){ //fuction to show login div when login button clicked
        var e = document.getElementById('login');
            if(e.style.display=='block')
                e.style.display='none';
            else e.style.display='block';
    }
</script>
</body>
</html>
