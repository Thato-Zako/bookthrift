<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
<style>
    body {
    background-color: #f0f0f0; /* Light gray */
}
</style>
</head>

<body class="bg-light">
    <? include 'header.php'; ?>


    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light login-header" >
        
		<div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal" style="color:white" >Welcome Back</h1>
            <a class="btn btn-outline-secondary" style="background-color:white; color:grey" href="Register.php">Sign up</a>
        </div>
    </div>

    <!-- Login form -->
    <div class="container mt-5 bg-light p-5 rounded" >
        <h1>Enter Login Details</h1>
        <form action="Login.php" method="POST">
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Email" name="username" />
            </div>

            <div class="form-group">
                <label>Student Number</label>
                <input type="text" class="form-control" placeholder="Student Number" name="userID" />
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" />
            </div>

            <div class="form-group">
                <input type="submit" value="Login" class="btn btn-danger" name="btnLogin">
                <input type="submit" value="Register" class="btn btn-danger" name="btnRegister">
            </div>
        </form>
    </div>
</body>

</html>
<?php
include 'DBConn.php';

	if(isset($_POST['btnLogin']))
   {
        $ID = mysqli_real_escape_string($conn, $_POST['userID']);
        $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
     
        $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE userID = '$ID' AND password = '$pass'") or die('query failed');
     
        if(mysqli_num_rows($select_users) > 0){
     
           $row = mysqli_fetch_assoc($select_users);
     
           if($row['userType'] == 'admin'){
            session_start();

              $_SESSION['admin_name'] = $row['name'];
              $_SESSION['admin_id'] = $row['id'];
              header('location:adminBookChanges.php');
     
           }elseif($row['userType'] == 'user'){
            session_start();

              $_SESSION['user_name'] = $row['name'];
              $_SESSION['user_id'] = $row['id'];
              header('location:WelcomePage.php');
     
           }
     
        }else{
            echo(mysqli_error($conn));
        }
    }
    if(isset($_POST['btnRegister'])) {
        
        header("Location:Register.php");
    }
     ?>
