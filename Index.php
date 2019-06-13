<?php
    include "connect.php";
    include('traitement.php'); // Includes Login Script
    if(isset($_SESSION['login_user']))
    {
        header("location: Profile.php"); // Redirecting To Profile Page
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Login</title>
</head>
<body>
        <div id="header">
           <center><img src="images/log.png" alt="index" width="600"  /></center>
        </div>
        <div id="content">
        <form method="post" action="traitement.php">
            <div id="div_login">
                <h1>Login</h1>
                <span>Username</span>
                <div>
                    <input type="text" class="textbox" id="txt_email" name="email" placeholder="Your Email" />
                </div>
                <span>Password</span>
                <div>
                    <input type="password" class="textbox" id="txt_pwd" name="pwd" placeholder="Password"/>
                </div>
                <div>
                    <input type="submit" value="Login" name="Login" id="login" />
                </div>
            </div>
        </form>   
        </div>
        <div id="footer"></div>
</body>
</html>