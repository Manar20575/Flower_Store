<?php
    $bouq_promo = $_POST['bouq-code'];
	$bouqName = $_POST['bouq-name'];
	$discription = $_POST['bouq-dis'];
	$price = $_POST['bouq-price'];
    $category = $_POST['bouq-select'];
    $pic = $_FILES["bouq-img"]["name"];
	$host = "localhost";
	$dbname = "flower";
	$username = "root";
	$password = "";
    if (isset($_POST["upload"]))
    {
            $tm=md5(time());
            $fnm = $_FILES["bouq-img"]["name"];
            $dst="../../db_flower/".$tm.$fnm;
            $dst1 = "db_flower/" .$tm.$fnm;
            move_uploaded_file($_FILES["bouq-img"]["tmp_name"],$dst);
			$link = mysqli_connect("$host", "$username", "$password");
			mysqli_select_db($link, "$dbname");
			if (mysqli_connect_errno()){
				echo "faild to connect to MYSQL:".mysqli_connect_error();
			}
            $sql = mysqli_query($link, "INSERT INTO `flower` ( id, name, pic, price, disc, category, promo) VALUES ('', '$bouqName','$dst1', '$price', '$discription','$category', '$bouq_promo')");
            if($sql){
                ?>
    <script type="text/javascript">
        alert ("things inserted");
        window.location="./insert_shop.php"
        </script>
    <?php
            }else{
                ?>
                    <script type="text/javascript">
                        alert ("something went wrong");
                        window.location="./insert_shop.php"
                    </script>
    <?php
            }
    }

    ?>
// Database connection
// if (isset($_POST['upload'])) {
// 		// path to store upload img
// 	$conn = mysqli_connect($host, $username, $password, $dbname);
// 	$target = "/Project/assets/img/" .basename($pic);
// 	$stmt = "insert into bouquet( name, pic, price, disc) values ('$bouqName',  '$pic', '$price', '$discription')";
// 	mysqli_query($conn, $stmt);
// 	if (move_uploaded_file($_FILES['bouq-img']['tmp_name'], $target)) {
// 		$msg = "Image uploaded successfully";
//   	}
// 	else{
//   		$msg = "Failed to upload image";
//   	}
// 	$stmt->close();
// 	$conn->close();
// }
// ?>