<?php
include 'connectDB.php';
if(isset($_POST['submit'])){
$username =$_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$re_pass = $_POST['re_enter_pass'];

$sql = "INSERT INTO users(e_mail , username , pass , re_enter_pass) 
VALUES('$email' ,'$username' , '$pass' , '$re_pass' )";
$query=mysqli_query($con , $sql);
if($query){
   echo "sucess";
   header('location:login.php');
}
else {
   echo "errror";
}
}

            
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>


        <form  action="" method = "POST">
           <p>Sign up Here</p>
           <?php
           if(isset($user_error)){
            echo $user_error;
           }
           ?>
           <input type="text" placeholder="User Name" name="username">
           <?php
           if(isset($email_error)){
            echo $email_error;
           }
           ?>
           <input type="email" placeholder="Enter your Email" name="email">
           <?php
           if(isset($pass_error)){
            echo $pass_error;
           }
           ?>
           <input type="password" placeholder="Enter Password" name="pass">
           <?php
           if(isset($re_pass_error)){
            echo $re_pass_error;
           }
           ?>
           <input id ="Re-pass" type="password" placeholder="Re-Enter Password" name="re_enter_pass">
           <input type="submit" value="Creat an Account" name="submit">
           <p id="log">Already have an account : <a  href="./Project/login page.php" target="blank">Login</a> ?</p>  
        </form>


        <footer class="footer" >

          <div class ="right">
         
              <a class= "foot" href="https://www.facebook.com/" target="_blank">Facebook</a> 
              <a class= "foot" href="https://www.twitter.com/" target="_blank">Twitter</a>
              <a class= "foot" href="https://www.insatgram.com/" target="_blank">Insatgram</a>  
          </div>
  
          <div class = "left" >
            <a href="    ">About us</a>
            <a href="">Help</a>
          </div>
          
      </footer>
</body>
</html>