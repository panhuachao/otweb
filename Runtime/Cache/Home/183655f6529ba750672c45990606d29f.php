<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="utf-8"> 
<title><?php echo C('WEB_SITE_TITLE');?></title>
<meta name="description" content="A Template by Designzway team">
<meta name="keywords" content="HTML, CSS, JavaScript">
<meta name="author" content="Designzway team">

<!-- Mobile Specific Metas-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="telephone=no" name="format-detection">

<!-- Fonts -->
<!-- Open Sans -->
<link href='http://fonts.useso.com/css?family=Open+Sans:300,400italic,600,700italic,400,700,800italic' rel='stylesheet' type='text/css'>
<!-- VarelaRound -->
<link href='http://fonts.useso.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<!-- Icon Font - Font Awesome -->
<link href="/onethink/Public/static/theme/css/font-awesome.min.css" rel="stylesheet">

<!-- Stylesheets -->
<!-- External -->
<!-- Mobile menu -->	
<link href="/onethink/Public/static/theme/external/z-nav/z-nav.css" rel="stylesheet">

<!-- Sliders -->
<!-- Revolution slider -->
<link href="/onethink/Public/static/theme/external/rs-plugin/css/settings.css" rel="stylesheet"  media="screen" />
<!-- Touch slider - Swiper -->
<link href="/onethink/Public/static/theme/external/swiper/idangerous.swiper.css" rel="stylesheet" />

<!-- Custom -->
<link href="/onethink/Public/static/theme/css/style.css?v=1" rel="stylesheet" />

<!-- Basic JavaScript-->
<!-- Modernizr -->
<script src="/onethink/Public/static/theme/external/modernizr/modernizr.custom.js"></script>


<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
<!--[if lt IE 9]> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>		
<![endif]-->

<!--[if lte IE 9]>
<link href="css/ie9.css?v=1" rel="stylesheet" />
<![endif]--> 
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>

</head>
<body>
<div class="wrapper" id="top">
	<!-- 头部 -->
	<!-- Header section -->
<header class="header header--dark">
    <div class="header-fixed">
    <div class="header-line waypoint" data-animate-down="header-up" data-animate-up="header-down">
        <div class="container">
            <!-- Contact information about company -->
            <address class="contact-info pull-left hidden-lower">
                <span class="contact-info__item">
                    <i class="fa fa-location-arrow"></i>
                    101 West Street, New York, NY 12345
                </span>
                <span class="contact-info__item">
                    <i class="fa fa-mobile"></i>
                    +1-888-555-5555
                </span>
                <span class="contact-info__item">
                    <i class="fa fa-envelope"></i>
                    info@allec.com
                </span>
            </address>
            <!-- end contact information -->
        </div>  <!-- end container -->
    </div>
    
    <div class="fixed-top header-down">
    <div class="container">
        <!--  Logo  -->
        <a class="logo" href="index.html">
            <!-- Remove comments to choose image and add comment to h1 -->
            <!--<img src="images/logo-full.png" alt="">-->  
            <h1 class="logo__text">Alle<span class="highlight">c</span><br>
                <span class="logo__slogan">your business universe</span>
            </h1>            
        </a>
        <!-- End Logo -->

        <!-- Navigation section -->
        <nav class="z-nav">
            <!-- Toggle for menu mobile view -->
            <a href="#" class="z-nav__toggle">
                <span class="menu-icon"></span>
                <span class="menu-text">navigation</span>
                <div class="menu-head"></div>
            </a>

            <ul class="z-nav__list">
                <li class="z-nav__item">
                    <!-- Subsidiary menu toogle button -->
                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                    <a class="z-nav__link z-nav__link--active" href="index.html">Home</a>
                    <!-- Subsidiary menu list-->
                    <ul class="z-nav__list-secondary">
                                <li class="z-nav__item"><a class="z-nav__link" href="index1.html">Homepage Version 1</a></li>
                                <li class="z-nav__item"><a class="z-nav__link" href="index2.html">Homepage Version 2</a></li>
                                <li class="z-nav__item"><a class="z-nav__link" href="index3.html">Homepage Version 3</a></li>
                                <li class="z-nav__item"><a class="z-nav__link" href="index-host.html">Hosting Homepage</a></li>
                                <li class="z-nav__item"><a class="z-nav__link" href="index-animation.html">Homepage with Canvas Animation</a></li>
                                <li class="z-nav__item"><a class="z-nav__link" href="index.html">Hero Header Version</a></li>
                                <li class="z-nav__item"><a class="z-nav__link" href="onepage-layout.html">Onepage Version</a></li>

                                <li class="z-nav__item">
                                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                                    <a class="z-nav__link" href="#">Dark Headers</a>
                                    <ul class="z-nav__list-secondary z-nav_nested">
                                        <li class="z-nav__item"><a class="z-nav__link" href="header-1.html">Default Header</a>
                                        <li class="z-nav__item"><a class="z-nav__link" href="header-2.html">Header with Social Icons</a>
                                        <li class="z-nav__item"><a class="z-nav__link" href="header-3.html">Header with Centred Logo</a>
                                        <li class="z-nav__item"><a class="z-nav__link" href="header-4.html">Two-row Header with Small Logo</a>
                                        <li class="z-nav__item"><a class="z-nav__link" href="header-5.html">Simplified Header</a>
                                        <li class="z-nav__item"><a class="z-nav__link" href="header-6.html">E-commerce Header</a>
                                    </ul>
                                </li>
                                <li class="z-nav__item">
                                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                                    <a class="z-nav__link" href="#">Light Headers</a>
                                    <ul class="z-nav__list-secondary z-nav_nested">
                                        <li class="z-nav__item"><a class="z-nav__link" href="header-1-light.html">Default Header</a>
                                        <li class="z-nav__item"><a class="z-nav__link" href="header-2-light.html">Header with Social Icons</a>
                                        <li class="z-nav__item"><a class="z-nav__link" href="header-3-light.html">Header with Centred Logo</a>
                                        <li class="z-nav__item"><a class="z-nav__link" href="header-4-light.html">Two-row Header with Small Logo</a>
                                        <li class="z-nav__item"><a class="z-nav__link" href="header-5-light.html">Simplified Header</a>
                                        <li class="z-nav__item"><a class="z-nav__link" href="header-6-light.html">E-commerce Header</a>
                                    </ul>
                                </li>
                                <li class="z-nav__item">
                                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                                    <a class="z-nav__link" href="#">Dark Footers</a>
                                    <ul class="z-nav__list-secondary z-nav_nested">
                                        <li class="z-nav__item"><a class="z-nav__link" href="footer-1.html">Default Footer</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="footer-2.html">Footer with Subscription</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="footer-3.html">Footer with Contact Form</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="footer-4.html">Simplified Footer</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="footer-5.html">Footer with Instagram Feed</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="footer-6.html">Centered Footer</a></li>
                                    </ul>   
                                </li>
                                <li class="z-nav__item">
                                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                                    <a class="z-nav__link" href="#">Light Footers</a>
                                    <ul class="z-nav__list-secondary z-nav_nested">
                                        <li class="z-nav__item"><a class="z-nav__link" href="footer-1-light.html">Default Footer</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="footer-2-light.html">Footer with Subscription</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="footer-3-light.html">Footer with Contact Form</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="footer-4-light.html">Simplified Footer</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="footer-5-light.html">Footer with Instagram Feed</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="footer-6-light.html">Centered Footer</a></li>
                                    </ul>
                                </li>
                            </ul>                   
                    <!-- end subsidiary menu list-->
                </li>

                <li class="z-nav__item">
                    <!-- Subsidiary menu toogle button -->
                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                    <a class="z-nav__link" href="about.html">About</a>
                    <!-- Subsidiary menu list-->
                    <ul class="z-nav__list-secondary">
                        <li class="z-nav__item"><a class="z-nav__link" href="about.html">About</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="single-employee.html">Single employee</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="careers.html">Careers</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="testimonials.html">Testimonials</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="contact1.html">Contact version 1</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="contact2.html">Contact version 2</a></li>
                    </ul>
                    <!-- end subsidiary menu list-->
                </li>
                
                <li class="z-nav__item">
                    <!-- Subsidiary menu toogle button -->
                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                    <a class="z-nav__link" href="services.html">Services</a>
                    <!-- Subsidiary menu list-->
                    <ul class="z-nav__list-secondary">
                        <li class="z-nav__item"><a class="z-nav__link" href="services.html">Services version 1</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="services2.html">Services version 2</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="services3.html">Services version 3</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="single-service.html">Single service</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="pricing-tables.html">Pricing</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="support.html">Support</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="dashboard.html">Dashboard</a></li>
                    </ul>
                    <!-- end subsidiary menu list-->
                </li>
                
                
                <li class="z-nav__item">
                    <!-- Subsidiary menu toogle button -->
                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                    <a class="z-nav__link" href="gallery-3col.html">Portfolio</a>
                    <!-- Subsidiary menu list-->
                    <ul class="z-nav__list-secondary">
                        <li class="z-nav__item"><a class="z-nav__link" href="gallery-2col.html">Portfolio 2 columns</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="gallery-3col.html">Portfolio 3 columns</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="gallery-4col.html">Portfolio 4 columns</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="gallery-full.html">Portfolio fullwidth</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="case-study.html">Case study</a></li>
                    </ul>
                    <!-- end subsidiary menu list-->
                </li>
                
                <li class="z-nav__item">
                    <!-- Subsidiary menu toogle button -->
                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                    <a class="z-nav__link" href="index-commerce.html">Shop</a>
                    <!-- Subsidiary menu list-->
                    <ul class="z-nav__list-secondary">
                        <li class="z-nav__item"><a class="z-nav__link" href="index-commerce.html">Homepage</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="shop-grid-full.html">Catalog fullwidth grid</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="shop-list-full.html">Catalog fullwidth list</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="shop-grid.html">Catalog grid with sidebar</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="shop-list.html">Catalog list with sidebar</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="single-product.html">Single product with sidebar</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="single-product-full.html">Single product fullwidth</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="wishlist.html">Wishlist</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="orders.html">My orders</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="checkout.html">Checkout</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="shopping-cart.html">Shopping cart</a></li>
                    </ul>
                    <!-- end subsidiary menu list-->
                </li>

                <li class="z-nav__item">
                    <!-- Subsidiary menu toogle button -->
                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                    <a class="z-nav__link" href="blog.html">Blog</a>
                    <!-- Subsidiary menu list-->
                    <ul class="z-nav__list-secondary">
                        <li class="z-nav__item"><a class="z-nav__link" href="blog.html">Blog with sidebar</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="blog-full.html">Blog fullwidth</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="blog-masonry.html">Blog masonry</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="blog-timeline.html">Blog timeline</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="single-post.html">Single post with sidebar</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="single-post-full.html">Single post fullwidth</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="blog-audio.html">Blog audio</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="blog-video.html">Blog video</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="blog-author.html">Post author</a></li>
                    </ul>
                    <!-- end subsidiary menu list-->
                </li>

                <li class="z-nav__item">
                    <!-- Subsidiary menu toogle button -->
                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                    <a class="z-nav__link" href="forum.html">Forum</a>
                    <!-- Subsidiary menu list-->
                    <ul class="z-nav__list-secondary">
                        <li class="z-nav__item"><a class="z-nav__link" href="forum.html">Forum page</a></li>
                        <li class="z-nav__item"><a class="z-nav__link" href="forum-thread.html">Forum thread page</a></li>
                    </ul>
                    <!-- end subsidiary menu list-->
                </li>
                
                <li class="z-nav__item">
                    <!-- Subsidiary menu toogle button -->
                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                    <a class="z-nav__link" href="site-map.html">Additional</a>
                    <!-- Subsidiary menu list-->
                    <ul class="z-nav__list-secondary mega-menu">
                        <div class="col-sm-3 col-md-2">
                            <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/accordions-and-tabs.html"><i class="fa fa-plus-circle"></i> Accordions &amp; Tabs</a></li>
                            <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/charts.html"><i class="fa fa-bar-chart-o"></i> Charts</a></li>
                            <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/controls.html"><i class="fa fa-arrows"></i> Controls</a></li>
                        </div>
                        
                        <div class="col-sm-3 col-md-2">
                            <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/forms.html"><i class="fa fa-check-square-o"></i> Forms</a></li>
                            <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/icons.html"><i class="fa fa-user"></i> Icons</a></li>
                            <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/images.html"><i class="fa fa-picture-o"></i> Images</a></li>
                        </div>
                        
                        <div class="col-sm-3 col-md-2">
                            <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/promo.html"><i class="fa fa-cube"></i> Promoboxes</a></li>
                            <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/sliders.html"><i class="fa fa-cogs"></i> Sliders</a></li>
                            <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/tables.html"><i class="fa fa-table"></i> Tables</a></li>
                        </div>
                        
                        <div class="col-sm-3 col-md-2">
                            <li class="z-nav__item"><a class="z-nav__link" href="shortcodes/typography.html"><i class="fa fa-font"></i> Typography</a></li>
                            <li class="z-nav__item"><a class="z-nav__link" href="site-map.html"><i class="fa fa-sitemap"></i> Sitemap</a></li>
                            <li class="z-nav__item"><a class="z-nav__link" href="404.html"><i class="fa fa-frown-o"></i> 404 error</a></li>
                        </div>

                        <div class="clearfix visible-sm"></div>

                        <div class="col-sm-3 col-md-2">
                            <li class="z-nav__item"><a class="z-nav__link" href="comming-soon.html"><i class="fa fa-clock-o"></i> Coming soon</a></li>
                            <li class="z-nav__item"><a class="z-nav__link" href="login.html"><i class="fa fa-lock"></i> Login/registration</a></li>
                        </div>

                        <!-- <li class="z-nav__item"><a class="z-nav__link" href="#">Shortcodes</a></li> -->
                    </ul>
                    <!-- end subsidiary menu list-->
                </li>
            </ul>
            <!-- end list menu item -->
        </nav>
        <!-- end navigation section -->
    </div> <!-- end container -->

    <!-- Colored devider -->
    <div class="devider-color"></div>
    
    </div> <!-- end fixed top block -->

    </div>
</header>
	<!-- /头部 -->
	
	<!-- 主体 -->
	


    
        <!-- Revolution full width slider -->
        <div class="bannercontainer">
            <div class="banner">
                    <ul>
                        <!-- Slide --> 
                        <li data-transition="fade" data-slotamount="3" data-text="Great pixel perfect template which suites any needs. Some subheader text goes here.">
                            <img src="/onethink/Public/static/theme/images/1920x684.png" alt="">
                            <div class="caption sft slider__heading" data-x="center" data-y="85" data-speed="800" data-start="1300" data-easing="Back.easeOut">Just Awesome &amp; Worth to Try</div>
                            <div class="caption lfb skewtoleft slider__phone" data-x="center" data-y="bottom" data-speed="900" data-start="1900" data-easing="Power4.easeOut"><img src="/onethink/Public/static/theme/images/slider/full-width/brand-phone.png" alt=""></div>
                            <div class="caption customin customout slider__btn tp-resizeme" data-x="center" data-y="bottom" data-voffset="-70" data-speed="800" data-start="2700" data-easing="Back.easeOut" data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"><a class="btn btn-warning btn--decorated" href="#">Download Now</a></div>
                        </li>
                        <!-- end slide -->

                        <!-- Slide --> 
                        <li data-transition="fade" data-slotamount="3"  data-text="Powerful Shortcodes with Large Amount of Options.">
                            <img src="/onethink/Public/static/theme/images/1920x684.png" alt="">
                            
                            <div class="caption customin customout slider-width slider__heading--sm-danger" data-x="right" data-y="120" data-speed="700" data-start="1300" data-easing="Power1.easeIn" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;">High Professional Staff &amp;</div>
                            <div class="caption customin customout slider-width slider__heading--lg-primary" data-x="right" data-y="156" data-speed="500" data-start="1600" data-easing="Power1.easeIn" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;">Best Engineers Ever</div>
                            <div class="caption customin customout slider-width slider__text" data-x="right" data-y="242" data-speed="700" data-start="2300" data-easing="Power4.easeOut" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;">Nam auctor dapibus ante vel facilisis. Cras eget adipiscing nisi.<br> Duis aliquet ligula non risus sollicitudin commodo. Donec ullamcorper<br> lacinia turpis at aliquet. Cras consectetur fermentum erat,<br> in placerat ligula pharetra eget. </div>
                            <div class="caption sfr slider-width slider__btn" data-x="right" data-y="387" data-speed="600" data-start="2900"><a class="link" href="#">Learn more</a></div>
                        </li>
                        <!-- end slide -->

                        <!-- Slide --> 
                        <li data-transition="fade" data-slotamount="3" data-text="Different pages for various purposes.">
                            <img src="/onethink/Public/static/theme/images/1920x684.png" alt="">
                            <div class="caption customin tp-resizeme" data-x="center" data-y="center" data-speed="900" data-start="1200" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-easing="Power3.easeInOut"><div class="brand-circle"></div></div>
                            <div class="caption customin customout slider__heading--dark" data-x="center" data-y="241" data-speed="700" data-start="1700" data-easing="Power1.easeIn" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;">Find Your Way</div>
                            <div class="caption customin customout slider__heading--dark-sm" data-x="center" data-y="292" data-speed="500" data-start="2000" data-easing="Power1.easeIn" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;">to Success with Allec</div>
                            <div class="caption lfr slider__btn slider__btn-lg tp-resizeme" data-x="center" data-y="362" data-speed="600" data-start="2600"><a class="btn btn-warning btn--decorated" href="#">Join Us</a></div> 
                        </li>
                        <!-- end slide -->
                    </ul>
            </div>
        </div>

        <div class="banner-control top-space">
            <div class="container">
                <p class="slider-info"></p>
            </div>
        </div>

        <!-- Slider placeholder for mobile view (first variant) -->
        <div class="mobile-full-placeholeder">
            <h2 class="full-placeholeder__headind slider__heading">Just Awesome<br> &amp;<br> Worth to Try</h2>
            <a class="btn btn-warning btn--decorated" href="#">Download Now</a>
        </div>

        <div class="placeholeder-control top-space">
                <p class="placeholeder-info">Great pixel perfect template which suites any needs. Some subheader text goes here.</p>
        </div>

        <!-- end revolution full width slider -->


        <section class="container">
            <h3 class="not-visible">Main conrainer</h3>

            <div class="row">
                <div class="col-sm-4 hidden-xs">
                    <div class="feature">
                        <div class="feature__image feature__image--page animated fadeInUpStart start-1">
                            <img src="/onethink/Public/static/theme/images/feature/1.png" alt="">
                        </div>
                        <h3 class="feature__heading">Allec showcase</h3>
                        <p class="feature__info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est. Nunc eu sodales turpis, varius viverra mauris.</p>
                    </div>
                </div><!-- end col -->

                <div class="col-sm-4 hidden-xs">
                    <div class="feature">
                        <div class="feature__image feature__image--responsive animated fadeInUpStart start-2">
                            <img src="/onethink/Public/static/theme/images/feature/2.png" alt="">
                        </div>
                        <h3 class="feature__heading">Compatible with any device</h3>
                        <p class="feature__info">Aenean porta, elit vitae tristique consequat, nisi tellus tincidunt erat, sit amet interdum elit quam at velit. Mauris venenatis metus sed purus tincidunt placerat. </p>
                    </div>
                </div><!-- end col -->


                <div class="col-sm-4 hidden-xs">
                    <div class="feature">
                        <div class="feature__image feature__image--clock animated fadeInUpStart start-3">
                            <img src="/onethink/Public/static/theme/images/feature/3.png" alt="">
                        </div>
                        <h3 class="feature__heading">Quick implementation</h3>
                        <p class="feature__info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est. Nunc eu sodales turpis, varius viverra mauris.</p>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="swiper-container fearure-slider">
              <div class="swiper-wrapper">
                  <!--Slide-->
                  <div class="swiper-slide"> 
                        <div class="feature">
                            <div class="feature__image feature__image--page">
                                <img src="/onethink/Public/static/theme/images/feature/1.png" alt="">
                            </div>
                            <h3 class="feature__heading">Allec showcase</h3>
                            <p class="feature__info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est. Nunc eu sodales turpis, varius viverra mauris.</p>
                        </div>
                  </div>
                  
                  <!--Slide-->
                  <div class="swiper-slide">
                        <div class="feature">
                            <div class="feature__image feature__image--responsive">
                                <img src="/onethink/Public/static/theme/images/feature/2.png" alt="">
                            </div>
                            <h3 class="feature__heading">Compatible with any device</h3>
                            <p class="feature__info">Aenean porta, elit vitae tristique consequat, nisi tellus tincidunt erat, sit amet interdum elit quam at velit. Mauris venenatis metus sed purus tincidunt placerat. </p>
                        </div>
                  </div>
                  
                  <!--Slide-->
                  <div class="swiper-slide"> 
                        <div class="feature">
                            <div class="feature__image feature__image--clock">
                                <img src="/onethink/Public/static/theme/images/feature/3.png" alt="">
                            </div>
                            <h3 class="feature__heading">Quick implementation</h3>
                            <p class="feature__info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est. Nunc eu sodales turpis, varius viverra mauris.</p>
                        </div>
                  </div>
              </div>

              <div class="product-slider-pagination feature-pagination"></div>
            </div>
        </section><!-- end container -->

        <div class="number-container bottom-space--small">
            <div class="container">
            <div class="row">
                <h2 class="block-title block-title--simple" id="number-start">Allec in Numbers</h2>

            
                <!-- Brand shape stat view -->
                    <div class="col-xs-6 col-md-3 one-column">
                        <div class="stat stat--shape">
                            <p class="stat__dimension">download</p>
                            <span class="stat__number" data-result="140k" data-value="140">0</span>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xs-6 col-md-3 one-column">
                        <div class="stat stat--shape stat--shape-end">
                            <p class="stat__dimension">spent hours</p>
                            <span class="stat__number" data-result="6718" data-value="471">0</span>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xs-6 col-md-3 one-column">
                        <div class="stat stat--shape">
                            <p class="stat__dimension">countries</p>
                            <span class="stat__number" data-result="106" data-value="106">0</span>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xs-6 col-md-3 one-column">
                        <div class="stat stat--shape last">
                            <p class="stat__dimension">loyal clients</p>
                            <span class="stat__number" data-result="239" data-value="23">0</span>
                        </div>
                    </div><!-- end col -->
            </div><!-- end row -->
            </div><!-- end container -->
        </div>

        <div class="container">
            <h2 class="block-title block-title--top-larger">Available Services</h2>
        </div>
        
        <!-- Fading slider -->
        <div class="swiper-container fading-slider">
          <div class="swiper-wrapper">
              <!--Slide-->
              <div class="swiper-slide swiper-no-swiping"> 
                    <!-- Sevrice preview -->
                    <div class="service">
                        <div class="icon icon--strips">
                            <i class="icon__item fa fa-credit-card"></i>
                        </div>
                        <a class="service__link" href="single-service.html">
                            <h3 class="service__heading">Reasonable Price</h3>
                        </a>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est. Nunc eu sodales turpis, varius viverra mauris.</p>
                    </div>
                    <!-- end sevrice preview -->
              </div>
              
              <!-- Slide-->
              <div class="swiper-slide swiper-no-swiping">
                <!-- Sevrice preview -->
                    <div class="service">
                        <div class="icon icon--strips">
                            <i class="icon__item fa fa-heart"></i>
                        </div>
                        <a class="service__link" href="single-service.html">
                            <h3 class="service__heading">Made with Love</h3>
                        </a>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est. Nunc eu sodales turpis, varius viverra mauris.</p>
                    </div>
                    <!-- end sevrice preview -->
              </div>
              
              <!--Slide-->
              <div class="swiper-slide swiper-no-swiping"> 
                <!-- Sevrice preview -->
                    <div class="service">
                        <div class="icon icon--strips">
                            <i class="icon__item fa fa-cogs"></i>
                        </div>
                        <a class="service__link" href="single-service.html">
                            <h3 class="service__heading">Fully Customizable</h3>
                        </a>
                        
                        <p>Nullam lacinia nibh et nisi luctus rhoncus. Cras vitae purus volutpat, rhoncus mauris quis, elementum neque. In cursus magna eget consequat placerat. Nulla facilisi. </p>
                    </div>
                    <!-- end sevrice preview -->
              </div>

              <!-- Slide-->
              <div class="swiper-slide swiper-no-swiping">
                <!-- Sevrice preview -->
                    <div class="service">
                        <div class="icon icon--strips">
                            <i class="icon__item fa fa-phone"></i>
                        </div>
                        <a class="service__link" href="single-service.html">
                            <h3 class="service__heading">Premium-class Support</h3>
                        </a>
                        
                        <p>Sed eget placerat arcu. Nullam porta faucibus ligula, egestas tempus tellus dapibus tincidunt. Nunc vitae interdum massa. Nam in augue quis elit sagittis accumsan.</p>
                    </div>
                    <!-- end sevrice preview -->
              </div>
              

              <!--Slide-->
              <div class="swiper-slide swiper-no-swiping"> 
                <!-- Sevrice preview -->
                    <div class="service">
                        <div class="icon icon--strips">
                            <i class="icon__item fa fa-dashboard"></i>
                        </div>
                        <a class="service__link" href="single-service.html">
                            <h3 class="service__heading">Efficient Workflow</h3>
                        </a>
                        
                        <p>Sed eget placerat arcu. Nullam porta faucibus ligula, egestas tempus tellus dapibus tincidunt. Nunc vitae interdum massa. Nam in augue quis elit sagittis accumsan.</p>
                    </div>
                    <!-- end sevrice preview -->
              </div>

              <!--Slide-->
              <div class="swiper-slide swiper-no-swiping"> 
                <!-- Sevrice preview -->
                    <div class="service">
                        <div class="icon icon--strips">
                            <i class="icon__item fa fa-magic"></i>
                        </div>
                        <a class="service__link" href="single-service.html">
                            <h3 class="service__heading">Innovative Technologies</h3>
                        </a>
                        
                        <p>Sed eget placerat arcu. Nullam porta faucibus ligula, egestas tempus tellus dapibus tincidunt. Nunc vitae interdum massa. Nam in augue quis elit sagittis accumsan.</p>
                    </div>
                    <!-- end sevrice preview -->
              </div>

          </div>

           <div class="fade-slider-control">
                <a class="prev-arrow" href="#"><i class="fa fa-angle-left"></i></a>
                <a class="next-arrow" href="#"><i class="fa fa-angle-right"></i></a>
            </div><!-- end slider controls-->

            <div class="clearfix"></div>

            <div class="product-slider-pagination fade-pagination"></div>

        </div>

        <div class="container">
            <div class="devider-brand"></div>
        </div>

        <div class="container">
            <h2 class="block-title block-title--simple block-title--bottom-s block-title--top-large">Check Allec in Action</h2>

            <div class="row animated-row">
                    <div class="col-sm-12 col-md-6 col-md-push-3">
                        <div class="image-container image-container--empty animated fadeInUpStart start-2">
                            <div class="video-container video-container--large">
                                <iframe src="" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-sm-6 col-md-3 col-md-pull-6">
                        <ul class="list list--bordered list--top-line animated fadeInUpStart start-1">
                            <li>Etiam augue sem, pellentesque </li>
                            <li>Duis nec neque posuere, gravida</li>
                            <li>Cras felis nunc, tempus ut</li>
                            <li>Ut tincidunt varius pellentesque. Aenean laoreet nibh et nulla </li>
                            <li>Donec imperdiet posuere dolor, at fringilla augue</li>
                        </ul>
                    </div><!-- end col -->
                    

                    <div class="col-sm-6 col-md-3">
                        <ul class="list list--bordered list--top-line animated fadeInUpStart start-3">
                            <li>Etiam augue sem, pellentesque </li>
                            <li>Duis nec neque posuere, gravida</li>
                            <li>Cras felis nunc, tempus ut</li>
                            <li>Ut tincidunt varius pellentesque. Aenean laoreet nibh et nulla </li>
                            <li>Donec imperdiet posuere dolor, at fringilla augue</li>
                        </ul>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="devider-brand"></div>

                <div class="col-sm-10 col-sm-offset-1">
                <div class="short-text short-text--uni animated fadeInStart">
                    <h4>Nullam lacinia nibh et nisi luctus rhoncus. Cras vitae purus volutpat, rhoncus mauris quis, elementum neque. </h4>
     
                    <p>In cursus magna eget consequat placerat. Nulla facilisi. Ut pretium quis lacus quis mollis. Aenean justo mi, adipiscing a ligula id, lobortis porttitor arcu. Cras tincidunt tempus est a scelerisque. Maecenas adipiscing nulla sapien, non laoreet orci accumsan tempus. Vestibulum cursus nisi ut purus lobortis, non aliquet mauris pulvinar.  </p>

                    <a class="link link--top" href="about.html">Learn more</a>
                </div>
            </div>
        </div>
        <!-- Colored devider -->
        <div class="devider-color bottom-space--m"></div>
        <!-- end footer section -->
        <div class="top-scroll"><i class="fa fa-angle-up"></i></div>

	<!-- /主体 -->

	<!-- 底部 -->
	<!-- Footer section -->
<footer class="footer">
	<div class="container">
		<!-- Twitter carousel -->
		<div class="swiper-container">
			<div class="swiper-wrapper" id="twitter-feed"></div>
			<!-- Slider pagination -->
			<div class="swiper-pagination"></div>
		</div>

		<div class="row">
		
		<!-- Latest post -->
		<div class="col-sm-4">
			<h3 class="heading-info">Latest from blog:</h3>

			<div class="row">
				<div class="col-xs-6 col-sm-12 one-column">
					<article class="post post--latest">
						<h3 class="not-visible">Latest post</h3>
						<a class="post__images" href="single-post.html">
							<img src="http://placehold.it/160x160" alt="">
						</a>
						<a class="post__text" href="single-post.html">Mauris orci purus, ultrices dapibus justo non, eleifend consequat lorem. </a>
						<time datetime="2014-07-17" class="post__date">July 17, 2014</time>
					</article>
				</div>
			
				<div class="col-xs-6 col-sm-12 one-column">
					<article class="post post--latest">
						<h3 class="not-visible">Latest post</h3>
						<a class="post__images" href="single-post.html">
							<img src="http://placehold.it/160x160" alt="">
						</a>
						<a class="post__text" href="single-post.html">Pellentesque et magna malesuada, scelerisque elit ac, convallis lacus. </a>
						<time datetime="2014-07-16" class="post__date">July 16, 2014</time>
					</article>
				</div>
			</div>
		</div>
		<!-- end latest post -->
		
		<!-- Contact info about company -->
		<div class="col-sm-4">
			<h3 class="heading-info heading-info--mobile">Contact info:</h3>
			<!-- Contact information about company -->
				<address class="contact-info contact-info--list">
					<div class="row">
						<div class="col-xs-6 col-sm-12 one-column">
							<span class="contact-info__item">
								<i class="fa fa-location-arrow"></i>
								101 West Street, New York, NY 12345
							</span>
							<span class="contact-info__item">
								<i class="fa fa-mobile"></i>
								+1-888-555-5555 / +1-888-123-3535
							</span>
						</div>
			
						<div class="col-xs-6 col-sm-12 one-column">
							<span class="contact-info__item">
								<i class="fa fa-envelope"></i>
								info@allec.com / sales@allec.com
							</span>
							<span class="contact-info__item">
								<i class="fa fa-skype"></i>
								allec-support
							</span>
						</div>
					</div>
				</address>
				<!-- end contact information -->
		</div>
		<!-- end contact info -->
		
		<!-- Social links -->
		<div class="col-sm-4">
		<h3 class="heading-info heading-info--mobile">We’re social:</h3>
			<div class="social social--default">
				<!-- List with social icons -->
				<ul>
					<li class="social__item"><a class="social__link" href="https://twitter.com/OliaGozha" target="_blank"><i class="social__icon fa fa-twitter"></i></a></li>
					<li class="social__item"><a class="social__link" href="https://www.facebook.com/olia.gozha" target="_blank"><i class="social__icon fa fa-facebook"></i></a></li>
					<li class="social__item"><a class="social__link" href="https://plus.google.com/u/0/+OliaGozha/posts" target="_blank"><i class="social__icon fa fa-google-plus"></i></a></li>
					<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-pinterest"></i></a></li>
					<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-tumblr"></i></a></li>
					<li class="social__item"><a class="social__link" href="http://www.linkedin.com/pub/olia-gozha/49/b91/268" target="_blank"><i class="social__icon fa fa-linkedin"></i></a></li>
					<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-youtube"></i></a></li>
					<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-github-alt"></i></a></li>
					<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-flickr"></i></a></li>
					<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-vimeo-square"></i></a></li>
					<li class="social__item"><a class="social__link" href="http://dribbble.com/OliaGozha" target="_blank"><i class="social__icon fa fa-dribbble"></i></a></li>
					<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-stumbleupon"></i></a></li>
					<li class="social__item"><a class="social__link" href="http://instagram.com/olechka_dumka#" target="_blank"><i class="social__icon fa fa-instagram"></i></a></li>
					<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-soundcloud"></i></a></li>
					<li class="social__item"><a class="social__link" href="http://www.behance.net/olia_gozha" target="_blank"><i class="social__icon fa fa-behance"></i></a></li>
					<li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-vine"></i></a></li>
				</ul>
			</div>
		</div>
		<!-- end social links -->
		</div><!-- end row -->
		
		<div class="copy">
			&copy; Allec, 2014. All rights reserved. More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
		</div>

	</div><!-- end container -->
</footer>

<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "/onethink", //当前网站地址
		"APP"    : "/onethink/index.php?s=", //当前项目地址
		"PUBLIC" : "/onethink/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>
<!-- JavaScript-->
<!-- External-->
<!-- jQuery 1.10.1--> 
<script src="/onethink/Public/static/theme/js/jquery.min.js"></script>
<!-- Bootstrap 3--> 
<script src="/onethink/Public/static/theme/js/bootstrap.min.js"></script>
<!-- Mobile menu -->
<script src="/onethink/Public/static/theme/external/z-nav/jquery.mobile.menu.js"></script>

<!-- Sliders -->
<!-- jQuery REVOLUTION Slider -->
<script src="/onethink/Public/static/theme/external/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="/onethink/Public/static/theme/external/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Touch slider - Swiper -->
<script src="/onethink/Public/static/theme/external/swiper/idangerous.swiper.js"></script>

<!-- Twitter feed -->
<script src="/onethink/Public/static/theme/external/twitterfeed/twitterfeed.js"></script>
<!-- Scroll to piugin -->
<script src="/onethink/Public/static/theme/external/scrollto/jquery.scrollTo.min.js"></script>

<!-- Livicons -->
<script src="/onethink/Public/static/theme/external/livicons/livicons-1.3.min.js"></script>
<script src="/onethink/Public/static/theme/external/livicons/raphael-min.js"></script>

<!-- Waypoints -->
<script src="/onethink/Public/static/theme/external/waypoint/waypoints.min.js"></script>
 <!-- Event that will trigger when the element is scrolled in to the viewport.--> 
<script src="/onethink/Public/static/theme/external/inview/jquery.inview.js"></script>

<!-- Custom -->
<script src="/onethink/Public/static/theme/js/custom.js"></script>

<script>
    $(document).ready(function() {
       revDefault(); 
       featureSlider();
       fadingSlider();
       numberStart();
       preloader();

        $('.feature .feature__heading').one('inview', function (event, visible) {
                if (visible == true) {
                    $('.feature__image.start-1').addClass('fadeInUp');
                    $('.feature__image.start-2').addClass('fadeInUp stage2');
                    $('.feature__image.start-3').addClass('fadeInUp stage3');
                }
        });

        $('.animated-row').one('inview', function (event, visible) {
                if (visible == true) {
                    $('.list.start-1').addClass('fadeInUp');
                    $('.image-container.start-2').addClass('fadeInUp stage2');
                    $('.list.start-3').addClass('fadeInUp stage3');
                }
        });

        $('.short-text').one('inview', function (event, visible) {
                if (visible == true) {
                    $(this).addClass('fadeIn slow');
                }
        });

       
    });
</script>
 <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	
</div>

	<!-- /底部 -->
</div>
<div class="animationload">
    <div class="preloader"></div>
</div>
</body>
</html>