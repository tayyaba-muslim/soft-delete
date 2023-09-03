<?php
session_start();

// md5() sha1()
$_SESSION['username'] = "Ebad";
$_SESSION["password"] = md5("123");
 echo $_SESSION['username'];
 echo $_SESSION['password'];
 


?>