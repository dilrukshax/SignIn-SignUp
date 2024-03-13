<?php

$isLogin = false;
if(isset($_SESSION['id'])){
    $isLogin = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">

</head>
<body>
<div class="nav">
        <div class="logo">
            <p><a href="index.php"> header</a></p>
        </div>

        <div class="right-links">
            <a href="index.php">Home</a>
            <?php if($isLogin){ ?>
                <a href="profile.php">Profile</a>
            <?php }else{ ?>
                <a href="login.php"> Sign In</button> </a>
                <a href="register.php"> Sign Up</button> </a>
            <?php } ?>
        </div>
       
    </div>


    

</body>
</html>