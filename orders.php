
<?php
session_start();
include 'DBConn.php';
$user_id = $_SESSION['user_id'];
$name = $_SESSION['user_name'];
include 'header.php';

if(!isset($user_id)){
   header('location:Login.php');
}

if(isset($_POST['update_cart'])){
   update($_POST['cart_id'], $_POST['cart_quantity']);
}

if(isset($_GET['delete'])){
   delete( $_GET['delete']);
   header('location:cart.php');
}

if(isset($_GET['delete_all'])){
   delete_all();
   header('location:cart.php');
}



if(isset($_GET['Checkout'])){
   $placed_on = date('d-M-Y');
   $cart_total = 0;
   $cart_products[] = '';
   
   $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE userID = '$user_id'") or die('query failed');
   if(mysqli_num_rows($cart_query) > 0){
      while($cart_item = mysqli_fetch_assoc($cart_query)){
         $cart_products[] = $cart_item['name'].' ('.$cart_item['quantity'].') ';
         $sub_total = ($cart_item['price'] * $cart_item['quantity']);
         $cart_total += $sub_total;
      }
   
      
      $total_products = implode(',',$cart_products);
   
      $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE name = '$name'  AND totalBooks = '$total_products' AND totalPrice = '$cart_total'") or die('query failed');
   
      if($cart_total == 0){
         $message[] = 'your cart is empty';
      }else{
         if(mysqli_num_rows($order_query) > 0){
            $message[] = 'order already placed!'; 
         }else{
            mysqli_query($conn, "INSERT INTO `orders`(userID, name, totalBooks,totalPrice, placedOn) VALUES('$user_id', '$name','$total_products', '$cart_total', '$placed_on')") or die('query failed');
            $message[] = 'order placed successfully!';
            mysqli_query($conn, "DELETE FROM `cart` WHERE userID= '$user_id'") or die('query failed');
         }
      }
   
   }
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bookthrift</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/product/">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

<body>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light orders-header" >
        
        <div class="col-md-5 p-lg-5 mx-auto my-5">
              <h1 class="display-4 font-weight-normal" style="color:white" >placed orders</h1>
              <a class="btn btn-outline-secondary" style="background-color:white; color:grey" href="Books.php">Add More</a>
          </div>
</div>

<section class="placed-orders">




   <div class="box-container">

      <?php
         $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE userID= '$user_id'") or die('query failed');
         if(mysqli_num_rows($order_query) > 0){
            while($fetch_orders = mysqli_fetch_assoc($order_query)){
      ?>
      <div class="box">
         <p> placed on : <span><?php echo $fetch_orders['placedOn']; ?></span> </p>
         <p> name : <span><?php echo $fetch_orders['name']; ?></span> </p>
         <p> your orders : <span><?php echo $fetch_orders['totalBooks']; ?></span> </p>
         <p> total price : <span>R<?php echo $fetch_orders['totalPrice']; ?></span> </p>
         </div>
      <?php
       }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      ?>
   </div>

</section>
<?php include 'footer.php'; ?>

</body>
</html>