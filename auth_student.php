<?php
require("db.php");
session_start();
$user_check=$_SESSION["username"];
$ses_sql= mysqli_query($link,"SELECT login_user FROM students where login_user='$user_check'");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session = $row['login_user'];
$sess_sql= mysqli_query($link,"SELECT nom_user FROM students where login_user='$user_check'");
$r = mysqli_fetch_array($sess_sql,MYSQLI_ASSOC);
$NAME=$r['nom_user'];
if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}
?>