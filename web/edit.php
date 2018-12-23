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
                            <div style="color:black" class="card-header">User Details</div>
                            <div class="card-body">
                                <form name="my-form" onsubmit="" action="editq.php" method="post" enctype="multipart/form-data" style="color:black">
                                    <div class="form-group row">
                                        <label for="Title" class="col-md-2"></label>
                                        <div class="col-md-3">
                                                <img src="imagess/aaa.jpg" alt="..." class="img-thumbnail">
                                            <input type="file" name="file" value="upload">

                                        </div>
                                        <div class="col-md-5">

                                        </div>
                                        <label for="Name" class="col-md-2"></label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Title" class="col-md-2 col-form-label text-md-right">Fisrst Name</label>
                                        <div class="col-md-8">
                                            <input type="text" id="title" class="form-control" name="title">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="edition" class="col-md-2 col-form-label text-md-right">Last Name</label>
                                        <div class="col-md-8">
                                            <input type="text" id="Author" class="form-control" name="Author">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="edition" class="col-md-2 col-form-label text-md-right">Address</label>
                                        <div class="col-md-8">
                                            <input type="text" id="ISBN" class="form-control" name="ISBN">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="edition" class="col-md-2 col-form-label text-md-right">Email</label>
                                        <div class="col-md-8">
                                            <input type="text" id="edition" class="form-control" name="edition">
                                        </div>
                                    </div>



                                        <div class="col-md-8 offset-md-2">
                                            <button type="submit" name="submit" class="btn btn-primary">
                                            Save
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

