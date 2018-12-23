<?php
require'C:\xampp\htdocs\book1\dbconfig\config.php';
session_start();
    if(isset($_SESSION['userUId'])){
        $uer=$_SESSION['userUId'];

        if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $fileName=$_FILES['file']['name'];
    $fileTempName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png');
            $title=$_POST['title'];
            $edition=$_POST['edition'];
            $price=$_POST['price'];
            $description=$_POST['description'];
            $author=$_POST['Author'];
            $isbn=$_POST['ISBN'];
    if(in_array($fileActualExt,$allowed)){
        if($fileError===0){
            if($fileSize<1000000){
    $fileNameNew = uniqid('',true).".".$fileActualExt;
        $fileDestination = 'uploadsimages/'.$fileNameNew;
    move_uploaded_file($fileTempName,$fileDestination);
    $sql="insert into images(username,image,title,author,isbn,edition,price,description,Date) VALUES('$uer','$fileNameNew','$title','$author','$isbn','$edition','$price','$description',curdate())";
    mysqli_query($conn,$sql);
                header("Location: home.php?uploadsucess");
            }else{
                echo "<script type='text/javavscript'>alert('your file is too big')</script>";
            }
        }else{
            echo "<script type='text/javavscript'>alert('There was an error uploading your file!')</script>";

        }
    }else{
        echo "<script type='text/javavscript'>alert('You cannot upload files of this type!')</script>";

    }




}
}


    else{
            echo "<script type='text/javascript'>location.href='guest_homepage.php'</script>";
    }


?>
<html>
    <head>
        <style>
        div.ou{
            height: 380px;
            overflow: hidden;
            background-color: pink;
            margin-top: 6%;
            border-radius: 40px;
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
        img{

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
        <div style="border-right:1px solid white" id="nav_icon">
            <?php
             $uer=$_SESSION['userUId'];
            $qs="select * from user where username='$uer'";
            $w=mysqli_query($conn,$qs);
            $d=mysqli_fetch_array($w);

echo"<a href='myAccount.php#' role='button'><img style='overflow:hidden;height:35px ;width:35px ;border-radius:20px' id='icon' src='uploadsimages/".$d['dp']."'><p>My Account</p></a>";


            ?>

	</div>
	<div style="border-right:0.0001px solid " id="nav_icon">
		<a href="logout.php" role="button" onclick="showdiv()"><img id="icon" src="imagess/user-circle-regular.png"><p>Logout</p></a>
	</div>
</div>




<div id="outter2">
<form action="search.php" method="POST">
  <img style="width:100px; float:left" src="imagess/logo.png">

    <?php
        echo "<div  background-color:black;'>";
            echo "<p style='margin-left:3%;color:white;font-size:20px'>Welcome"." ".$uer;echo"</p>";
    echo"</div>";
        ?>
<input  name="search" id="search" class="search" type="text" placeholder="Search for books by keyword/title/author/ISBN">
<input type="submit" value="Search" name="search1" class="btnSearch"/>
<input type="submit" value="Advance Search" name="search2" class="btnAdvance"/>

</form>
<form action="Upload_a_book.php" method="POST">
    <input type="submit" value="Upload a book" class="btnPublish"></form>

</div>
    <!--Navigation Bar-->
<div id="out"  >
    <ul id="nav" style="">
        <li><a></a></li>
        <li><a></a></li>

        <li><a> </a></li>
        <li><a></a></li>

    </ul>
</div>

<div>
<?php
     if(isset($_SESSION['userUId'])){
    $qry="select * from images ORDER BY ID DESC";
    $result = mysqli_query($conn,$qry);

echo "<div style='overflow:hidden;padding-left:6%;'>";
        while($row=mysqli_fetch_array($result)){
            echo"<div class='ou'>";
                echo"<div class='s'>";
       //
            echo "<form id='form1' action='book.php' method='POST'>";


                echo"<input type=hidden name=id value='".$row['id']."'>";
            //echo "<script>";
    echo"<input type=submit value=''style='background: url(uploadsimages/".$row['image'].") ;height: 280px; width:210px;background-size: cover; margin-left:-1.5%; margin-top:-01%;'>";

       // echo"<img style='height:280px;width:200px' src ='uploadsimages/".$row['image']."'>";echo"</a>";
          //echo"</script>";
            echo "</form>";
           //


                        $_SESSION['username']=$row['username'];



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



        }}else{
            echo "<script type='text/javascript'>location.href='guest_homepage.php'</script>";
    }
?>
    </div>
</body>
</html>
