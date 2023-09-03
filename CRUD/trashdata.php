<?php

include('header.php');
include('connection.php');
$sqlquery = "Select * from `data` where status = '0'";
$data = mysqli_query($conn, $sqlquery);
if(mysqli_num_rows($data) > 0){
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

<table class="table table-bordered text-center">
    <thead class="table table-dark">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Gender</th>
        <th>DELETE DATA</th>
        <th>RESTORE DATA</th>
    </thead>
    <tbody>
<?php
while($row = mysqli_fetch_assoc($data)){
?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['age'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><a href="perdelete.php?id=<?php echo $row['id']?>" class="btn btn-danger"> DELETE</a></td>
            <td><a href="restore.php?id=<?php echo $row['id']?>" class="btn btn-primary"> RESTORE</a></td>
            
            
        </tr>
        <?php
        }
    }
        ?>
    </tbody>
</table>
</body>
</html>