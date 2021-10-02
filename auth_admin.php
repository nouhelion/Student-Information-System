<?php
require("db.php");
session_start();
$user_check=$_SESSION["username"];
$ses_sql= mysqli_query($link,"SELECT 'login' FROM admins where 'login'='$user_check'");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session = $row['login'];
if(!isset($_SESSION["username"])){
    header("Location: login_admin.php");
    exit();
}
?>