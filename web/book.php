
<html>

<head>
    <title>About Book</title>
    <style>
        #a::first-line{
            font-size: 30px;
        }
    </style>
<link rel="stylesheet" href="css.css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css1.css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script>
        var logID = 'log',
  log = $('<div id="'+logID+'"></div>');
$('body').append(log);
  $('[type*="radio"]').change(function () {
    var me = $(this);
    log.html(me.attr('value'));
  });
    </script>

</head>

<body>

<header>
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
		<a href="#" role="button" onclick="showdiv()"><img id="icon" src="imagess/user-circle-regular.png"><p>My Account</p></a>
	</div>
	<div style="border-right:0.0001px solid " id="nav_icon">
		<a href="logout.php" role="button" onclick="showdiv()"><img id="icon" src="imagess/user-circle-regular.png"><p>Logout</p></a>
	</div>
</div>


</header>
    <div style="display:block">
<div class="layer1" style="background-color:azure">
	<div class="image" >
		<?php
    require 'C:\xampp\htdocs\book1\dbconfig\config.php';
session_start();
    if(isset($_SESSION['userUId'])){
        $ui=$_SESSION['userUId'];
     $q="select * from images where id='$_POST[id]'";
         $run=mysqli_query($conn,$q);
        $data=mysqli_fetch_array($run);
        $_SESSION['book1']=$data['image'];

    }


echo"<div style='height:280px; width:230px; overflow:hidden;'>";
echo"<img style='height:280px; width:230px'class='im'  src ='uploadsimages/".$data['image']."'>";echo"</div>";
        ?>
        <br>



  <fieldset class="rating">

    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
</fieldset>


		</div>
		<div class="description">
		<p id="dis">

            <p id="genre">Book Title : <?php  echo $data['title'];?></p><br><br>
            <p id="genre">price : <?php echo $data['price'];?></p><br><br>
            <p id="genre">Author : <?php echo $data['author'];?></p><br><br>
            <p id="genre">ISBN : <?php echo $data['isbn'];?></p><br><br>
            <p id="genre">Description : <textarea rows="5" cols="36"><?php echo $data['description'];?></textarea></p><br><br><br><br>
            <form action="comment.php" method="post">
            <textarea name="txt" cols='50' rows="5"> </textarea><br>
                <input type="submit" style="margin-left:-0.5;margin-top:-0.09%"value="Review">
            </form>
            </div>


    <div style="height:501px;margin-left:81%;margin-top:-32%">
        <h4 style="color:black ;%">Comments</h4>
        <div style="height:500px;overflow:scroll;">

        <?php

        $s=$_SESSION['book1'];
            $qu="select * from comments where book='$s'";

          // echo $s;

        $run=mysqli_query($conn,$qu);

            $qdata=mysqli_fetch_array($run);
             //$us=$qdata['username'];



            $qdata=mysqli_fetch_array($run);
//$qq="select dp from user where username='$us'";
//$ru=mysqli_query($conn,$qq);
 //$qdata1=mysqli_fetch_array($ru);
            while($qdata=mysqli_fetch_array($run)){


            echo "<div style='overflow:hidden'><p style='font-size:15px;color:black'>";
//            echo "<img style='height:40px;width:40px'src ='uploadsimages/".$qdata1['dp']."'>";
                echo $qdata['username'];
            echo"</div>";
            echo"<div>";
            echo "<textarea rows='3' cols='30' style='background-color:transparent'>".$qdata['comment'];
            echo "</textarea>";
            echo "</div></p>";

        }
            //else{
           // echo "<script type='text/javascript'>location.href='guest_homepage.php'</script>";
   // }

        ?>
        </div>

        </div>
        </div></div>


</body>
</html>
