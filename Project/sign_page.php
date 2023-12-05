<!DOCTYPE html>
<html lang="en">
<head>
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
    <title>Flowers</title>
</head>
<body id="image">
    <div class="for">
        <form class="xx" action="./sign.php" method="post" enctype="multipart/form-data">
            <h2 class="gg" >Sign Up</h2>
            <div class="data">
                <i class="material-icons">person</i>
                    <input type="username" placeholder=" USERNAME" height="30px" name = "username">
                    <hr>
            </div> 
            <div class="data">
                <i class="material-icons">mail</i>
                    <input type="gmail" placeholder="GMAIL" name = "email">
                    <hr>
            </div>
            <div class="data">
                <i class="material-icons">lock</i>
                    <input type="password" placeholder=" PASSWORD" name = "pass">
                    <hr>
            </div>
            <div class="data">
                <i class="material-icons">lock</i>
                    <input type="password" placeholder=" CONFIRM PASSWORD" name = "re_enter_pass">
                    <hr>
            </div>
            <div class="my_div">
                <button type="submit" class = "btn log-btn" value="Sign Up" name = "sign">Sign Up</button>
            </div>
            <div id="end">
                Already have an account :
                <a href="./login page.php">Login</a>
            </div>
        </form>
    </div>
</body>
</html>
