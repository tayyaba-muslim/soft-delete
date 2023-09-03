<?php
    include('header.php');
    include('connection.php');

    if(isset($_POST['login'])){
        $user_email = $_POST['email'];
        $user_pass = $_POST['pass'];
        
        $sql = "SELECT name, age, gender from data where email = '$user_email' AND password = '$user_pass'";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo ("query failed" . mysqli_connect_error());
        }
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                
                session_start();
                $_SESSION["username"] = $row['name'];
                $_SESSION["age"] = $row['age'];
                $_SESSION["gender"] = $row['gender'];
                echo $_SESSION["username"];
            }
            header('location:allusers.php');
        }
    }



    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<form class="form-group" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >

<label for="email"> Email </label>
<input type="email" name="email" class="form-control">
<br>
<label for="pass"> Password </label>
<input type="password" name="pass" class="form-control">
<br>
<input class="btn btn-success" type="submit" name="login">

</form>
</div>
    
</body>
</html>