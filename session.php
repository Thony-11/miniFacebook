<?php
 include "connect.php";
// mysqli_connect() function opens a new connection to the MySQL server. 
session_start();// Starting Session 
// Storing Session 
$user_check = $_SESSION['login_user']; 
var_dump($_SESSION['login_user']);
// SQL Query To Fetch Complete Information Of User 
$query = "SELECT Nom from Membres where Nom = '$user_check'"; 
$ses_sql = mysqli_query($bdd, $query); 
$row = mysqli_fetch_assoc($ses_sql); 
$login_session = $row['email'];
?>