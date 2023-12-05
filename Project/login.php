<?php
	$host = "localhost";
	$db = "db_flower";
	$username = "root";
	$password = "";
    $email = $_POST['email'];
    $userpassword = $_POST['password'];
    session_start();
    if (isset($_POST["login"])){
        $link = mysqli_connect("$host", "$username", "$password");
        mysqli_select_db($link, "$db");
        if (mysqli_connect_errno()){
            echo "faild to connect to MYSQL:".mysqli_connect_error();
        }
        $sql = mysqli_query($link, "SELECT role FROM user WHERE email = '$email' and password = '$userpassword'");
        $row = mysqli_fetch_array($sql); 
        if(mysqli_num_rows($sql) > 0){
        if($row ['role'] == 'admin'){ 
            header("location:../index.php");
        }
        elseif($row ['role'] == NULL){
            header("location:../Project/home.php");
        }
        }
        else{
        ?>
        <script type="text/javascript">
            alert ("Email Exist");
            window.location="./login page.php"
        </script>
        <?php
        }  
    }   
?>