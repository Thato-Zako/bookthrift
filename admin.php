<html>  
<head>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
  
    <title>Register</title>
  
    <link rel="stylesheet" href=
        "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head> 
<body>
    <div class="container mt-5">
        <h1>User Registration</h1>
        <form action="add.php" method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Name" 
                    name="name" />
            </div>
  
			<div class="form-group">
                <label>Student Number</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Student Number" 
                    name="studentNumber" />
            </div>
  
			<div class="form-group">
                <label>Create username</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Username" 
                    name="username" />
            </div>
  
            <div class="form-group">
                <label>Password</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Password" 
                    name="pasword" />
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
  
    <?php
       
    ?>
</body> 
</html>