<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN PANEL</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/login-style.css">
</head>
<body>
  <div class="for">
    <form class="xx" action="./login.php" method="post" enctype="multipart/form-data">
      <h2 class="gg">Login pannel</h2>
      <div class="data">
        <i class="material-icons">email</i>
          <input type="username" placeholder=" EMAIL" height="30px" name = "email" required>
          <hr>
      </div>   
      <div class="data">
        <i class="material-icons">lock</i>
            <input type="password" placeholder=" PASSWORD" name = "password" required>
              <hr>
      </div>
      <div class="my_div">
        <button class="btn log-btn" name = "login">Login</button>
      </div>
      <div id="end">
        Not a member?
        <a href="./sign_page.php">sign up </a></div>
    </form>
  </div>
  <script src="/assets/js/more.js"></script>
</body>
</html>