


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Cart</title>
<style type="text/css">
body {
	background-color: #33346C;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
#logo {
	background-image: url(shopping-cart-solid.png);
	background-repeat: no-repeat;
	background-position: right center;
	height: 50px;
	margin-right: 50px;
	<!-->

}
#header {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	color: #FFF;
	font-size: 24px;
	font-weight: bolder;
	font-style: normal;
	background-position: right;
	word-spacing: normal;
	vertical-align: middle;
	text-align: justify;
	right: 20px;
	margin-left: 50px;
	margin-top: 10px;
	padding-top: 10px;
	padding-bottom: 10px;
}
#th {
	color: #000;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 16px;

	padding-top: 10px;
}
    div.s{

        width: 20%;
        overflow: hidden;
        margin-left: 3%;
        float: left;

    }
    div.b{

        width: 80%;
        padding-bottom: 2%;
        border-bottom: 1px solid black;
        overflow: hidden;
        margin-left: 10%;
        margin-top: 2%;
    }
    div.des{

        white-space:nowrap;
        height: 120px;

        width: 50%;
        float: left;
        margin-left: 10%;

        }
    div.price{
        float: left;

        margin-left: 4%;
        width: 10%;
        margin-top: 5%;
    }
    div.tot{
        margin-left: 50%;
    }
#headr {
	background-color: #F34350;
	height: 50px;
	width: 900px;
	margin-left: 200px;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
}
    img.im{
        width: 80%;
    }
#content {
	background-color: #FFF;
	width: 900px;
	margin-left: 200px;
	margin-top: 0px;
	margin-bottom: 50px;

}
#tableheader {
	background-color: #BE8FB7;
	width: 750px;
	margin-top: 30px;
	margin-left: 75px;
}

#Total {
	background-color: #CCC;
	margin-left: 350px;
	margin-right: 350px;
	padding-top: 5px;
	padding-bottom: 5px;
	padding-right: 5px;
	padding-left: 5px;
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

<br /><br /><br />
<div id="headr">
<div class="header">
        <div id="logo">
          <div id="header">MY CART</div>
        </div>
</div>
</div>
<div id="content"><br />
  <div id="tableheader">
    <table width="750" border="0" cellpadding="10">
      <tr>
        <td width="176" align="center"><strong>Book</strong></td>
        <td width="377" align="center"><strong>Description</strong></td>
        <td width="175" align="center"><strong>Price</strong></td>
      </tr>
    </table>
  </div>
    <?php
    $price=200;
 require'C:\xampp\htdocs\book1\dbconfig\config.php';
session_start();
$user1=$_SESSION['userUId'];
$sql="select * from cart where username='$user1'";
    $result=mysqli_query($conn,$sql);


        $uer=$_SESSION['userUId'];
    $que="select * from images m, cart c where c.username='$user1' and m.image=c.image";
    $run2=mysqli_query($conn,$que);
    $re1=mysqli_fetch_array($run2);
    echo"<script type='text/javascript'>  var z=0</script>";

    $que="select * from images m, cart c where c.username='$user1' and m.image=c.image";
    $run2=mysqli_query($conn,$que);
    while($re1=mysqli_fetch_array($run2)){
    //echo $re1['title'];
        $q="select username from images where image='$re1[image]'";
    $e=mysqli_query($conn,$q);
        $r=mysqli_fetch_array($e);
        $s=$r['username'];
         $q1="select email from user where username='$s'";
    $e1=mysqli_query($conn,$q1);
        $r1=mysqli_fetch_array($e1);
        $s1=$r1['email'];
    echo"<div class='b'>";
    echo"<div class='s'>";
      echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";  echo $re1['title']; echo"<br>";
    echo"<img class='im' src ='uploadsimages/".$re1['image']."'>";
    echo"</div>";
    echo"<div class='des'>";
        echo"<textarea cols='40' rows='10'>";
    echo $re1['description'];
        echo"</textarea>";
    echo"</div>";
    echo"<div class='price'>";
    echo "LKR"." ".$re1['price'];

        echo"<form action='mailto:$s1' enctype='text/plain' method='POST'>";

    echo"<input type=hidden name=id value='".$re1['id']."'>";
    echo"<input style='margin-left:-50%' type='submit' value='Buy'>";
    echo"</form>";
        echo"<form action='remove.php' method='POST'>";

    echo "<br><input style='margin-left:-50%' type=submit name='remove' value=remove>";
         echo"<input type=hidden name=cid value='".$re1['cid']."'>";

        echo"</form>";
    echo"</div>";
    echo"</div>";
    $x1=$re1['price'];
    echo"<script type='text/javascript'> var x =$x1</script>";
    echo"<script type='text/javascript'>  var y =parseInt(x,10)</script>";
    echo"<script type='text/javascript'>   z =z+y</script>";

}
    echo "<br />";
echo"<div class='tot'>";
    echo"TOTAL :";

    echo"<script  type='text/javascript'>document.write(z)</script>";


    echo"</div>"
?>





</div>

</body>
</html>
