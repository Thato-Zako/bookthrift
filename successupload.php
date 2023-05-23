<?php
	$conn = mysqli_connect("localhost", "root","", "bookstore");

if(isset($_POST['btnUploadTextbook'])){
    $title = $_POST['title'];
	$author = $_POST['author'];
	$publishedYear = $_POST['publishedYear'];
	$price = $_POST['price'];
	$bookCondition = $_POST['bookCondition'];
	$bookDescription = $_POST['bookDescription'];
    $bookImage = $_FILES['bookImage']['name'];

    $output =" ";
    $query= "INSERT INTO sellingtextbooks(title,author,publishedYear,price,bookCondition,bookDescription,bookImage) VALUES('$title','$author','$publishedYear','$price','$bookCondition','$bookDescription','$bookImage')";
    
    if(mysqli_query($conn, $query)){
        echo  "<div class=successMsg>
        <i class='fa fa-check-square-o' aria-hidden='true'></i>
        <h2>Textbook Successfully Uploaded!!</h2><br>
        <button><a href=sellBooks.php>ADD ANOTHER TEXTBOOK</a></button>
        <button><a href=studentBooks.php>BUY TEXTBOOKS</a></button>
        </div>";

    }else{
        echo "Textbook not added, Please try again!";
    }
   
}
?>
<html>

<head>
<meta charset="utf-8">
    <title>BookThrift</title>
    <meta name="description" content="">
    <link rel='shortcut icon' type='image/x-icon' href="" sizes="32x32">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
       body {
            background-image: url('bookstore.png');
            background-repeat: no-repeat;
            background-attachment: cover;
          background-size: 100% 100%;
        }
        .successMsg{
            margin: 250px 100px 100px 500px;
            background-color: whitesmoke;
            width: 500px;
            height:300px;
        }
        .successMsg i {
            font-size: 100px;
            color:green;
            margin-left: 38%;
            margin-top:10px;
        }
        .successMsg h2{
            margin-top: 10px;
            padding-top: 20px;
            margin-left: 7%;
            font-size:30px;
        }
        .successMsg button{
            background-color: orangered;
            width:200px;
            height:40px;
            margin-left: 30px;
            border-radius: 5px;
            border: none;
        }
        .successMsg button a{
            text-decoration:  none;
            font-size:12px;
            color:white;

        }
</style>

</head>
<body>

</body>
</html>