<?php
require'C:\xampp\htdocs\book1\dbconfig\config.php';
session_start();
    if(isset($_SESSION['userUId'])){
        $username=$_SESSION['userUId'];

    }else{
            echo "<script type='text/javascript'>location.href='guest_homepage.php'</script>";

//
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css.css">
</head>
<body style="background-color:azure">
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
    <main class="my-form">
        <div class="cotainer" >
            <div class="row justify-content-center" >
                <div class="col-md-8" >
                        <div class="card" >
                            <div style="color:black" class="card-header">Book Registeration</div>
                            <div class="card-body">
                                <form name="my-form" onsubmit="" action="home.php#" method="post" enctype="multipart/form-data" style="color:black">
                                    <div class="form-group row">
                                        <label for="Title" class="col-md-2"></label>
                                        <div class="col-md-3">
                                                <img src="https://lovelytiles.co.uk/media/catalog/product/cache/1/small_image/200x200/9df78eab33525d08d6e5fb8d27136e95/7/5/x754390v2_1_2.jpg.pagespeed.ic.0S-qF3BATn.png" alt="..." class="img-thumbnail">
                                            <input type="file" name="file" value="upload">

                                        </div>
                                        <div class="col-md-5">

                                        </div>
                                        <label for="Title" class="col-md-2"></label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Title" class="col-md-2 col-form-label text-md-right">Title</label>
                                        <div class="col-md-8">
                                            <input type="text" id="title" class="form-control" name="title">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="edition" class="col-md-2 col-form-label text-md-right">Author</label>
                                        <div class="col-md-8">
                                            <input type="text" id="Author" class="form-control" name="Author">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="edition" class="col-md-2 col-form-label text-md-right">ISBN</label>
                                        <div class="col-md-8">
                                            <input type="text" id="ISBN" class="form-control" name="ISBN">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="edition" class="col-md-2 col-form-label text-md-right">Edition</label>
                                        <div class="col-md-8">
                                            <input type="text" id="edition" class="form-control" name="edition">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="price" class="col-md-2 col-form-label text-md-right">Price</label>
                                        <div class="col-md-8">
                                            <input type="text" id="price" class="form-control" name="price">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Description" class="col-md-2 col-form-label text-md-right">Description:</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                                        </div>

                                    </div>

                                        <div class="col-md-8 offset-md-2">
                                            <button type="submit" name="submit" class="btn btn-primary">
                                            Register
                                            </button>
                                        </div>

                                </form>
                            </div>
                        </div>

            </div>
        </div>
        </div>
    </main>


</body>
</html>

