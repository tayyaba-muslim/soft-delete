<?php
include('connection.php');
$user_id = $_GET['id'];

$delete = "UPDATE `data` SET status = '0' where id ='$user_id' ";

$result1 = mysqli_query($conn, $delete);

if(!$result1){
    die("query failed");
}
header('location:allusers.php');


?>