<html>

<head>
<title>Admin Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
     <meta name="generator" content="Hugo 0.72.0">
     

<!-- Global site tag (gtag.js) - Google Ads: 826386542 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-826386542"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-826386542');
  gtag('config', 'UA-137532661-5');
</script>

<link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/product/">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>


<style> 


  .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
 


        .container {
            max-width: 960px;
        }

        .site-header {
            background-color: rgba(0, 0, 0, .85);
            -webkit-backdrop-filter: saturate(180%) blur(20px);
            backdrop-filter: saturate(180%) blur(20px);
        }

        .site-header a {
            color: #727272;
            transition: color .15s ease-in-out;
        }

        .site-header a:hover {
            color: #fff;
            text-decoration: none;
        }

        .flex-equal>* {
            flex: 1;
        }

        @media (min-width: 768px) {
            .flex-md-equal>* {
                flex: 1;
            }
        }

nav {
    position: sticky;
    top: 0;
    width: 100%;
    height: 100px;
}

nav ul li {
    list-style: none;
    display: inline-block;
    margin-left: 2%;
}

nav ul li a {
    display: inline-block;
    text-decoration: none;
    font-weight: bold;
    font-family: roman;
    text-decoration: none;
	
}

.sideMenu {
    margin-top: 2px;
    color: orangered;
}

#main {
    font-size: 24px;
    cursor: pointer;
    transition: all .6s;
}

.sidebar {
    position: fixed;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 0px;
    z-index: 1.5;
    padding-top: 100px;
    overflow-x: hidden;
    transition: all .5s;
    background-color: grey;
}

.sidebar a {
    padding: 20px 8px 9px 64px;
    font-size: 20px;
    font-weight: bold;
    text-decoration: none;
    color: white;
    display: block;
}

.sidebar a:hover {
    color: #ff0000;
    padding-right: 10px;
}

.sidebar .closebtn {
    position: absolute;
    top: 0px;
    right: 25px;
    font-size: 36px;
    margin-left: 32px
}

.sidebar h3 {
    color: rgb(255, 208, 0);
    margin-left: 25px;
    letter-spacing: 5px;
}

.navContent {
    margin-top: 10px;
    width: 100%;
    height: 80%;
    position: relative;
}




.adminSearch input{
	margin:2% 1% 3% 5% ;
}
button
{
	width:10%;
	height:3%;
	margin:2%;
}
table{
text-align:center;
margin: 2%;
 border-collapse: separate;
  border-spacing: 50px 0
}

</style>

</head style="background-color:whitesmoke">

<body>

	   <!--  Clickcease.com tracking-->
<script type='text/javascript'>var script = document.createElement('script');
script.async = true; script.type = 'text/javascript';
var target = 'https://www.clickcease.com/monitor/stat.js';
script.src = target;var elem = document.head;elem.appendChild(script);
</script>
<noscript>
<a href='https://www.clickcease.com' rel='nofollow'><img src='https://monitor.clickcease.com/stats/stats.aspx' alt='ClickCease'/></a>
</noscript>
<!--  Clickcease.com tracking-->

    <section class="top-header">
    <div class="container">
        <div class="col-xs-12 col-md-6 col-sm-12 top-user info-top-left">
            <div class="user-name">
                <p>
                    
        				<h1> <strong>Welcome to BookThrift Store</strong><h1>
        			
                </p>
            </div>
        </div>
        
    </div>
</section>
	
		   
<nav>
        <div class="navContent">
            <ul>
                <li>
                    <div class="sideMenu">
                        <div id="main" onclick="openFunction()">&#9776;</div>

                        <div id="menu" class="sidebar">
                            <h3>BOOKTHRIFT</h3>
						    <a href="adminPage.php">SEARCH STUDENTS</a>
                            <a href="adminPageBooks.php">SEARCH BOOK</a>
                            <a href="adminPageBooksView.php">VIEW BOOKS</a>                       
                            <a href="#" class="closebtn" onclick="closeFunction()">&times;</a>
                        </div>
                    </div>
                </li>
               
               
            </ul>
			<ul>
			           <h3 style="margin-left:2%;"> View all registered students</h3>
			</ul>

        </div>
    </nav>

<form class="adminSearch" metod"post">


<input type="submit" name="viewAll" class="button" value="VIEW REGISTERED STUDENTS"><br>



</form>
<?php

$port = 3305;
$conn = mysqli_connect("localhost","root", "","bookstore",$port);


if(isset($_REQUEST['viewAll'])){
$sql = "SELECT * FROM student";
if($results = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($results) > 0){
        echo "<table>";
                         echo "<tr>";
                echo "<th>Student Number</th>";
                echo "<th>First Name</th>";
             
            echo "</tr>";
        while($row = mysqli_fetch_array($results)){
            echo "<tr>";
                echo "<td>" . $row['studentID'] . "</td>";
                echo "<td>" . $row['studUserName'] . "</td>";

            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($results);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
// Close connection
mysqli_close($conn);
?>
 

</body>

<script>

//opening and closing of the side bar menu
function openFunction() {
    document.getElementById("menu").style.width = "300px";
    document.getElementById("main").style.marginLeft = "300px";
}

function closeFunction() {
    document.getElementById("menu").style.width = "0px";
    document.getElementById("main").style.marginLeft = "0px";
    document.getElementById("main").innerHTML = "&#9776;";
}

</script>

</html>