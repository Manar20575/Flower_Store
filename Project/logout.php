<?php
session_start();
if(isset($_SESSION['logout'])){
    session_destroy();
    echo "<script>location.href = 'login page.php'</script>";
}
else{
    echo "<script>location.href = 'login page.php'</script>";
}
?>