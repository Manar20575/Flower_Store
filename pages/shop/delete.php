<?php
	$host = "localhost";
	$dbname = "flower";
	$username = "root";
	$password = "";
    $bouq_promo = $_POST['bouq-code'];
    if (isset($_POST["delete"])){
        $link = mysqli_connect("$host", "$username", "$password");
        mysqli_select_db($link, "$dbname");
        if (mysqli_connect_errno()){
            echo "faild to connect to MYSQL:".mysqli_connect_error();
        }
        $sql = mysqli_query($link, "DELETE FROM flower WHERE promo = '$bouq_promo'");
        if($sql){
            ?>
<script type="text/javascript">
    alert ("Item Deleted");
    window.location="./delete_shop.php"
</script>
<?php
        }else{
            ?>
                <script type="text/javascript">
                    alert ("something went wrong");
                    window.location="./delete_shop.php"
                </script>
<?php
        }
    }
    ?>