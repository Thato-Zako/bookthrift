
<head>
    <title>Bookthrift</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/product/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

</head>



<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid ">
    <a class="navbar-brand" href="WelcomePage.php">BookThrift Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="WelcomePage.php">
                    <span class="fas fa-home"></span>
                    <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orders.php">
                    <span class="fas fa-calendar"></span>
                    <span>Orders</span>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Books.php">
                    <span class="fas fa-book"></span>
                    <span>Shop</span>
                    </a>
                </li>
                <li class="nav-item ">
                <a class="nav-link" href="Login.php">  
                      <span class="fas fa-user"></span> 
                      <span>Login</span>
                </a>
                <?php
                if(!isset($_SESSION['user_id']))
                    header('Location:Login.php');
                else

                    $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE userID = '$user_id'") or die('query failed');
                    $cart_rows_number = mysqli_num_rows($select_cart_number); 
                ?>
                </li>
               
                <li class="nav-item">
                <a class="nav-link" href="cart.php">
                      <span class="fas fa-shopping-cart"></span>
                      <span>Cart <span>(<?php echo $cart_rows_number; ?>)</span></span> 
                </a>
                </li>
                
            </ul>
            <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
        </div>
    </div>
</nav>
  

