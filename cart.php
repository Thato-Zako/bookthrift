

<?php
session_start();
$user_id = $_SESSION['user_id'];
$name = $_SESSION['user_name'];

include 'DBConn.php';
include 'header.php';


if(isset($_POST['update_cart'])){
   update($_POST['cart_id'], $_POST['cart_quantity']);
}

if(isset($_GET['delete'])){
   delete( $_POST['cart_idv']);
   header('location:cart.php');
}

if(isset($_GET['delete_all'])){
   delete_all();
   header('location:cart.php');
}


if(isset($_POST['Checkout'])){
   
   $placed_on = date('d-M-Y');
   $cart_total = 0;
   $cart_products[] = '';
   
   $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE userID = '$user_id'") or die('query failed');
   if(mysqli_num_rows($cart_query) > 0){
      while($cart_item = mysqli_fetch_assoc($cart_query)){
         $cart_products[] = $cart_item['name'].'('.$cart_item['quantity'].')';
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



function update($cart,$cartquantity){   
   include 'DBConn.php';
   $cart_id = $cart;
   $cart_quantity =$cartquantity;
   mysqli_query($conn, "UPDATE `cart` SET quantity = '$cart_quantity' WHERE id = '$cart_id'") or die('query failed');
   $message[] = 'cart quantity updated!';}
function delete_all() {
   include 'DBConn.php';
   $user_id = $_SESSION['user_id'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE userID = '$user_id'") or die('query failed');
}

function delete( $deleted_id){
   include 'DBConn.php';
   $delete_id =$deleted_id;
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$delete_id'") or die('query failed');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	 <title>Cart</title>
     <meta name="description" content="">
     <link rel='shortcut icon' type='image/x-icon' href="" sizes="32x32">
     <link rel='stylesheet'  href="CSS/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
     <meta name="generator" content="Hugo 0.72.0">
	 
	 <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/product/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
	 
	 
	 <style>
	  body{
		  background-image: url('bookstore.png');
		  background-repeat:no-repeat;
          background-attachment: fixed;
		  background-size: 100% 100%;
	   }
      .box i{
         font-size:40px;
         margin-left:370px;
         width:55px;
         border-radius: 5px;
         height: 55px;
         padding: 2px;
         border:4px solid red;
      }
      .box .quantity{
         border:2px solid black;
      }

      .updateItemBtn{
         width:120px;
         border-radius: 7px;
         color: white;
         background-color: green;
      }
	 </style>
</head>
<body>
<center>
 <section>
        <div class="block-service block-service-opt" style="padding: 10px 0; background-color: gray;">
            <div class="container" style="text-align: center; color: #fff; font-weight: 700; font-size: 18px;">               
              CART
                                  
            </div>
        </div><br><br>
    </section>
<section class="shopping-cart">
<h1 class="title">Books in cart</h1>


   <div class="box-container">
      <?php
       $total = 0;
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE userID = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){   
      ?>
      <div class="box">
      <i class="fa fa-trash" aria-hidden="true"> <a href="cart.php?delete=<?php echo $fetch_cart['id']; ?>"   onclick="return confirm('remove book from cart?');"></a></i>
         <img src="Images/<?php echo $fetch_cart['image']; ?>" alt="">
         <div class="name"><?php echo $fetch_cart['name']; ?></div>
         <div class="price">R<?php echo $fetch_cart['price']; ?></div>
         <form action="" method="post">
            <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
            <input type="number" min="1" name="cart_quantity" class="quantity" value="<?php echo $fetch_cart['quantity']; ?>">
            <input type="submit" name="update_cart" value="update" class="updateItemBtn">
          </form>
         <div class="sub-total">Total price: <span>R<?php echo $sub_total = ($fetch_cart['quantity'] * $fetch_cart['price']); ?></span> </div>
      </div>
      <?php
      $total += $sub_total;
         }
      }else{
         echo '<p class="empty">your cart is empty</p>';
      }
      ?>
   </div>
   <div style="margin-top: 2rem; text-align:center;">
      <a href="cart.php?delete_all" class="delete-btn <?php echo ($total > 1)?'':'disabled'; ?>" onclick="return confirm('delete all from cart?');">Clear cart</a>
   </div>

   <div class="cart-total">
      <p>grand total : <span>R<?php echo $total; ?></span></p>
      <div class="flex">
         <a href="WelcomePage.php" class="option-btn">Continue shopping</a>
         <form action="" method="Post">
         <input type="submit" name="Checkout" value="Checkout" class="option-btn">
         </form>
      </div>
   </div>           
</section>			
</center>

<?php include 'footer.php'; ?>

</body>
</html>
