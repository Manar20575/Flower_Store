<?php
$host = "localhost";
$db = "flower";
$username = "root";
$password = "";
$con = mysqli_connect("$host", "$username", "$password", "$db");
if (mysqli_connect_errno()){
    echo "faild to connect to MYSQL:".mysqli_connect_error();
}
    if(isset($_POST['sign'])){
    $username =(strtolower( $_POST['username']));
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $re_pass = $_POST['re_enter_pass'];
    $sql = "INSERT INTO sign ( username, e_mail, pass, re_enter_pass) 
    VALUES('$username' , '$email' , '$pass' , '$re_pass' )";
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