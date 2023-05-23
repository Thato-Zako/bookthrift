
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BookThrift</title>
 

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




</head>

<body>
    
<?php   
session_start();
$user_id = $_SESSION['user_id'];

include 'DBConn.php';
include 'header.php';


if(isset($_POST['add_to_cart']))
{

if(!isset($user_id)){
   header('location:Login.php');
}
    addItem($user_id,$_POST['book_name'],$_POST['book_price'], $_POST['book_image'],$_POST['book_quantity'],$_POST['book_author']);
}
function  addItem($user_id,$product_name,$product_price,$product_image,$product_quantity,$product_author)
{
    
    include 'DBConn.php';
    $book_name =$product_name;
    $book_price = $product_price;
    $book_image = $product_image;
    $book_quantity =$product_quantity;
    $book_author=$product_author;
    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$book_name' AND userID = '$user_id'") or die('query failed');
 
    if(mysqli_num_rows($check_cart_numbers) > 0){
       $message[] = 'already added to cart!';
    }else{
       mysqli_query($conn, "INSERT INTO `cart`(userID, name, price, quantity, image,author) VALUES('$user_id', '$book_name', '$book_price', '$book_quantity', '$book_image','$book_author')") or die('query failed');
       $message[] = 'product added to cart!';
    }
}
?>

      <div class="books-header position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light " >
        
        <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 style="color:white"> COLLECTION & DELIVERY ON ANY TEXTBOOK ANYWHERE IN SOUTH AFRICA </h1>
              <h5 class="lead font-weight-normal" style="color:white">Shop any book of your choice as they come in different categories and styles</h5>
              <a href="sellBooks.php" class="option-btn">sell books</a>                   

          </div>
      </div>





        <Section class="bookProducts">
  
  <div class="containerBooks">
  <?php  
  include('DBConn.php');
        $select_books = mysqli_query($conn, "SELECT * FROM `sellingtextbooks`") or die('query failed');
        if(mysqli_num_rows($select_books) > 0){
           while($fetch_books = mysqli_fetch_assoc($select_books)){
     ?>
    <form action="" method="post" class="box">
     <img class="image" src="images/<?php echo $fetch_books['bookImage']; ?>" alt="">
     <div class="name"><?php echo $fetch_books['title']; ?></div>
     <div class="name">Author: <?php echo $fetch_books['author']; ?></div>
     <div class="name">Year: <?php echo $fetch_books['publishedYear']; ?></div>
     <div class="name">Condition: <?php echo $fetch_books['bookCondition']; ?></div>
     <div class="price">R<?php echo $fetch_books['price']; ?></div>
     <input type="number" min="1" name="book_quantity" value="1" class="qty">
     <input type="hidden" name="book_name" value="<?php echo $fetch_books['title']; ?>">
     <input type="hidden" name="book_author" value="<?php echo $fetch_books['author']; ?>">
     <input type="hidden" name="book_price" value="<?php echo $fetch_books['price']; ?>">
     <input type="hidden" name="book_image" value="<?php echo $fetch_books['bookImage']; ?>">
     <input type="submit" value="add to cart" name="add_to_cart" class="addToCart">
    </form>
   <?php
        }
     }else{
        echo '<p class="empty">no products added yet!</p>';
     }
     ?>
       </Section>	
       <div class="sellBooksBtn">
            </div>

            <?php include 'footer.php'; ?>



</body>

</html>