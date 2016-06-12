<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.ambargardenfurniture.com/index.php by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 05 Jun 2016 04:49:29 GMT -->
<head>
	<title>Sweet Garden</title>
	<meta charset="utf-8">    
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="apple-touch-icon" sizes="57x57" href="img/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <link rel="manifest" href="img/fav/manifest.json">
    
	

	<link rel="stylesheet" href="css/bootstrap.css" >
	<link rel="stylesheet" href="css/font-awesome.css">
	
	<link rel="stylesheet" href="css/camera.css">

	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
     <link rel="stylesheet" type="text/css" media="all" href="e-commerce/css/animate.css">
		
		<link rel="stylesheet" type="text/css" media="all" href="e-commerce/css/style.css">
    <!--[if lte IE 9]>
    <link rel="stylesheet" media="all" href="css/ie-theme.css" />
    <![endif]-->

    <!-- JAVASCRIPT PLUGINS -->
    
	<script src="js/jquery.js"></script>
	
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/jquery.mobilemenu.js"></script>
	
	<script src="js/jquery.easing.1.3.js"></script>
	
	<!--[if (gt IE 9)|!(IE)]><!-->
      <script src="js/jquery.mobile.customized.min.js"></script>


<!--upper slider-->

    <script type="text/javascript" src="slider/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="slider/js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1200);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('slider/img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background: url('slider/img/a12.png') no-repeat;
            overflow: hidden;
            margin-top: 20px;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>




<!--end upper slider-->
	<!--<![endif]-->
	
	<script src="js/camera.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/jquery.ui.totop.js"></script>
	<script src="js/tmstickup.js"></script>
	<script src="js/jquery.bxslider.min.js" type="text/javascript"></script>

	<link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="scripts/modernizr.custom.97074.js"></script>
	<script>
		$(document).ready(function(){
			$('#slider').camera({
				height:				'38.53%',
				loader:				true,
				minHeight:			'200px',
				navigation:			true,
				navigationHover:	false,
				pagination:			false,
				playPause:			false,
				thumbnails:			false
			});
		});
		

    $(document).ready(function() {
     
    $("#owl-demo").owlCarousel({
     
    autoPlay: 3000, //Set AutoPlay to 3 seconds
	autoHeight : true,
     navigation:true,
	 navigationText: [
      "<i class='icon-chevron-left icon-white'><</i>",
      "<i class='icon-chevron-right icon-white'>></i>"
      ],
    items : 4,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [979,3]
     
    });
     
    });
	
	$(document).ready(function() {
     
    $("#owl-demo1").owlCarousel({
     
    autoPlay: 3000, //Set AutoPlay to 3 seconds
	
    /* navigation:true,
	 navigationText: [
      "<i class='icon-chevron-left icon-white'><</i>",
      "<i class='icon-chevron-right icon-white'>></i>"
      ],*/
    items : 7,
    itemsDesktop : [1199,6],
    itemsDesktopSmall : [979,5],
	transitionStyle : "goDown"
     
    });
     
    });


	</script>
<style type="text/css">
	blockquote
{
    clear: both;
    font-style: italic;
    margin-left: 10px;
  	margin-right: 10px;
  	padding: 10px 10px 0 50px;
 	position: relative;
 	quotes: none;
 	/*background: url(https://dl.dropbox.com/u/96099766/RotatingTestimonial/open-quote.png) 0 0 no-repeat;*/
	border: 0px;
 	font-size: 120%;
	line-height: 240%;
}
.bx-viewport{
	height:130px !important;
}

</style>
<script type="text/javascript">
 $(document).ready(function () {          
 $('.bxslider').bxSlider({
 mode: 'horizontal',
 slideMargin: 3,
auto:true,
speed:500,
pause:10000
});            
});
 </script>
	<!--[if lt IE 9]>
	<script src="docs-assets/js/ie8-responsive-file-warning.js"></script>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

	<div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
  <![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54314970-16', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="../d36mw5gp02ykm5.cloudfront.net/yc/adrns_y7ba5.js?v=6.10.452#p=ce8d396f92140a9f296669fad6e38d57";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);})();</script>




</head>


<body class="container">
<div class="row">
<!--==============================header=================================-->
  <header id="header">
	<div id="stuck_container">
		  <div class="container">
			  <div class="row">  

					<article class="col-lg-3 col-sm-3 col-xs-12">
					  <h1 class="logo">
						<a href="index-2.html">
						  <img alt="logo" src="images/logo.jpg">
						</a>
					  </h1>        
					</article> 

					<article class="col-lg-9 col-sm-9 col-xs-12"> 
                    	
						<div class="menuheader">
						  <nav class="navbar navbar-inverse navbar-static-top tm_navbar" role="navigation">
                              <div class="navbar-header">
                                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span> 
                                  </button>
                              
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
							  <ul class="nav navbar-nav">
								<li  ><a href="index-2.html">Home</a></li>
								<li  ><a href="ambar_aboutd8db.html?page=About">About us</a></li>
								<li  class="dropdown " ><a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <span class="caret"></span></a>
                                	<ul class="dropdown-menu">
                                      <li><a href="ambar_products66fd.html?page=Product">Furnitures</a></li>
                                      <li><a href="ambar_accessories66fd.html?page=Product">Accessories</a></li>
                                    </ul>
                                </li>
                                <li  ><a href="ambar_portfolio1bfa.html?page=Portfolio">Portfolio</a></li>
								
                                <li  ><a href="AMBARCATALOGUE.pdf" target="_blank">Download</a></li>
								<li  ><a href="ambar_contact4d00.html?page=Contact">Contact Us</a></li>
                    			<li  class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart" style="font-size: 20px;margin-right: 10px;"></i><span class="mobile-show">Add To Enquiry</span></a>
                    				
                                                                         
                                    
                   			 	</li>
                                <li  class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-heart" style="font-size: 20px;margin-right: 10px;"></i><span class="mobile-show">Wishlist</span></a>
                                                                </li>
							</ul>
                            </div>
						</nav>
					</div>
				</article>
			</div>
		</div>
	</div>	<!--=================== slider ==================-->
    
   
 
    <div style="width:100%; height:400px; background-color:#6C9; margin:auto">
      
       <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 250px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('slider/img/loading.gif') no-repeat center center;top:10px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 250px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="slider/img/02.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="slider/img/04.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="slider/img/05.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="slider/img/09.jpg" />
            </div>
            <a data-u="ad" href="http://www.jssor.com" style="display:none">Bootstrap Slider</a>
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
    </div>
    </div>
    
    
		<!--<div data-src="img/ambar_garden_1.jpg" data-thumb="images/ambar_garden_1.html"></div>
		<div data-src="img/ambar_garden_2.jpg" data-thumb="images/ambar_garden_2.html"></div>
		<div data-src="img/ambar_garden_3.jpg" data-thumb="images/ambar_garden_3.html"></div>
        <div data-src="img/ambar_garden_4.jpg" data-thumb="images/ambar_garden_4.html"></div>
		<div data-src="img/ambar_garden_5.jpg" data-thumb="images/ambar_garden_5.html"></div>-->

    
  </header>
<!--==============================end header=================================-->

  <div id="content">
  	<section class="row_1"> 
		<div class="container">
			<div class="row">
				<article class="col-lg-5 col-lg-offset-1 col-sm-6 qoute_box">
					
					<div class="extra_wrap">
						<h4>Know About Us</h4>
						<p><strong>Ambar Garden Furniture</strong> was incorporated under the laws of Spain in 2000 and is owned and operated by two partners, Ana Elena Gastaldi and Eduardo Hualde. Both partners are equally involved in its operations and management and have extensive knowledge and experience in the household...</p>
						
						<a href="ambar_about.html" class="btn1">more</a>
					</div>
				</article>

				<article class="col-lg-5 col-lg-offset-1 col-sm-6 qoute_box">
						
						<div class="extra_wrap">
							<h4>E-Catalogue</h4>
							<a href="e-catalogue/mobile/index.html" class="catalogue" target="_blank">
                            	<img src="images/catalogue.jpg" style="width: 180px;" alt="ambar garden">
                            </a>
					</div>
				</article>
			</div>
		</div>
	</section>
    
    <!--<section class="senter_row bg">
		<div class="container">
			<div class="row">
				<article class="col-lg-12 col-sm-12 col-xs-12">
					<h4>AMBAR-AMBER</h4>
                    <p style="text-align:center">Garden Furniture | Outdoor Furniture</p>
					<p style="text-align:center">
						AMBAR AMBER IS AN COMPANY OF OUTDOOR FURNITURE AND OTHER COMPLEMENTS FOR EXTERIOR IN UAE WITH BASE IN DUBAI  FOR ABU DHABI, SHARJAH, AL ALAIN, AJMAN, UMM AL QUWAIN, FUJAIRAH AND RAS AL KHAYMAH.<br />
ALSO THE DISTRIBUTION  FOR SAUDI ARABIA , OMAN, IRAN, EGYPT, QATAR, KENNIA, UGANDA, INDIA, PAKISTAN, YEMEN, BAHRAIN, KUWAIT, IRAQ, LEBANON AND SYRIA.<br />
GARDEN AND TERRACE, FURNITURES: SUNBED, UMBRELLAS, DINNING TABLES, CHAIRS, SOFAS, ARMCHAIRS, STOOLS, COFFEE TABLES, POTS,<br />
BASES, GAZEBOS, MODULAR OUTDOOR SOFAS, SYNTHETIC FIBRE, ALUMINIUM OUTDOOR FURNITURE IN STOCK.
					</p>
					<a href="#" class="btn1">more</a>
				</article>
			</div>
		</div>
	</section>-->   
    <section id="portfolio">
     <!-- START PORTFOLIO GRID -->
     
      
     <div class="row" id="portfolio-grid">
	<article class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="zoom-effect-container">
    <a href="#" class="category-image">
    <img src="img/2.png" alt="A Bean Bag Collection" /> 
    <div class="category-caption"><h5>A Bean Bag Collection</h5></div></a></div></article>
    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="zoom-effect-container">
    <a href="ambar_product_category1af1.html?productId=6" class="category-image">
    <img src="img/1.jpg" alt="Bali" /> <div class="category-caption"><h5>Bali</h5></div></a></div></article>
    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="zoom-effect-container">
    <a href="ambar_product_categorye974.html?productId=46" class="category-image">
    <img src="img/3.png" alt="Corcega" /> <div class="category-caption"><h5>Corcega</h5></div></a></div></article>
    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="zoom-effect-container">
    <a href="ambar_product_categorya423.html?productId=30" class="category-image">
    <img src="img/4.png" alt="Elba" /> <div class="category-caption"><h5>Elba</h5></div></a></div></article>
    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="zoom-effect-container">
    <a href="ambar_product_category5a87.html?productId=8" class="category-image">
    <img src="files/category/home/ambar_8.jpg" alt="Fiji" /> <div class="category-caption"><h5>Fiji</h5></div></a></div></article>
    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="zoom-effect-container">
    <a href="ambar_product_category18ed.html?productId=9" class="category-image">
    <img src="files/category/home/ambar_9.jpg" alt="Grenada" /> <div class="category-caption"><h5>Grenada</h5></div></a></div></article>
    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="zoom-effect-container">
    <a href="ambar_product_category6d04.html?productId=19" class="category-image">
    <img src="files/category/home/ambar_19.jpg" alt="Hawai" /> <div class="category-caption"><h5>Hawai</h5></div></a></div></article>
    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="zoom-effect-container">
    <a href="ambar_product_category2f66.html?productId=13" class="category-image">
    <img src="files/category/home/ambar_13.jpg" alt="Ischia/Java" /> <div class="category-caption"><h5>Ischia/Java</h5></div></a></div></article>
    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="zoom-effect-container">
    <a href="ambar_product_category7c31.html?productId=28" class="category-image">
    <img src="files/category/home/ambar_28.jpg" alt="Lil Collection" /> <div class="category-caption"><h5>Lil Collection</h5></div></a></div></article>
    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="zoom-effect-container">
    <a href="ambar_product_category97d0.html?productId=15" class="category-image">
    <img src="files/category/home/ambar_15.jpg" alt="Nice" /> <div class="category-caption"><h5>Nice</h5></div></a></div></article>
    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="zoom-effect-container">
    <a href="ambar_product_category8c1e.html?productId=21" class="category-image">
    <img src="files/category/home/ambar_21.jpg" alt="Phuket" /> <div class="category-caption"><h5>Phuket</h5></div></a></div></article>
    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="zoom-effect-container">
    <a href="ambar_product_category4555.html?productId=27" class="category-image">
    <img src="files/category/home/ambar_27.jpg" alt="Quebec" /> <div class="category-caption"><h5>Quebec</h5></div></a></div></article>
    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="zoom-effect-container">
    <a href="ambar_product_categoryc067.html?productId=11" class="category-image">
    <img src="files/category/home/ambar_11.jpg" alt="Tahiti" /> <div class="category-caption"><h5>Tahiti</h5></div></a></div></article>
    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="zoom-effect-container">
    <a href="ambar_product_categoryf01d.html?productId=25" class="category-image">
    <img src="files/category/home/ambar_25.jpg" alt="Venice" /> <div class="category-caption"><h5>Venice</h5></div></a></div></article>
    <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><div class="zoom-effect-container">
    <a href="ambar_product_category7434.html?productId=4" class="category-image">
    <img src="files/category/home/ambar_1.jpg" alt="Yuma" /> <div class="category-caption"><h5>Yuma</h5></div></a></div></article>       </div>
        <!-- END PORTFOLIO GRID -->

	 
    </section>
   <section class="senter_row second">
		<div class="container">
			<div class="row">
				<article class="col-lg-12 col-sm-12 col-xs-12">
					<h4><span>Our Client Saying</span></h4>
                    <ul class="bxslider"><li><blockquote><p style="text-align:center"><i class="fa fa-quote-left" style="font-size: 35px;margin-right: 15px;"></i> Ambar Garden  Furniture sells high quality collectables and their service is excellent. The staff are very nice and respectful. I am happy to recommend to all my friends and my family to shop at Ambar Garden  Furniture. <i class="fa fa-quote-right" style="font-size: 35px;margin-left: 15px;line-height: 40px;"></i></p><p style="text-align:right;margin-right:20px;">- Apartment, The Palm</p></blockquote></li><li><blockquote><p style="text-align:center"><i class="fa fa-quote-left" style="font-size: 35px;margin-right: 15px;"></i> We were impressed with the carefulness and skill of the delivery persons who were able to move in the new sofa bed efficiently and successfully. Also we appreciated the prompt email replies from the salesladies when we had asked questions. Thank you.  <i class="fa fa-quote-right" style="font-size: 35px;margin-left: 15px;line-height: 40px;"></i></p><p style="text-align:right;margin-right:20px;">- Villa, Falcon City</p></blockquote></li><li><blockquote><p style="text-align:center"><i class="fa fa-quote-left" style="font-size: 35px;margin-right: 15px;"></i> Delivery was on time. The gentlemen rolled out runners to protect my new carpet. They had to move some front porch furniture to get my couch in the front door and they put everything back as it was. I was very impressed.  <i class="fa fa-quote-right" style="font-size: 35px;margin-left: 15px;line-height: 40px;"></i></p><p style="text-align:right;margin-right:20px;">- Villa, The Greens, Dubai</p></blockquote></li><li><blockquote><p style="text-align:center"><i class="fa fa-quote-left" style="font-size: 35px;margin-right: 15px;"></i> My wife and I really enjoy dealing with Ambar. Our purchases have involved extended delivery dates which Ambar Garden  Furniture has been able to accommodate.  <i class="fa fa-quote-right" style="font-size: 35px;margin-left: 15px;line-height: 40px;"></i></p><p style="text-align:right;margin-right:20px;">- Villa, Emirates Hills</p></blockquote></li><li><blockquote><p style="text-align:center"><i class="fa fa-quote-left" style="font-size: 35px;margin-right: 15px;"></i> Helpful sales staff, good pricing and quick delivery  <i class="fa fa-quote-right" style="font-size: 35px;margin-left: 15px;line-height: 40px;"></i></p><p style="text-align:right;margin-right:20px;">- Apartment, Dubai Marina</p></blockquote></li><li><blockquote><p style="text-align:center"><i class="fa fa-quote-left" style="font-size: 35px;margin-right: 15px;"></i> Great experience from purchase to delivery. Will definitely consider Ambar Garden  Furniture for any future purchases!  <i class="fa fa-quote-right" style="font-size: 35px;margin-left: 15px;line-height: 40px;"></i></p><p style="text-align:right;margin-right:20px;">- Villa, Arabian Ranches</p></blockquote></li></ul>					
					
					
				</article>
			</div>
		</div>
	</section>
   <section class="row_2"> 
		<div class="container">
			<div class="row">
				<article class="col-lg-12 col-sm-12">
					<h4 style="color:#fff"><span>Our Accessories</span></h4>
                     <div id="owl-demo"><div class="item"><a href="ambar_product_categoryed34.html?productId=31"><img src="files/category/home/ambar_31.jpg" alt="Cone" class="img_fleft"> <div class="category-caption" style="bottom: 0px;"><h5>Cone</h5></div></a></div><div class="item"><a href="ambar_product_category4833.html?productId=50"><img src="files/category/home/ambar_50.jpg" alt="Cork Table" class="img_fleft"> <div class="category-caption" style="bottom: 0px;"><h5>Cork Table</h5></div></a></div><div class="item"><a href="ambar_product_category6185.html?productId=51"><img src="files/category/home/ambar_51.jpg" alt="Honey Light" class="img_fleft"> <div class="category-caption" style="bottom: 0px;"><h5>Honey Light</h5></div></a></div><div class="item"><a href="ambar_product_category0ff6.html?productId=33"><img src="files/category/home/ambar_33.jpg" alt="June" class="img_fleft"> <div class="category-caption" style="bottom: 0px;"><h5>June</h5></div></a></div><div class="item"><a href="ambar_product_category86f5.html?productId=34"><img src="files/category/home/ambar_34.jpg" alt="Kabin" class="img_fleft"> <div class="category-caption" style="bottom: 0px;"><h5>Kabin</h5></div></a></div><div class="item"><a href="ambar_product_categoryddea.php?productId=52"><img src="files/category/home/ambar_52.jpg" alt="Kabin Sq Pots" class="img_fleft"> <div class="category-caption" style="bottom: 0px;"><h5>Kabin Sq Pots</h5></div></a></div><div class="item"><a href="ambar_product_category1bba.html?productId=53"><img src="files/category/home/ambar_53.jpg" alt="La Regista" class="img_fleft"> <div class="category-caption" style="bottom: 0px;"><h5>La Regista</h5></div></a></div><div class="item"><a href="ambar_product_categoryee09.html?productId=54"><img src="files/category/home/ambar_54.jpg" alt="Lluna" class="img_fleft"> <div class="category-caption" style="bottom: 0px;"><h5>Lluna</h5></div></a></div><div class="item"><a href="ambar_product_category5bf7.html?productId=55"><img src="files/category/home/ambar_55.jpg" alt="Lou Lou" class="img_fleft"> <div class="category-caption" style="bottom: 0px;"><h5>Lou Lou</h5></div></a></div><div class="item"><a href="ambar_product_category4a83.html?productId=65"><img src="files/category/home/ambar_65.jpg" alt="Mahana Collection" class="img_fleft"> <div class="category-caption" style="bottom: 0px;"><h5>Mahana Collection</h5></div></a></div></div>
                        


					
					<!--<div class="extra_wrap">
						<h3>
							You can trust our expert staff to help you make your next furniture 	purchase enjoyable!
						</h3>
						<h6>
							Asera faesqui dolorem ipsum, quiadera afaes sety krscakertsvitae  asaloreo qui ratione voluptate kjahsaus. Asqui dolorem ipsum, quiadosit, tempora incidunt, ut labore et dolore magnam.
						</h6>
						<a href="#" class="btn1">more</a>

					</div>-->

				</article>
			</div>
		</div>
	</section>
    <!--<section class="senter_row second">
		<div class="container">
			<div class="row">
				<article class="col-lg-12 col-sm-12 col-xs-12">
					<h4><span>Connection With Us</span></h4>
					<p style="text-align:center">
						Mob: +971 50 912 7 914 | Mob: +971 50 379 6 084 | Tel.: +971 4 3232 405 | Fax: +971 4 3232 406<br />
P.O: Box 391156 | Dubai | UAE <br/>
						Email: <a href="mailto:info@ambargardenfurniture.com" class="lnkss">info@ambargardenfurniture.com</a>
					</p>
					
					<ul class="soc_list">
						<li><a class="icon1" href="#"></a></li>
						<li><a class="icon2" href="#"></a></li>
						<li><a class="icon3" href="https://www.facebook.com/ambargardenfurnituredubai" target="_blank"></a></li>
						<li><a class="icon4" href="#"></a></li>
					</ul>
				</article>
			</div>
		</div>
	</section>-->
   
   <section class="map_row">
   		<article class="col-lg-12">
        <a href="https://www.google.com/maps/place/Ambar+Garden+Furniture+LLC/@25.1138945,55.2301394,14z/data=!4m2!3m1!1s0x0:0x1ae0ac3a9d5e6b71?hl=en-US" target="_blank" title="UMM SUQUEIM ROAD branch ambar garden">
            <div class="map_location">
                <h3>UMM SUQUEIM ROAD</h3>
                <h4>Ambar Garden Furniture LLC<br/>Warehouse # 52, Umm Suqueim Road ,Dubai, UAE <br>Phone :+971 4 3232 405</h4>
                
            </div>
            </a>
             <a href="https://www.google.com/maps/place/Ambar+Garden+Furniture+LLC/@25.1138945,55.2301394,14z/data=!4m2!3m1!1s0x0:0x1ae0ac3a9d5e6b71?hl=en-US" target="_blank"><img src="img/mainlocation.jpg" alt="UMM SUQUEIM ROAD branch ambar garden" width="100%"></a>
	  </article>
      <!--<article class="col-lg-6">
      	<a href="https://www.google.com/maps/place/Ambar+Garden+furniture+Jumerah+branch/@25.1756105,55.2179741,16.25z/data=!4m2!3m1!1s0x0:0x4c4f35f81f3a6431?hl=en-US" target="_blank" title="JUMEIRAH BEACH ROAD branch ambar garden">
            <div class="map_location">
            	
                <h3>JUMEIRAH BEACH ROAD BRANCH</h3>
                <h4>Ambar Garden Furniture LLC<br/>Jumeirah Rd., & Umm Al Sheif Rd. Junction, Dubai, UAE<br>Phone :+971 4 3216 522</h4>
               
            </div>
             </a>
            <a href="https://www.google.com/maps/place/Ambar+Garden+furniture+Jumerah+branch/@25.1756105,55.2179741,16.25z/data=!4m2!3m1!1s0x0:0x4c4f35f81f3a6431?hl=en-US" target="_blank"><img src="img/location2.jpg" alt="JUMEIRAH BEACH ROAD branch ambar garden"></a>
	  </article>-->
		
	</section>
    <section class="row_2"> 
		<div class="container">
			<div class="row">
				<article class="col-lg-12 col-sm-12">
					<h4 style="color:#fff"><span>Our Clients</span></h4>
                     <div id="owl-demo1">
                     <div class="item"><img src="files/clients/ambar_2.jpg" alt="Novotel Hotel" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_3.jpg" alt="Millenium Hotel" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_4.jpg" alt="Msheireb Properties" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_5.jpg" alt="One & Only" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_6.jpg" alt="Crowne Plaza" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_7.jpg" alt="Grand Hyatt" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_8.jpg" alt="Auris" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_9.jpg" alt="Hilton" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_10.jpg" alt="Rixos" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_11.jpg" alt="Embassy Of Spain" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_12.jpg" alt="State Of Qatar" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_13.jpg" alt="Embassy Of Switz" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_14.jpg" alt="Springli" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_15.jpg" alt="Gusto Cafe" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_16.jpg" alt="Fitness First" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_17.jpg" alt="Sobha" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_18.jpg" alt="Client" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_19.jpg" alt="Bice" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_22.jpg" alt="RAK Properties" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_23.jpg" alt="First Clique" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_24.jpg" alt="Cedar Tree Restaurant" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_25.png" alt="Desert Landscape" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_26.jpg" alt="EMAAR" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_27.jpg" alt="The Hamptons Cafe" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_28.jpg" alt="Dubai Hills Estate " class="img_fleft"></div><div class="item"><img src="files/clients/ambar_29.jpg" alt="Al Hikma Building Contracting" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_30.jpg" alt="The Kanoo Group" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_31.jpg" alt="Kempinski Hotel MOE" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_32.png" alt="Mansions" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_33.jpg" alt="NIKKI B Interiors" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_34.jpg" alt="KLounge (Madinat Jumeirah)" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_35.jpg" alt="Engineers Office" class="img_fleft"></div><div class="item"><img src="files/clients/ambar_36.jpg" alt="Belgian Embassy to UAE" class="img_fleft"></div>						
					</div>

                     
				</article>
			</div>
		</div>
	</section>
    <section class="row_3">
            <div class="container">
                
                <div class="row">
                    <article class="col-lg-12 col-sm-12">
                    	<div style="width:90%; margin:0 auto">
                            <p style="text-align:center">Ambar Garden furniture does it's distribution all over the United Arab Emirates (DUBAI, ABUDHABI,AL AIN, SHARJAH, FUJAIRAH, AJMAN, RAS AL KHAIMAH, UMM AL QUWAIN) and the following countries; SAUDI-ARABIA, OMAN, BAHRAIN, KUWAIT, QATAR, YEMEN, IRAN, IRAQ, EGYPT KENYA, UGANDA, INDIA, PAKISTAN, LEBANON AND SYRIA
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
  </div>	

	<!--======================== footer ============================-->
	<footer id="footer" class="footer">
	<section class="row_1 second"> 
		<div class="container">
			<div class="row">
				<article class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margi-right" style="text-align:center">
					
					<div class="qoute_box" style="text-align:center">
						<img class="single_img" src="img/footer.png" alt="page2_img">
						<!--<a href="#" class="btn1">E-Catalogue</a>-->
					</div>
                    
					<ul class="soc_list">
						<li class="facebook"><a href="https://www.facebook.com/ambargardenfurnituredubai" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li class="instagram"><a href="https://instagram.com/ambargardenfurniture/" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li class="pinterest"><a href="https://www.pinterest.com/ambargarden/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
						
					</ul>
                    <section class="subscribe">
                    
                    <form action="http://www.ambargardenfurniture.com/subcribe-form.php" method="post" class="subscribe-form">
                      <input type="email" name="subcribeEmail" class="subscribe-input" placeholder="Email address" required>
                      <button type="submit" class="subscribe-submit">Subscribe</button>
                    </form>
                  </section>
                     
				</article>
               

				
   
				<article class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margi-right">
					<h4>Quick Link</h4>

					
					<ul class="list">
						<li><a href="index-2.html">Home</a></li>
						<li><a href="ambar_aboutd8db.html?page=About">About Us</a></li>
						<li><a href="ambar_products66fd.html?page=Product">Products</a></li>
                        <li><a href="AMBARCATALOGUE.pdf" target="_blank">Download</a></li>
						<li><a href="ambar_contact4d00.html?page=Contact">Contact Us</a></li>
						
					</ul>

				</article>
                <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margi-right">
					<h4>Show Room Timing</h4>
					
					<div class="extra_wrap">
						<div class="extra_wrap">
                        <h4><a href="#" style="text-transform:capitalize">Umm Suqueim Road</a></h4><p>Timing : 10am To 7pm Saturday To Thursday</p>						</div>
					</div>
					
				</article>
                <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<h4>About us</h4>
                    
					<p>AMBAR Garden Furniture was incorporated under the laws of Spain in 2000 and is owned and operated by two partners, Ana Elena Gastaldi and Eduardo Hualde.... </p>
					<a href="ambar_about.html" class="btn1">Read More</a>	

				</article>
			</div>

		</div> 
	</section>
  <div class="container copy-design">
	<div class="row">
	  <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="copyright">Copyright &copy; <span id="copyright-year"></span>Sweet Garden All Rights Reserved</div>
		<div class="footer_link"><!--{%FOOTER_LINK} --></div>
	  </article>
      <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="designed">Designed By <a href="http://bsdbd.com/">BSD</a></div>
		<div class="footer_link"><!--{%FOOTER_LINK} --></div>
	  </article>
	</div>
  </div>
</footer><!--======================== end footer ============================--> 
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>

</div>
</body>

<!-- Mirrored from www.ambargardenfurniture.com/index.php by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 05 Jun 2016 04:49:29 GMT -->
</html>

