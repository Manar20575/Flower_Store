<?php
include 'connectDB.php';
if(isset($_POST['submit'])){
$username =(strtolower( $_POST['username']));
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

$username = htmlentities(mysqli_real_escape_string($con , $_POST['username']));
$email = htmlentities(mysqli_real_escape_string($con , $_POST['email']));
$pass = htmlentities(mysqli_real_escape_string($con , $_POST['pass']));
$re_pass = htmlentities(mysqli_real_escape_string($con , $_POST['re_pass']));

$check_user = " SELECT * FROM users WHERE username = '$username'";
$check_result = mysqli_query($con , $check_user);
$num_rows = mysqli_num_row($check_result);
if ($num_rows!=0){

   $user_error='<p id="error"> sorry username already exist , change anther one  <p> <br>';
   $err_s = 1;
}

if(empty($username)){

$user_error = '<p id="error">  please enter username <p><br>';
$err_s = 1;
}
else if(strlen($username) <6) {
$user_error = 'your username needs to have a minimum of 6 letters <br>';
$err_s = 1;
}
else if( filter_var($username,FILTER_VALIDATE_INT)){
$user_error ='please enter a valid username not a number <br>';
$err_s = 1;
}

   if(empty($email)){
      $email_error = 'please insert email <br>';
      $err_s = 1;
   }
   else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_error ='please enter a valid email <br>';
        $err_s = 1;
        }

        if(empty($pass)){

            $pass_error = 'please insert password <br>';
            $err_s = 1;
            }
            include('sign_up.php');
            if( strlen($pass) <6 ){
                $pass_error = 'your password needs to have a minimum of 6 letters <br>';
  
                $err_s = 1;
             }
             if(empty($re_pass)){

                $re_pass_error = 'please re_enter password <br>';
  
                $err_s = 1;
                }
                include('sign_up.php');
           
                if(($err_s==0 ) && ($num_rows==0)){
                    $sql = "INSERT INTO users(e_mail , username , pass , re_enter pass) 
                    VALUES ('$email' ,'$username' , '$pass' , '$re_pass' )";
                    mysqli_query($con , $sql);
                    header('location:login.php');
                 }
                 else{
                  include('sign_up.php');
                 }
               }
?>