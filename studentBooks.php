
<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	 <title>BookThrift</title>
     <meta name="description" content="">
     <link rel='shortcut icon' type='image/x-icon' href="" sizes="32x32">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
     <meta name="generator" content="Hugo 0.72.0">
     
     
     
     <!--<link rel="stylesheet" type="text/css" media="all" href="/files/000545/resources/theme/0001/bootstrap.min.css"/>
     <link rel="stylesheet" type="text/css" media="all" href="/files/000545/resources/theme/0001/rzslider.css"/>
     <link rel="stylesheet" type="text/css" media="all" href="/files/000545/resources/theme/0001/font-awesome.min.css"/>
     <link rel="stylesheet" type="text/css" media="all" href="/files/000545/resources/theme/0001/flexslider.css"/>
     <link rel="stylesheet" type="text/css" media="all" href="/files/000545/resources/theme/0001/icon.css"/>
     <link rel="stylesheet" type="text/css" media="all" href="/files/000545/resources/theme/0001/animate.css"/>
     <link rel="stylesheet" type="text/css" media="all" href="/files/000545/resources/theme/0001/jquery-ui.min.css"/> 
     <link rel="stylesheet" type="text/css" media="all" href="/files/000545/resources/theme/0001/angular-material.min.css"/>
     <link rel="stylesheet" type="text/css" media="all" href="/files/000545/resources/theme/0001/owl.carousel.css"/>
     <link rel="stylesheet/less" href="/files/000545/resources/theme/0001/style.css" />
     
     <link rel="stylesheet" type="text/css" media="all" href="/files/000545/resources/theme/0001/panelsettings.css"/>


    <script src="/files/000545/resources/theme/0001/less.min.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="/files/000545/resources/theme/0001/responsive.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="/files/000545/resources/theme/0001/panelsettings.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="/files/000545/resources/theme/0001/style.css"/>
    
    <script src="/files/000545/resources/theme/0001/jquery.min.js"></script>
    <script src="/files/000545/resources/theme/0001/bootstrap.min.js"></script>
    <script src="/files/000545/resources/theme/0001/bootbox.min.js"></script>
    
    <script src="/js/webapi.js?v=1"></script>

    <script src="/files/000545/resources/theme/0001/custom.js?v=3"></script>
    
   
   
    <link href='https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300|Poppins:400,500,700,300,600' rel='stylesheet' type='text/css'>


    <script> (function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r; i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)}, i[r].l=1*new Date(); a=s.createElement(o),m=s.getElementsByTagName(o)[0]; a.async=1; a.src=g; m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-137532661-1', 'auto'); ga('send', 'pageview'); </script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" type="text/css" media="all" href="/files/000545/resources/theme/0001/custom.css?v=8"/>-->
     



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
    </style>

    <style>
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

		.background {
				background-image: url(library-book-bookshelf-read.jpg);
		}
		.image{
			background-image: url(InfoTech.jpg);
		}
		.image2{
			background-image: url(Humanities-Faculty_MARKETING-MANAGEMENT-N4-N6-1-300x300.jpg);
		}
		.image3{
			background-image: url(effective-business-communication.jpg);
		}

        .flex-equal>* {
            flex: 1;
        }

        @media (min-width: 768px) {
            .flex-md-equal>* {
                flex: 1;
            }
        }
    </style>
	 
	 
</head>
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
                    
        				Welcome to <strong>BookThrift Store</strong>
        			
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-sm-12 top-user info-top-right">
            <div class="user-name">
                <p>
                    
    				<a title="My Wishlist" href="/wishlist/default" style="margin-right: 10px; white-space:nowrap;"><i class="fa fa-heart" aria-hidden="true" style="font-size: 14px;"></i>Wishlist</a>
                    
                </p>
            </div>
        </div>
        
    </div>
</section>
	<header>
	    <div id="top" class="container box-logo-menu">
    <div class="row">
        <nav class="col-md-12 navigation-menu">
            <div class="col-md-3" style="padding-left: 0px;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                        
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
            <div class="col-md-8 mainmenu">
                <div class="collapse navbar-collapse" id="navbar-collapse-1" style="overflow-y: unset;">
                    
                        			
            						<a href="WelcomePage.php">Home</a>
            					 
            						<a href="/book-condition-guidelines">Book Condition Guidelines</a> 
            					 
            						<a href="/contact-us">Contact Us</a>
            					 
                            
                          
                    
                </div>
            </div>
            <!-- Top Cart -->
            <div class="col-md-1 box-shoppingCart" id="boxShoppingCart">
                <div class="list-product dropdown content-count-cart-header" data-src="/cart/summary" id="cart-top-header">
                   
                </div>
            </div>

        </nav>
    </div>
</div>

	</header>
	<section>
  		
    <section>
        <div class="block-service block-service-opt" style="padding: 10px 0; background-color: gray;">
            <div class="container" style="text-align: center; color: #fff; font-weight: 700; font-size: 18px;">
                
                    
                       FREE COLLECTION & FREE DELIVERY ON ANY TEXTBOOK ANYWHERE IN SOUTH AFRICA
                     
                
            </div>
        </div><br><br>
    </section>

 <section class="exlusive-book-option2" style="margin-bottom: 0px;">
    <div class="container">
        <div class="magazine-product row" style="margin-right: 15px; margin-left: 15px;">
            <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 experience-magazine img-author sell-textbooks">
                <div class="txt-exp">
                     <p style="line-height: 1;color: red; font-weight: 700; font-size: 18px;"><strong>Sell Textbooks</p></strong>
                </div>
                <div class="magazine-desc">
                    <p style="min-height: 150px; font-size: 15px; line-height: 1.7;">
                        
                            
                               Get cash for textbooks you no longer require. Students from around the country will have access to view and buy your used textbooks. Get paid within 5 days of selling your book directly into your bank account. Our couriers will collect each book from your door at no additional cost to you.
                             
                        
                    </p>
					<div class="header-search-wrapper">
						<input tabindex="1" type="search" class="form-control search_input search_box"  placeholder="Enter the book title to search..." id="searchMainSell" onchange="search('searchMainSell')" style="width: 95%;">
                        <span id="searchMainSell_error">Enter the name of the book.<br></span>
                        <button tabindex="2" class="btn btn-primary btn-search "  onclick="search('searchMainSell')" style="margin-bottom: 30px; margin-top: 15px;">FIND THE BOOK TO SELL </button>
					</div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 experience-magazine buy-textbooks">
                <div class="txt-exp">
                    <p style="line-height: 1; color: green; font-weight: 700; font-size: 18px;"><strong>Buy Textbooks</p></strong>
                </div>
                <div class="magazine-desc">
                   <p class="title-text">
                        
                            
                               Easily find used textbooks listed by Students from around the country. Receive books within 5 days from payment delivered free to your door. Books listed first are sold first.
                             
                        
                    </p>
					<div class="header-search-wrapper">
						<input tabindex="3" type="search" class="form-control search_input search_box" placeholder="Enter the book title to search..." id="searchMainBuy" onchange="search('searchMainBuy')" style="width: 95%;">
                        <span id="searchMainBuy_error">Enter the name of the book.</span><br>
                        <button tabindex="4" class="btn btn-primary btn-search " onclick="search('searchMainBuy')" style="margin-top: 15px;"> FIND THE BOOK TO BUY </button>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<script>
    $('.search_box').on('input', function() {
        if($(this).val().length >= 3)
            $('#' + $(this).attr('id') + '_error').hide();
    });
</script>-->


 <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="row">
		<center>
            <div class="col-lg-12 text-center shop-title-store">
              <h2 class="section-title" style="margin-bottom: 0px; margin-top: 60px; align=centre">Books</h2>
                    <!--<p class="sub-title">Excepteur sint occaecat cupidatat non proident sunt<br>in culpa officia deserunt</p>-->
                </div>
				</center>
				<div>
                <div class="col-lg-12 content-store">
                    <div class="">
					<div class="col-md-2 my-shop-animation"><div class="box-prod group-book">
                                    <div class="box-img-book" style="height: 225px">
                                        <a href="/nobrand-effective-communication-paperback">
                                            <div class="book-cover-shadow"></div>
                                            

                                                <img src="computer-programming.jpg" class=" float-start img-responsive" alt="Computer Programming">
                                            
                                        </a>
            
                                        <div class="box-btn-shop">
                                            <div class="bt-img">

    <a href="/nobrand-effective-communication-paperback" class="btn btn-add-cart" title="Buy This Book" style="padding: 1px 5px; width: 145px;">
        <i class="fa fa-shopping-bag"></i>Buy&nbsp;this&nbsp;Book 
    </a>

</div>
                                            <div class="bt-img">

<div>
     <a  class="btn btn-add-cart" href="/nobrand-effective-communication-paperback/sell-book-info" title="Sell this Book" style="padding: 1px 5px;">
      <i class="fa fa-book"></i>Sell&nbsp;this&nbsp;Book 
    </a>
</div>


</div>
                                            <!--<div class="bt-img"><a class="btn btn-det-cart" href="#/products/2"><i class="fa fa-list"></i></a></div>-->


                                        </div><br><br>
                                    </div><br><br>

                                    <h5 class="title-book text" style="height: 40px;"><a href="/nobrand-effective-communication-paperback">COMPUTER PROGRAMMING</a></h5><br>
                                    <!--<p class="author-txt flexbox-item" style="height: 25px;">
                                        K. Cooper
                                    </p>
                                    <p class="author-txt flexbox-item" style="height: 25px;">
                                        2002 
                                    </p>-->
                                        
                                    <p class="book-price" style="height: 20px; white-space: nowrap;"> 
                                       
                                            
                                                <small style="color: red; font-weight: 700; font-size: 18px;">from </small>
                                            
                                         
							            R 850.00
                                    <span>
                                        
                                    </span></p>
                                </div>
                            </div><br><br>
                        
                            <div class="col-md-2 my-shop-animation"><div class="box-prod group-book">
                                    <div class="box-img-book" style="height: 225px">
                                        <a href="/nobrand-addressing-barriers-to-learning-a-south-african-perspective-paperback-3rd-edition">
                                            <div class="book-cover-shadow"></div>
                                            
                                                <img src="logistics.jpg" class="float-start img-responsive" alt="Logistics and supply chain management">
                                            
                                        </a>
            
                                        <div class="box-btn-shop">
                                            <div class="bt-img">
<a href="/nobrand-addressing-barriers-to-learning-a-south-african-perspective-paperback-3rd-edition" class="btn btn-add-cart" title="Buy This Book" style="padding: 1px 5px; width: 145px;">
        <i class="fa fa-shopping-bag"></i>Buy&nbsp;this&nbsp;Book 
</a>


</div>
                                            <div class="bt-img">
<div>
     <a  class="btn btn-add-cart" href="/nobrand-addressing-barriers-to-learning-a-south-african-perspective-paperback-3rd-edition/sell-book-info" title="Sell this Book" style="padding: 1px 5px;">
      <i class="fa fa-book"></i>Sell&nbsp;this&nbsp;Book 
    </a>
</div>


</div>
                                            <!--<div class="bt-img"><a class="btn btn-det-cart" href="#/products/2"><i class="fa fa-list"></i></a></div>-->
                                             
     
 


<script>
 function AddToWishlist(prodId) {
       RC.Server.Wishlist.Item.add('default', {productId: prodId,
       quantity:1, variantId:$('#variant_id').val()},
       {
            success:function(){ 
            
             bootbox.dialog({ 
    			        message:'<h4 style="color:green;"> <strong style="font-size: 18px; font-weight: 600;">The Item has been added to your wishlist!</strong></h4>',
    			        buttons:{
    			            main:{
    			                label: "Close",
    			               className: "btn-primary"
    			            }
    			        }
    			    });
            }
        });
    }
</script>
                                        </div>
                                    </div><br><br>
                                    <h5 class="title-book text" style="height: 40px;"><a href="/nobrand-addressing-barriers-to-learning-a-south-african-perspective-paperback-3rd-edition">LOGISTICS AND SUPPLY CHAIN MANAGEMENT</a></h5><br>
                                   <!-- <p class="author-txt flexbox-item" style="height: 25px;">
                                        D. Kruger, A. Swart, E. Landsberg
                                    </p>
                                    <p class="author-txt flexbox-item" style="height: 25px;">
                                        2015 
                                    </p>-->
                                        
                                    <p class="book-price" style="height: 20px; white-space: nowrap;"> 
                                       
                                            
                                                <small style="color: red; font-weight: 700; font-size: 18px;">from </small><br>
                                            
                                         
							            R 550.00
                                    <span>
                                        
                                    </span></p>
                                </div>
                            </div><br><br>
                        
                            <div class="col-md-2 my-shop-animation">
                                    
                                
                                
                                <div class="box-prod group-book">
                                    <div class="box-img-book" style="height: 225px">
                                        <a href="/customer-service-paperback-2nd-edition">
                                            <div class="book-cover-shadow"></div>
                                            
                                                <img src="accounting.jpg" class="img-responsive" alt="Financial Accounting">
                                            
                                        </a>
            
                                        <div class="box-btn-shop">
                                            <div class="bt-img">

 

    <a href="/customer-service-paperback-2nd-edition" class="btn btn-add-cart" title="Buy This Book" style="padding: 1px 5px; width: 145px;">
        <i class="fa fa-shopping-bag"></i>Buy&nbsp;this&nbsp;Book 
    </a>


</div>
                                            <div class="bt-img">

 

<div>
     <a  class="btn btn-add-cart" href="/customer-service-paperback-2nd-edition/sell-book-info" title="Sell this Book" style="padding: 1px 5px;">
      <i class="fa fa-book"></i>Sell&nbsp;this&nbsp;Book 
    </a>
</div>


</div>
                                            <!--<div class="bt-img"><a class="btn btn-det-cart" href="#/products/2"><i class="fa fa-list"></i></a></div>-->
                                             
     
 


<script>
 function AddToWishlist(prodId) {
       RC.Server.Wishlist.Item.add('default', {productId: prodId,
       quantity:1, variantId:$('#variant_id').val()},
       {
            success:function(){ 
            
             bootbox.dialog({ 
    			        message:'<h4 style="color:green;"> <strong style="font-size: 18px; font-weight: 600;">The Item has been added to your wishlist!</strong></h4>',
    			        buttons:{
    			            main:{
    			                label: "Close",
    			               className: "btn-primary"
    			            }
    			        }
    			    });
            }
        });
    }
</script>
                                        </div>
                                    </div><br><br>
                                    <h5 class="title-book text" style="height: 40px;"><a href="/customer-service-paperback-2nd-edition">FINANCIAL ACCOUNTING</a></h5><br>
                                    <!--<p class="author-txt flexbox-item" style="height: 25px;">
                                        R Machado
                                    </p>
                                    <p class="author-txt flexbox-item" style="height: 25px;">
                                        2015 
                                    </p>-->
                                        
                                    <p class="book-price" style="height: 20px; white-space: nowrap;"> 
                                       
                                            
                                                <small style="color: red; font-weight: 700; font-size: 18px;">from </small><br>
                                            
                                         
							            R 800.00
                                    <span>
                                        
                                    </span></p>
                                </div>
                            </div><br><br>
                        
                            <div class="col-md-2 my-shop-animation">
                                    
                                
                                
                                <div class="box-prod group-book">
                                    <div class="box-img-book" style="height: 225px">
                                        <a href="/biology-a-global-approach-paperback-11th-edition">
                                            <div class="book-cover-shadow"></div>
                                            
                                                <img src="law.jpg" class="img-responsive" alt="Principles of Criminal Law">
                                            
                                        </a>
            
                                        <div class="box-btn-shop">
                                            <div class="bt-img">

 

    <a href="/biology-a-global-approach-paperback-11th-edition" class="btn btn-add-cart" title="Buy This Book" style="padding: 1px 5px; width: 145px;">
        <i class="fa fa-shopping-bag"></i>Buy&nbsp;this&nbsp;Book 
    </a>


</div>
                                            <div class="bt-img">

 

<div>
     <a  class="btn btn-add-cart" href="/biology-a-global-approach-paperback-11th-edition/sell-book-info" title="Sell this Book" style="padding: 1px 5px;">
      <i class="fa fa-book"></i>Sell&nbsp;this&nbsp;Book 
    </a>
</div>


</div>
                                            <!--<div class="bt-img"><a class="btn btn-det-cart" href="#/products/2"><i class="fa fa-list"></i></a></div>-->
                                             
     
 


<script>
 function AddToWishlist(prodId) {
       RC.Server.Wishlist.Item.add('default', {productId: prodId,
       quantity:1, variantId:$('#variant_id').val()},
       {
            success:function(){ 
            
             bootbox.dialog({ 
    			        message:'<h4 style="color:green;"> <strong style="font-size: 18px; font-weight: 600;">The Item has been added to your wishlist!</strong></h4>',
    			        buttons:{
    			            main:{
    			                label: "Close",
    			               className: "btn-primary"
    			            }
    			        }
    			    });
            }
        });
    }
</script>
                                        </div>
                                    </div><br><br>
                                    <h5 class="title-book text" style="height: 40px;"><a href="/biology-a-global-approach-paperback-11th-edition">PRINCIPLES OF CRIMINAL LAW</a></h5><br>
                                    <!--<p class="author-txt flexbox-item" style="height: 25px;">
                                        
                                    </p>
                                    <p class="author-txt flexbox-item" style="height: 25px;">
                                        2017 
                                    </p>-->
                                        
                                    <p class="book-price" style="height: 20px; white-space: nowrap;"> 
                                       
                                            
                                                <small style="color: red; font-weight: 700; font-size: 18px;">from </small><br>
                                            
                                         
							            R 1050.00
                                    <span>
                                        
                                    </span></p>
                                </div>
                            </div><br><br>
                        
                            <div class="col-md-2 my-shop-animation">
                                    
                                
                                
                                <div class="box-prod group-book">
                                    <div class="box-img-book" style="height: 225px">
                                        <a href="/nobrand-elementary-linear-algebra-with-supplemental-applications-paperback-international-student-edition">
                                            <div class="book-cover-shadow"></div>
                                            
                                                <img src="networking.jpg" class="img-responsive" alt="Elementary Linear Algebra With Supplemental Applications (Paperback, International student edition)">
                                            
                                        </a>
            
                                        <div class="box-btn-shop">
                                            <div class="bt-img">

 

    <a href="/nobrand-elementary-linear-algebra-with-supplemental-applications-paperback-international-student-edition" class="btn btn-add-cart" title="Buy This Book" style="padding: 1px 5px; width: 145px;">
        <i class="fa fa-shopping-bag"></i>Buy&nbsp;this&nbsp;Book 
    </a>


</div>
                                            <div class="bt-img">

 

<div>
     <a  class="btn btn-add-cart" href="/nobrand-elementary-linear-algebra-with-supplemental-applications-paperback-international-student-edition/sell-book-info" title="Sell this Book" style="padding: 1px 5px;">
      <i class="fa fa-book"></i>Sell&nbsp;this&nbsp;Book&nbsp;
    </a>
</div>


</div>
                                            <!--<div class="bt-img"><a class="btn btn-det-cart" href="#/products/2"><i class="fa fa-list"></i></a></div>-->
                                             
     
 


<script>
 function AddToWishlist(prodId) {
       RC.Server.Wishlist.Item.add('default', {productId: prodId,
       quantity:1, variantId:$('#variant_id').val()},
       {
            success:function(){ 
            
             bootbox.dialog({ 
    			        message:'<h4 style="color:green;"> <strong style="font-size: 18px; font-weight: 600;">The Item has been added to your wishlist!</strong></h4>',
    			        buttons:{
    			            main:{
    			                label: "Close",
    			               className: "btn-primary"
    			            }
    			        }
    			    });
            }
        });
    }
</script>
                                        </div>
                                    </div><br><br>
                                    <h5 class="title-book text" style="height: 40px;"><a href="/nobrand-elementary-linear-algebra-with-supplemental-applications-paperback-international-student-edition">COMPUTER NETWORKING</a></h5><br>
                                    <!--<p class="author-txt flexbox-item" style="height: 25px;">
                                        Howard Anton • Chris Rorres
                                    </p>
                                    <p class="author-txt flexbox-item" style="height: 25px;">
                                        2014 
                                    </p>-->
                                        
                                    <p class="book-price" style="height: 20px; white-space: nowrap;"> 
                                       
                                            
                                                <small style="color: red; font-weight: 700; font-size: 18px;">from </small><br>
                                            
                                         
							            R 750.00
                                    <span>
                                        
                                    </span></p>
                                </div>
                            </div><br><br>
                        
                            <div class="col-md-2 my-shop-animation">
                                    
                                
                                
                                <div class="box-prod group-book">
                                    <div class="box-img-book" style="height: 225px">
                                        <a href="/introduction-to-business-management-paperback-10th-edition">
                                            <div class="book-cover-shadow"></div>
                                            
                                                <img src="biology.jpg" class="img-responsive" alt="Cell Biology">
                                            
                                        </a>
            
                                        <div class="box-btn-shop">
                                            <div class="bt-img">

 

    <a href="/introduction-to-business-management-paperback-10th-edition" class="btn btn-add-cart" title="Buy This Book" style="padding: 1px 5px; width: 145px;">
        <i class="fa fa-shopping-bag"></i>Buy&nbsp;this&nbsp;Book 
    </a>


</div>
                                            <div class="bt-img">

 

<div>
     <a  class="btn btn-add-cart" href="/introduction-to-business-management-paperback-10th-edition/sell-book-info" title="Sell this Book" style="padding: 1px 5px;">
      <i class="fa fa-book"></i>Sell&nbsp;this&nbsp;Book 
    </a>
</div>


</div>
                                            <!--<div class="bt-img"><a class="btn btn-det-cart" href="#/products/2"><i class="fa fa-list"></i></a></div>-->
                                             
     
 


<!--<script>
 function AddToWishlist(prodId) {
       RC.Server.Wishlist.Item.add('default', {productId: prodId,
       quantity:1, variantId:$('#variant_id').val()},
       {
            success:function(){ 
            
             bootbox.dialog({ 
    			        message:'<h4 style="color:green;"> <strong style="font-size: 18px; font-weight: 600;">The Item has been added to your wishlist!</strong></h4>',
    			        buttons:{
    			            main:{
    			                label: "Close",
    			               className: "btn-primary"
    			            }
    			        }
    			    });
            }
        });
    }
</script>-->
                                        </div>
                                    </div><br><br>
                                    <h5 class="title-book text" style="height: 40px;"><a href="/introduction-to-business-management-paperback-10th-edition">CELL BIOLOGY</a></h5>
                                   <!-- <p class="author-txt flexbox-item" style="height: 25px;">
                                        Erasmus, BJ
                                    </p>
                                    <p class="author-txt flexbox-item" style="height: 25px;">
                                        2016 
                                    </p>-->
                                        
                                    <p class="book-price" style="height: 20px; white-space: nowrap;"> 
                                       
                                            
                                                <small style="color: red; font-weight: 700; font-size: 18px;">from </small><br>
                                            
                                         
							            R 1000.00
                                    <span>
                                        
                                    </span></p>
                                </div>
                            </div><br><br>
                        
                    </div>
                </div>
            </div>
			</div>
			</div>
        
		
		
		<footer class="footer bg-light" style="color:black">
        <div class="row">
            <div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img"
                    viewBox="0 0 24 24">
                    <title>Product</title>
                    <circle cx="12" cy="12" r="10" />
                    <path
                        d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
                </svg>
                <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Cool stuff</a></li>
                    <li><a class="link-secondary" href="#">Random feature</a></li>
                    <li><a class="link-secondary" href="#">Team feature</a></li>
                    <li><a class="link-secondary" href="#">Stuff for developers</a></li>
                    <li><a class="link-secondary" href="#">Another one</a></li>
                    <li><a class="link-secondary" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Resource name</a></li>
                    <li><a class="link-secondary" href="#">Resource</a></li>
                    <li><a class="link-secondary" href="#">Another resource</a></li>
                    <li><a class="link-secondary" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Business</a></li>
                    <li><a class="link-secondary" href="#">Education</a></li>
                    <li><a class="link-secondary" href="#">Government</a></li>
                    <li><a class="link-secondary" href="#">Gaming</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Team</a></li>
                    <li><a class="link-secondary" href="#">Locations</a></li>
                    <li><a class="link-secondary" href="#">Privacy</a></li>
                    <li><a class="link-secondary" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>