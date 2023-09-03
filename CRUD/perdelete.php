<?php

include('connection.php');

$user_id = $_GET['id'];
$deldata ="DELETE  from data where id = '$user_id'";
$connection = mysqli_query($conn , $deldata);
if($connection){
    "<script> alert('are you sure?'); </script>";
    header('location:trashdata');
}

?>