<?php
	$host = "localhost";
	$dbname = "flower";
	$username = "root";
	$password = "";
    $bouq_promo = $_POST['bouq-code'];
    $bouqName = $_POST['bouq-name'];
	$discription = $_POST['bouq-dis'];
	$price = $_POST['bouq-price'];
    $category = $_POST['bouq-select'];
    if (isset($_POST["update"])){
        $tm=md5(time());
        $fnm=$_FILES["bouq-img"]["name"];
        $dst="../../db_flower/".$tm.$fnm;
        $dst1="db_flower/".$tm.$fnm;
        move_uploaded_file($_FILES["bouq-img"]["tmp_name"],$dst);
        $link=mysqli_connect("$host", "$username", "$password");
        mysqli_select_db($link, "$dbname");
        if (mysqli_connect_errno()){
            echo "faild to connect to MYSQL:".mysqli_connect_error();
        }
        $sql = mysqli_query($link, "UPDATE  `b_flower` SET
        name = '$bouqName',
        pic = '$dst1',
        price = '$price',
        disc = '$discription', 
        category  = '$category'
        where promo = '$bouq_promo'
        ");
        if($sql){
            ?>
<script type="text/javascript">
    alert ("Item Updated");
    window.location="./update_shop"
    </script>
<?php
        }else{
            ?>
                <script type="text/javascript">
                    alert ("something went wrong");
                    window.location="./update_shop"
                </script>
<?php
        }
}

?>   