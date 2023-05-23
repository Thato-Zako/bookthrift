<html>  
<head>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
  
    <title>Admin Login</title>
  
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head> 
<body>
    <div class="container mt-5">
        <h1>Enter Login Details</h1>
        <form action="add.php" method="POST">
		<div class="form-group">
                <label>Username</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Username" 
                    name="username" />
            </div>
		
            <div class="form-group">
                <label>Admin ID</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Admin ID" 
                    name="adminID" />
            </div>
  
            <div class="form-group">
                <label>Password</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Password" 
                    name="adminPasword" />
            </div>
  
            <div class="form-group">
                <input type="submit" 
                    value="Login" 
                    class="btn btn-danger" 
                    name="btnLogin">
            </div>
			
        </form>
    </div>
  
    <?php
	
       $conn = mysqli_connect("localhost", "root", "bookstore",);

//checking connectivity
if($conn === false){
	die("Error: Could not connect. " . mysqli_connect_error());
}

//Taking all 5 values from the form data(input)
$first_name = $_REQUEST['studentID'];
$last_name = $_REQUEST['last_name'];
$password = $_REQUEST['password'];

      
//Inserting queries

$sql = "Insert Into College Values('$first_name', '$last_name', '$gender', '$address', '$email')";
if(mysqli_query($conn, $sql)){
	echo "<h3>Congratulations Luthando your information has been stored in the databse successfully.</h3>";
	echo "<h3>Please go to phpmyAdmin inside localhost.</h3>";
	
	//n12br separates values to different lines
	echo n12br("\n$first_name\n $last_name\n " . "$gender\n $address\n $email");
}else{
	echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
}

//close connection

mysqli_close($conn);

    ?>
</body> 
</html>