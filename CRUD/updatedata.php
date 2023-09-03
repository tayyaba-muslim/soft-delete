<?php
include('connection.php');

// print_r($_POST);
$userid = $_POST['id'];
$username = $_POST['name'];
$userage = $_POST['age'];
$usergender = $_POST['gender'];

$update = "update data set name = '$username', age = '$userage', gender = '$usergender' where id = $userid";
$res = mysqli_query($conn, $update);
if(!$res){
    die("query failed");
}
header('location:allusers.php')

?>