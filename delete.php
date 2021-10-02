<?php
//basic connection u will use 
require('db.php');

//testing the connection
if ($link) {
    $sql = " delete from students where login_user='".$_GET["login_user"]."'";
    $result = $link->query($sql);
    if($result)
    header("Location: index_admin.php");
} 
?>