<?php
include 'DBConn.php';

session_start();

$user_id = $_SESSION['user_id'];

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


<!doctype html>
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

</head>

<body>
<?php include 'header.php';?>


    <div class="site-header position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light " >
        
		<div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal" style="color:white" >Welcome to the Book Thrift Store</h1>
            <h5 class="lead font-weight-normal" style="color:white">Shop any book of your choice as they come in different categories and styles</h5>
            <a class="btn btn-outline-secondary" style="background-color:white; color:grey" href="#">EXPLORE</a>
        </div>
    </div>
	
	<center>
	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 ">
	<h1>Most trusted used books seller and buyer</h1>
	</div>
	</center>
	
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">   
                <p class="lead">As a student, you are able to buy used books from the store at any given time and you can access the site using any device 
				that has internet connection. You buy a buy when you see it available, there is no ordering of books because books are available per seller.</p>	
            </div>
        </div>
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <p class="lead">As a student, you are able to sell your books to the store at any given time and you can access the site using any device that has internet 
				connection. Selling a book gives you the right to charge the amount you see fit and if the buyer agrees with the amount they can go on to 
				purchase the book. Until there is a buyer for the book, the book will remain in store until someone buys it.</p>
            </div>
        </div>
    </div>
	
	<center>
	<div
	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
	<h1>Featured Books</h1>
	</div>
	<div
	<h2 class="lead">Check out available and on the market books</h2>
	</div>
	</div>
	</center>

    

<Section class="bookProducts">
  
  <div class="containerBooks">
  <?php  
  include('DBConn.php');
        $select_books = mysqli_query($conn, "SELECT * FROM `sellingtextbooks` LIMIT 3") or die('query failed');
        if(mysqli_num_rows($select_books) > 0){
           while($fetch_books = mysqli_fetch_assoc($select_books)){
     ?>
    <form action="" method="post" class="box">
    <img class="image" src="Images/<?php echo $fetch_books['bookImage']; ?>">
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
    <input type="submit" value="add to cart" name="add_to_cart" class="btn">
   </form>
   <?php
        }
     }else{
        echo '<p class="empty">no products added yet!</p>';
     }
     ?>

       </Section>	-
  <?php include 'footer.php'; ?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

</body>

</html>
