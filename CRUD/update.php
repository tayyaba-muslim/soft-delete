<?php
include('connection.php');
$user_id = $_GET['id'];
// echo $user_id;
$updateSql = "select * from `data` where id = '$user_id'";
$data = mysqli_query($conn, $updateSql);
if(!$data){
    die("query failed");
}
if(mysqli_num_rows($data) > 0){

    while($row = mysqli_fetch_assoc($data)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 
    <title>Form handling </title>
</head>
<body>
<div class="container">
<h1>Update Details </h1>
<form action="updatedata.php" class="form-group" method="post">
<label for="name"> Name </label>
<input type="hidden" name="id" class="form-control" value="<?php echo $row['id']?>" >
<input type="text" name="name" class="form-control" value="<?php echo $row['name']?>" >
<br>
<label for="age"> Age </label>
<input type="number" name="age" class="form-control" value="<?php echo $row['age']?>" >
<br>
<label for="gender"> gender </label>
<input type="text" name="gender" class="form-control" value="<?php echo $row['gender']?>" >
<br>
<input type="submit" name="submit" value="Update" class="btn btn-primary">
</form>
    <?php
}
}

?>

</body>
</html>