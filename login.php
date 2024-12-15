<!DOCTYPE HTML>
<html>
<head>
<title>]LOGIN DATA SURAT KETERANGAN TIDAK MAMPU</title>

<link rel="stylesheet" type="text/css" href="login_admin/css/style.css">
<link rel="stylesheet" href="login_admin/css/bootstrap.min.css">
<script src="login_admin/js/bootstrap.min.js"></script>

<!-- JQUERY -->
<script type="text/javascript" language="javascript" src="login_admin/jquery/jquery.js"></script>


<script type="text/javascript" language="javascript" src="login_admin/style.js"></script>

</head>
<body>

<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="img/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card">Login Admin</p>
            <form class="form-signin" action="" method="POST">
                <span id="name" class="name"></span>
                <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"  name="login">Sign in</button>
            </form>
            
        </div>
</div>

</body>
</html>
<?php
include "db_con.php";
IF(ISSET($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $cek = mysql_num_rows(mysql_query("SELECT * FROM user_login WHERE email='$email' AND password='$password'"));
    $data = mysql_fetch_array(mysql_query("SELECT * FROM user_login WHERE email='$email' AND password='$password'"));
    IF($cek > 0)
    {
        
        session_start();
        $_SESSION['email'] = $data['email'];
        $_SESSION['name'] = $data['full_name'];
        echo "<script language=\"javascript\">alert(\"selamat datang admin \");document.location.href='login_admin/index.php';</script>";
    }else{
        echo "<script language=\"javascript\">alert(\"Invalid username or password\");document.location.href='login_admin/login.php';</script>";
    }
}
?>