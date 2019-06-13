<?php
include "traitement.php";
include "connect.php";
include "session.php";
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
            <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
        </div>
        <div id="footer">
        <b id="logout"><a href="logout.php">Log Out</a></b>
        </div>
</body>
</html>