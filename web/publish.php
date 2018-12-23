
<?php
require'C:\xampp\htdocs\book1\dbconfig\config.php';
session_start();
    if(isset($_SESSION['userUId'])){
        $username=$_SESSION['userUId'];

    }else{
            echo "<script type='text/javascript'>location.href='http://localhost/book1/home/home.php'</script>";


    }
?>
<html>
    <form action="/book1/home/home.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" value="upload">
        <button type="submit" name="submit">Upload</button>
    </form>
</html>
