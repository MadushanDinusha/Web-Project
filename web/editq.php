<?php
    require'C:\xampp\htdocs\book1\dbconfig\config.php';
session_start();
    if(isset($_SESSION['userUId'])){
        $username=$_SESSION['userUId'];
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
            $fname=$_POST['title'];
            $email=$_POST['edition'];
            //$price=$_POST['price'];
            //$description=$_POST['description'];
            $lname=$_POST['Author'];
            $isbn=$_POST['ISBN'];
    if(in_array($fileActualExt,$allowed)){
        if($fileError===0){
            if($fileSize<1000000){
    $fileNameNew = uniqid('',true).".".$fileActualExt;
        $fileDestination = 'uploadsimages/'.$fileNameNew;
    move_uploaded_file($fileTempName,$fileDestination);
                $sql="UPDATE user SET dp = '$fileNameNew',email='$email',Fname='$fname',Lname='$lname',address='$isbn' WHERE username = '$username'";
    mysqli_query($conn,$sql);
                echo $fname;
             header("Location: myAccount.php?uploadsucess");}
            else{
                echo "<script type='text/javavscript'>alert('your file is too big')</script>";
            }
        }else{
            echo "<script type='text/javavscript'>alert('There was an error uploading your file!')</script>";

        }

    }else{
        echo "<script type='text/javavscript'>alert('You cannot upload files of this type!')</script>";

    }


            }}else{
            echo "<script type='text/javascript'>location.href='guest_homepage.php'</script>";
    }

?>
