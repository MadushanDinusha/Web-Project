<html>
<head>
    <title>
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <body>
        <div id="login">
            <div class="left">
                <h1>Sign Up Here...</h1>
               <form action="#" onsubmit="return validation()" method="post">
                <label for="username"><b>Username</b></label>
                    <input type="text" name="usernamee" id="usernamee" placeholder="Username" onblur="return validation()" >
                    <span class="danger" id="userid"></span><br>
                <label for="email"><b>Email</b></label>
                    <input onblur="return validation()" type="text" name="emaill" id="emaill" placeholder="eg:abc@gmail.com" >
                   <span class="danger" id="emailid"></span><br>
                <label for="address"><b>Postal Address</b></label>
                <textarea rows="3" cols="40" name="addresss" id="addresss" placeholder="street,&#10;city,&#10;state."></textarea>
                <span class="danger" id="addressid"></span><br>

                <label for="pass1"><b>Password</b></label>
                    <input type="password" name="pass01" id="pass01" placeholder="Password"/>
                <span class="danger" id="pass1id"></span><br>
                <label for="pass1"><b>Confirm Password</b></label>
                    <input type="password" name="pass02" id="pass02" placeholder="Re-enter Password"/>
                   <span class="danger" id="pass2id"></span><br>
                 <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms &amp; Privacy</a>.</p>
              <input type="submit" name="signup" value="Sign Up"/>

                </form>

        </div>

    </div>
        <script type="text/javascript">

            function validation()
            {
                var username=document.getElementById('usernamee').value;
                var email=document.getElementById('emaill').value;
                var address=document.getElementById('addresss').value;
                var pass1=document.getElementById('pass01').value;
                var pass2=document.getElementById('pass02').value;

                if(username == "")
                {
                document.getElementById('userid').innerHTML=" **please fill the username**";
                return false;
                }
                  if(!isNaN(username))
                {
                document.getElementById('userid').innerHTML=" **username cannot be a number**";
                return false;
                }

                if(username.length <= 3)
                {
                document.getElementById('userid').innerHTML=" **username should contain more than 3  letters**";
                return false;
                }

                if(email == "")
                {
                document.getElementById('emailid').innerHTML=" **please fill the email**";
                return false;
                }
                if(email.indexOf('@') <= 0)
                {
                document.getElementById('emailid').innerHTML=" **Invalid email**";
                return false;
                }
                if(email.charAt(email.length-4)!= '.' && email.charAt(email.length-3)!= '.')
                {
                document.getElementById('emailid').innerHTML=" **Invalid email**";
                return false;
                }


                 if(address == "")
                {
                document.getElementById('addressid').innerHTML=" **please fill the address**";
                return false;
                }
                if(address.length <= 15)
                {
                document.getElementById('addressid').innerHTML=" **please input your postal address**";
                return false;
                }
                 if(pass1 == "")
                {
                document.getElementById('pass1id').innerHTML=" **please fill the password**";
                return false;
                }
                 if(pass1.length <= 5)
                {
                document.getElementById('pass1id').innerHTML=" **password is too small**";
                return false;
                }
                 if(!isNaN(pass1))
                {
                document.getElementById('pass1id').innerHTML=" **password should at least contain a special character**";
                return false;
                }


                  if(pass1 != pass2)
                {
                document.getElementById('pass2id').innerHTML=" **passwords do not match**";
                return false;
                }
            }
        </script>

    </body>
</html>
 <?php
                 require'C:\xampp\htdocs\book1\dbconfig\config.php';
        if(isset($_POST['signup'])){
            echo"ssss";
        $username=$_POST['usernamee'];
            $address=$_POST['addresss'];
$email=$_POST['emaill'];
        $password=$_POST['pass01'];
        $cpassword=$_POST['pass02'];
    if($password==$cpassword){
    $query="select * from user where username='$username'";
    $query_run=mysqli_query($conn,$query);
if(mysqli_num_rows($query_run)>0){
echo "<script>alert('Username already exists')</scipt>";
    echo"<script>location.href='signup2.php'</script>";
}else{
    $query="insert into user(username,email,address,password) values('$username','$email','$address','$password')";

$query_run=mysqli_query($conn,$query);
    //echo"<script>location.href='guest_homepage.php'</script>";

}
}
}
?>
