
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Life Line</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100|Open+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>
<!-- Styles -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sea-green.css" title="sea-green" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/brown.css" title="brown" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bright-red.css" title="bright-red" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/yellow.css" title="yellow" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/green.css" title="green" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/hunter-green.css" title="hunter-green" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/light-pink.css" title="light-pink" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/orange.css" title="orange" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/pink.css" title="pink" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/red.css" title="red" />
<link href="<?php echo base_url();?>assets/css/contact.css" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ie.css" />
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/js/html5shiv.js"></script>
<![endif]-->
<!-- Scripts -->
<script src="<?php echo base_url();?>assets/js/jquery-2.2.2.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/perfect-scrollbar.jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/perfect-scrollbar.js" type="text/javascript"></script>
<script src='js/bootstrap.js'></script>
<script src="<?php echo base_url();?>assets/js/html5lightbox.js"></script>
<script src='js/script.js'></script>
<script src='js/styleswitcher.js'></script>
<script defer src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
<script defer src="<?php echo base_url();?>assets/js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.downCount.js"></script>
<script>
$(window).load(function(){
	$('.countdown').downCount({
	/* ==== Month / Date / Year ===*/
	date: '10/17/2017 12:00:00',
	offset: +10
	});
	$('.countdown.time2').downCount({
	/* ==== Month / Date / Year ===*/
	date: '04/30/2017 12:00:00',
	offset: +10
	});
  $('.wide-project-carousel').flexslider({
	animation: "fade",
	animationLoop: false,
	slideShow:false,
	controlNav: false,
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
  $('.sponsors-carousel').flexslider({
	animation: "fade",
	animationLoop: false,
	slideShow:false,
	controlNav: false,
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
  $('.footer_carousel').flexslider({
	animation: "slide",
	animationLoop: false,
	slideShow:false,
	controlNav: true,
	slideshowSpeed: 7000,
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
});
</script>

<!-- Scripts For Layer Slider  -->
<script src="<?php echo base_url();?>assets/layerslider/js/greensock.js" type="text/javascript"></script>
<!-- LayerSlider script files -->
<script src="<?php echo base_url();?>assets/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
jQuery("#layerslider").layerSlider({
	responsive: true,
	responsiveUnder: 1170,
	layersContainer: 870,
	skin: 'fullwidth',
	hoverPrevNext: true,
	skinsPath: 'layerslider/skins/'
});
});
</script>
</head>
<body>
<div class="theme-layout">
<div id="top-bar" class="modern">
	<div class="container">
		<ul>
			<li>
				<i class="icon-home"></i>
				425 Street Name, UK, London
			</li>
			<li>
				<i class="icon-phone"></i>
				(123) 456-7890
			</li>
			<li>
				<i class="icon-envelope"></i>
				contact@companymail.com
			</li>
		</ul>
		<div class="header-social">
			<ul>
				<li><a href="#" title=""><i class="icon-google-plus"></i></a></li>
				<li><a href="#" title=""><i class="icon-facebook"></i></a></li>
				<li><a href="#" title=""><i class="icon-skype"></i></a></li>
				<li><a href="#" title=""><i class="icon-linkedin"></i></a></li>
				<li><a href="#" title=""><i class="icon-twitter"></i></a></li>
			</ul>
		</div>
	</div>
</div><!--top bar-->
<header class="header2 sticky">
	<div class="container">
		<div class="logo">
			<a href="#" title=""><img src="images/logo.png" alt="Logo" /><h1><i>L</i>ifeline</h1></a>
		</div><!-- Logo -->
		<a class="header-btn" href="#" title="">DONATE NOW</a>
		<nav class="menu">
			<ul id="menu-navigation">
				<li class="active"><a><i class="icon-circle"></i>Home</a>
					<ul class="mega-menu2">
						<li><a href="index.html" title="">Home Simple 1</a></li>
						<li><a href="index2.html" title="">Home Modern Style</a></li>
						<li><a href="index3.html" title="">Home Simple 2</a></li>
						<li><a href="index4.html" title="">Home Simple 3</a></li>
						<li><a href="index7.html" title="">Home Traditional Style</a></li>
						<li><a href="index5.html" title="">Home With Video</a></li>
						<li><a href="index6.html" title="">Home With Portfolio</a></li>
						<li><a href="index8.html" title="">Home With Sidebar</a></li>
						<li><a href="index9.html" title="">Home Organization 1</a></li>
						<li><a href="index10.html" title="">Home Organization 2</a></li>
						<li><a href="index11.html" title="">Home Minimalist 1</a></li>
						<li><a href="index12.html" title="">Home Minimalist 2</a></li>
						<li><a href="index13.html" title="">NonProfit Organization 2016</a></li>
						<li><a href="index14.html" title="">Photography Hompage 2016</a></li>
                        <li><a href="index-with-imgcarousel.html" title="">Home image carousel 2017<span>NEW</span></a></li>
                        <li><a href="index-with-text-carousel.html" title="">Home text carousel 2017<span>NEW</span></a></li>
                        <li><a href="index-with-banner.html" title="">Home featured banner 2017<span>NEW</span></a></li>
						<li><a><strong>Header Styles</strong></a>
							<ul>
								<li><a href="header1.html" title="">Transparent Header</a></li>
								<li><a href="header2.html" title="">Header With Social Icons</a></li>
								<li><a href="header3.html" title="">Header With Countdown</a></li>
								<li><a href="sticky-menu.html" title="">Sticky Header</a></li>
								<li><a href="menu-below-slider.html" title="">Menu Below Slider</a></li>
								<li><a href="middle-logo.html" title="">With Logo In The Mid</a></li>
								<li><a href="index5.html" title="">Toggle Header</a></li>
							</ul>
						</li>
					</ul><!-- Drop Down -->
				</li>

				<li><a><href="<?php echo base_url();?>blog"><i class="icon-circle"></i>Blog</a></li>

					</ul><!-- Drop Down -->
				</li>
			</ul>
		</nav><!-- Menu -->
	</div>
</header><!--header-->
<div class="responsive-header">
	<div class="responsive-topbar">
		<div class="responsive-topbar-info">
			<ul>
				<li><i class="fa fa-home"></i> Go to Home</li>
				<li><i class="fa fa-phone"></i> (031) 6565001</li>
				<li><i class="fa fa-envelope"></i> Contact@companymail.com</li>
			</ul>
			<div class="container">
				<div class="responsive-socialbtns">
					<ul>
						<li><a href="#" title=""><i class="fa fa-rss"></i></a></li>
						<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" title=""><i class="fa fa-pinterest-p"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="responsive-logomenu">
		<div class="container">
			<a href="index.html" title=""><img src="images/responsivelogo.png" alt="Logo" /></a>
			<span class="menu-btn"><i class="fa fa-th-list"></i></span>
		</div>
	</div>
	<div class="responsive-menu">
		<span class="close-btn"><i class="fa fa-close"></i></span>
		<ul>
			<li class="has-dropdown"><a href="#" title="">Home</a>
				<ul>
					<li><a href="index.html" title="">Home Simple 1</a></li>
						<li><a href="index2.html" title="">Home Modern Style</a></li>
						<li><a href="index3.html" title="">Home Simple 2</a></li>
						<li><a href="index4.html" title="">Home Simple 3</a></li>
						<li><a href="index7.html" title="">Home Traditional Style</a></li>
						<li><a href="index5.html" title="">Home With Video</a></li>
						<li><a href="index6.html" title="">Home With Portfolio</a></li>
						<li><a href="index8.html" title="">Home With Sidebar</a></li>
						<li><a href="index9.html" title="">Home Organization 1</a></li>
						<li><a href="index10.html" title="">Home Organization 2</a></li>
						<li><a href="index11.html" title="">Home Minimalist 1</a></li>
						<li><a href="index12.html" title="">Home Minimalist 2</a></li>
						<li><a href="index13.html" title="">NonProfit Organization 2016</a></li>
						<li><a href="index14.html" title="">Photography Hompage 2016</a></li>
                        <li><a href="index-with-imgcarousel.html" title="">Home image carousel 2017<span>NEW</span></a></li>
                        <li><a href="index-with-text-carousel.html" title="">Home text carousel 2017<span>NEW</span></a></li>
                        <li><a href="index-with-banner.html" title="">Home featured banner 2017<span>NEW</span></a></li>
						<li class="has-dropdown"><a href="#" title=""><strong>Header Styles</strong></a>
							<ul>
								<li><a href="header1.html" title="">Transparent Header</a></li>
								<li><a href="header2.html" title="">Header With Social Icons</a></li>
								<li><a href="header3.html" title="">Header With Countdown</a></li>
								<li><a href="sticky-menu.html" title="">Sticky Header</a></li>
								<li><a href="menu-below-slider.html" title="">Menu Below Slider</a></li>
								<li><a href="middle-logo.html" title="">With Logo In The Mid</a></li>
								<li><a href="index5.html" title="">Toggle Header</a></li>
							</ul>
						</li>
				</ul><!-- Drop Down -->
			</li>
			<li class="has-dropdown"><a href="#" title="">Pages</a>
				<ul>
					<li><a href="about.html" title="">About Wide</a></li>
					<li><a href="contact.html" title="">Contact Wide</a></li>
					<li><a href="profile-single-page.html" title="">Profile Single Page</a></li>
					<li class="has-dropdown"><a href="#" title="">Events</a>
						<ul>
							<li><a href="events.html" title="">Right Sidebar</a></li>
							<li><a href="events-left-sidebar.html" title="">Left Sidebar</a></li>
							<li><a href="single-event-page.html" title="">Event Single Page</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#" title="">Photography Demo Pages</a>
							<ul class="drop-right">
								<li><a href="photography-demo-single.html" title="">Photography Demo Single</a></li>
								<li><a href="photography-demo-detail.html" title="">Photography Demo Detail</a></li>
							</ul>
						</li>
					<li><a href="successful-stories.html" title="">Successful Stories Wide</a></li>
					<li><a href="services-single.html" title="">Single Service Page</a></li>
					<li><a href="single-causes.html" title="">Single Cause Page</a></li>
					<li><a href="causes.html" title="">Our Causes Wide</a></li>
					<li><a href="404.html" title="">404 Page Wide</a></li>
					<li class="has-dropdown"><a href="#" title="">Projects</a>
						<ul>
							<li><a href="projects.html" title="">On Going Projects Wide</a></li>
							<li><a href="single-post-project.html" title="">Single Post Project</a></li>
							<li><a href="single-post-project-left-sidebar.html" title="">Single Post Project Left Sidebar</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#" title="">Search With Right Sidebar</a>
						<ul>
							<li><a href="search-found.html" title="">Search Results Found</a></li>
							<li><a href="nothing-found.html" title="">Search Result Not Found</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#" title="">Search With Left Sidebar</a>
						<ul>
							<li><a href="search-found-left-sidebar.html" title="">Search Results Found</a></li>
							<li><a href="nothing-found-left-sidebar.html" title="">Search Result Not Found</a></li>
						</ul>
					</li>
				</ul><!-- Drop Down -->
			</li>
			<li class="has-dropdown"><a href="#" title="">Cart</a>
				<ul>
					<li class="has-dropdown"><a href="#" title="">My Cart</a>
						<ul>
							<li><a href="cart.html" title="">Right Sidebar</a></li>
							<li><a href="cart-left-sidebar.html" title="">Left Sidebar</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#" title="">Products</a>
						<ul>
							<li><a href="products.html" title="">Right Sidebar</a></li>
							<li><a href="products-left-sidebar.html" title="">Left Sidebar</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#" title="">Checkout</a>
						<ul>
							<li><a href="checkout.html" title="">Right Sidebar</a></li>
							<li><a href="checkout-left-sidebar.html" title="">Left Sidebar</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#" title="">Order Recieved</a>
						<ul>
							<li><a href="order-recieved.html" title="">Right Sidebar</a></li>
							<li><a href="order-recieved-left-sidebar.html" title="">Left Sidebar</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#" title="">Single Product Page</a>
						<ul>
							<li><a href="single-product.html" title="">Right Sidebar</a></li>
							<li><a href="single-product-left-sidebar.html" title="">Left Sidebar</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="has-dropdown"><a href="#" title="">Portfolio</a>
				<ul>
					<li><a href="portfolio-2-column.html" title="">2 Column Wide</a></li>
					<li><a href="portfolio-3-column.html" title="">3 Column Wide</a></li>
					<li><a href="portfolio-4-column.html" title="">4 Column Wide</a></li>
				</ul>
			</li>
			<li class="has-dropdown"><a href="#" title="">Gallery</a>
				<ul>
					<li><a href="gallery-one-column.html" title="">1 Column Wide</a></li>
					<li><a href="gallery-two-column.html" title="">2 Column Wide</a></li>
					<li><a href="gallery-three-column.html" title="">3 Column Wide</a></li>
					<li><a href="gallery-four-column.html" title="">4 Column Wide</a></li>
					<li class="has-dropdown"><a href="#" title="">Video Gallery</a>
						<ul>
							<li><a href="gallery-three-column-video.html" title="">3 Column With Lightbox</a></li>
							<li><a href="gallery-three-column-video2.html" title="">3 Column </a></li>
							<li><a href="gallery-two-column-video.html" title="">2 Column With Lightbox</a></li>
							<li><a href="gallery-two-column-video2.html" title="">2 Column</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#" title="">Right Sidebar</a>
						<ul>
							<li><a href="gallery-one-column-with-sidebar.html" title="">1 Column</a></li>
							<li><a href="gallery-two-column-with-sidebar.html" title="">2 Column</a></li>
							<li><a href="gallery-three-column-with-sidebar.html" title="">3 Column</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#" title="">Left Sidebar</a>
						<ul>
							<li><a href="gallery-one-column-with-left-sidebar.html" title="">1 Column</a></li>
							<li><a href="gallery-two-column-with-left-sidebar.html" title="">2 Column</a></li>
							<li><a href="gallery-three-column-with-left-sidebar.html" title="">3 Column</a></li>
						</ul>
					</li>
				</ul><!-- Drop Down -->
			</li>
			<li class="has-dropdown"><a href="#" title="">Blog</a>
				<ul>
					<li><a href="blog-without-sidebar.html" title="">Blog Wide</a></li>
					<li><a href="blog-with-sidebar.html" title="">Blog With Left Sidebar</a></li>
					<li><a href="blog-with-left-sidebar.html" title="">Blog With Right Sidebar</a></li>
					<li class="has-dropdown"><a href="#" title="">Single Posts Right Sidebar</a>
						<ul>
							<li><a href="single-post-image.html" title="">Single Post With Image</a></li>
							<li><a href="single-post-video.html" title="">Single Post With Video</a></li>
							<li><a href="single-post-slider.html" title="">Single Post With Slider</a></li>
							<li><a href="single-post-project.html" title="">Project Single Post</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#" title="">Single Posts Left Sidebar</a>
						<ul>
							<li><a href="single-post-image-left-sidebar.html" title="">Single Post With Image</a></li>
							<li><a href="single-post-video-left-sidebar.html" title="">Single Post With Video</a></li>
							<li><a href="single-post-slider-left-sidebar.html" title="">Single Post With Slider</a></li>
							<li><a href="single-post-project-left-sidebar.html" title="">Project Single Post</a></li>
						</ul>
					</li>

				</ul><!-- Drop Down -->
			</li>
			<li class="has-dropdown"><a href="elements.html">Features</a>
				<ul>
					<li><a href="light-footer.html">Light Footer</a></li>
					<li><a href="title-style.html">Title Styles</a></li>
					<li><a href="elements.html#tabs-style">4 Tabs Style</a></li>
					<li><a href="elements.html#accordions-style">2 Accordions</a></li>
					<li><a href="elements.html#blockquotes-style">2 Block Qoutes</a></li>
					<li><a href="elements.html#highlightedtext">HighLighted Text</a></li>
					<li><a href="elements.html#buttons-style">6 Buttons Sets</a></li>
					<li><a href="elements.html#list-styles">List Styles</a></li>
					<li><a href="elements.html#alertboxes">Alert Boxes</a></li>
					<li><a href="elements.html#dropcap">Dropcap Variations</a></li>
					<li><a href="elements.html#socialicons">Social Icons</a></li>
					<li><a href="elements.html#alignedimages">Aligned Images</a></li>
					<li><a href="elements.html#progressbars">2 Progress Bars</a></li>
					<li><a href="elements.html#pricetable">Price Tables</a></li>
					<li><a href="elements.html#columnsstyle">Columns Style</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<button class="responsive-donate">Donate Now</button>
</div><!--Responsive header-->
