
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>evasion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	    <script type="text/javascript">
	    	var baseDir = '<?php echo base_url(); ?>';
	    	// var cur_city_id = '';
	   	</script>
    </head>

    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            <!-- header-->
            <header class="main-header dark-header fs-header sticky">
                <div class="header-inner">
                    <div class="logo-holder">
                        <a href="<?php echo base_url();?>home"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></a>
                    </div>
                    <div class="header-search vis-header-search">
                        <div class="header-search-input-item">
                            <input type="text" placeholder="Keywords" value=""/>
                        </div>
                        <div class="header-search-select-item">
                            <select data-placeholder="All Categories" class="chosen-select" >
                                <option>All Categories</option>
                                <option>Companies</option>
                                <option>Shops</option>
                                <option>Hotels</option>
                                <option>Restaurants</option>
                                <option>Fitness</option>
                                <option>Events</option>
                            </select>
                        </div>
                        <button class="header-search-button" onclick="window.location.href='listing.html'">Search</button>
                    </div>
                    <div class="show-search-button"><i class="fa fa-search"></i> <span>Search</span></div>
                    <a href="dashboard-add-listing.html" class="add-list">Report Company <span><i class="fa fa-plus"></i></span></a>
                    <div class="show-reg-form modal-open"><i class="fas fa-sign-in-alt"></i>Sign In</div>
                    <!-- nav-button-wrap-->
                    <div class="nav-button-wrap color-bg">
                        <div class="nav-button">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <!-- nav-button-wrap end-->
                    <!--  navigation -->
                <div class="nav-holder main-menu">
                  <nav>
                    <ul>
                      <li><a href="<?php echo base_url();?>home" >Home </i></a></li>
                      <li><a href="<?php echo base_url();?>about_us">About Us</i></a></li>
                      <li><a href="<?php echo base_url();?>how_it_works">How it Works</a></li>
                      <li><a href="<?php echo base_url();?>career">Career </a></li>
                      <li><a href="<?php echo base_url();?>contact"> Contact </a></li>
                    </ul>
                  </nav>
                </div>
                    <!-- navigation  end -->
                </div>
            </header>
            <!--  header end -->
            <!-- wrapper -->
