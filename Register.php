<html>  

<?php
include('DBConn.php');
	if(isset($_POST['btnRegister'])){
 

	//checking connectivity
	if($conn === false){
	die("Error: Could not connect. " . mysqli_connect_error());
	}

	//Taking all 5 values from the form data(input)
	$name = $_POST['name'];
	$userID = $_POST['userID'];
    $userType = $_POST['userType'];
	$studPassword = md5($_POST['studPassword']);

      
	//Inserting queries

	$sql = "Insert Into users(name,userID,password,userType) Values('$name', '$userID', '$studPassword', '$userType')";
	if(mysqli_query($conn, $sql)){
		echo "<h3>New user registered successfully.<a href=Login.php>LOGIN</a></h3>";
	}else{
		echo "ERROR: Student not registered" . $sql . mysqli_error($conn);
	}

	//close connection

	mysqli_close($conn);
	}	
	
	else if(isset($_POST['btnBack'])){
		header("Location:Login.php");
		
	}
?>
<head>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
  
    <title>Register</title>
  
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head> 
<body>
<? include 'header.php'; ?>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light login-header" >
        
        <div class="col-md-5 p-lg-5 mx-auto my-5">
              <h1 class="display-4 font-weight-normal" style="color:white" >Sign Up</h1>
              <a class="btn btn-outline-secondary" style="background-color:white; color:grey" href="Books.php">Already Registered?</a>
          </div>
</div>
    <div class="container mt-5">
        <h1>User Registration</h1>
        <form action="Register.php" method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Name" 
                    name="name" />
            </div>
  
			<div class="form-group">
                <label>User Number</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="UserID" 
                    name="userID" />
            </div>
            <div class="form-group">
              <select name="userType" class="box">
                <option value="user">user</option>
                <option value="admin">admin</option>
              </select>
              </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" 
                    class="form-control" 
                    placeholder="Password" 
                    name="studPassword" />
            </div>
  
            <div class="form-group">
                <input type="submit" 
                    value="Back" 
                    class="btn btn-danger" 
                    name="btnBack">
					
				<input type="submit" 
                    value="Register" 
                    class="btn btn-danger" 
                    name="btnRegister">
            </div>			
        </form>
    </div>
  
  
</body> 
</html>