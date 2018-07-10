<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>M-CHurch</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<!-- stylesheets -->
		<link rel="stylesheet" type="text/css" href="assets/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
		<link id="color" rel="stylesheet" type="text/css" href="assets/css/colors/blue.css" />
		<!-- scripts (jquery) -->
		<script src="assets/scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
		<!--[if IE]><script language="javascript" type="text/javascript" src="assets/scripts/excanvas.min.js"></script><![endif]-->
		<script src="assets/scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
		<script src="assets/scripts/jquery.ui.selectmenu.js" type="text/javascript"></script>
		<script src="assets/scripts/jquery.flot.min.js" type="text/javascript"></script>
		<script src="assets/scripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
		<script src="assets/scripts/tiny_mce/jquery.tinymce.js" type="text/javascript"></script>
		<!-- scripts (custom) -->
		<script src="assets/scripts/smooth.js" type="text/javascript"></script>
		<script src="assets/scripts/smooth.menu.js" type="text/javascript"></script>
		<script src="assets/scripts/smooth.chart.js" type="text/javascript"></script>
		<script src="assets/scripts/smooth.table.js" type="text/javascript"></script>
		<script src="assets/scripts/smooth.form.js" type="text/javascript"></script>
		<script src="assets/scripts/smooth.dialog.js" type="text/javascript"></script>
		<script src="assets/scripts/smooth.autocomplete.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				style_path = "resources/css/colors";

				$("#date-picker").datepicker();

				$("#box-tabs, #box-left-tabs").tabs();
			});
		</script>
	</head>
	<body>
		<div id="colors-switcher" class="color">
			<a href="" class="blue" title="Blue"></a>
		</div>
		<!-- dialogs -->
		<div id="dialog" title="Basic Dialog">
			<p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
		</div>
		<div id="dialog-modal" title="Basic Modal Dialog">
			<p>Adding the modal overlay screen makes the dialog look more prominent because it dims out the page content.</p>
		</div>
		<div id="dialog-message" title="Download Complete">
			<p><span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>Your files have downloaded successfully into the My Downloads folder.</p>
			<p>Currently using <b>36% of your storage space</b>.</p>
		</div>
		<div id="dialog-confirm" title="Empty the Recycle Bin?">
			<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>These items will be permanently deleted and cannot be recovered. Are you sure?</p>
		</div>
		<div id="dialog-form" title="Create new user">
			<p>All form fields are required.</p>
			<form action="" method="post">
			<div class="form">
				<div class="fields">
					<div class="field field-first">
						<div class="label">
							<label for="input">Name:</label>
						</div>
						<div class="input">
							<input type="text" id="user-name" name="user.name" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="autocomplete">Auto Complete:</label>
						</div>
						<div class="input">
							<input type="text" id="autocomplete-dialog" name="input.autocomplete" value="start typing for example: java" class="focus autocomplete" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="date">Date Picker:</label>
						</div>
						<div class="input input-date">
							<input type="text" id="date-dialog" name="input.date" class="date" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input">Email:</label>
						</div>
						<div class="input">
							<input type="text" id="user-email" name="user.email" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input">Password:</label>
						</div>
						<div class="input">
							<input type="text" id="user-password" name="user.password" />
						</div>
					</div>
				</div>
			</div>
			</form>
		</div>
		<!-- end dialogs -->
		<!-- header -->
		<div id="header">
			<!-- logo -->
			<div id="logo">
				<h1><a href="" title="Smooth Admin"><img src="assets/images/logo13.png" alt="Smooth Admin" /></a></h1>
			</div>
			<!-- end logo -->
			<!-- user -->
			<ul id="user">
				<li class="first"><a href="">Account</a></li>
				<li><a href="">Messages (0)</a></li>
				<li><a href="">Logout</a></li>
				<li class="highlight last"><a href="">View Site</a></li>
			</ul>
			<!-- end user -->
      <div id="header-inner">
				<div id="home">
					<a href="" title="Home"></a>
				</div>
				<!-- quick -->
				<ul id="quick">
					<li>
						<a href="#" title="Products"><span class="normal">Examples</span></a>
						<ul>
							<li><a href="index.html">Full, Column</a></li>
							<li><a href="index-no-column.html">Full, No Column</a></li>
							<li><a href="index-fixed.html">Fixed, Column</a></li>
							<li class="last"><a href="index-fixed-no-column.html">Fixed, No Column</a></li>
						</ul>
					</li>
					<li>
						<a href="#" title="Products"><span class="icon"><img src="resources/images/icons/application_double.png" alt="Products" /></span><span>Update information</span></a>
						<ul>
							<li><a href="#">Today's Verse</a></li>
							<li><a href="#">Sermon</a></li>
							<li>
								<a href="#" class="childs">Blog</a>
								<ul>
									<li><a href="">Today</a></li>
									<li><a href="">Yesterday</a></li>
									<li class="last">
										<a href="#" class="childs">Archive</a>
										<ul>
											<li><a href="">Last Week</a></li>
											<li class="last"><a href="">Last Month</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="last">
								<a href="#" class="childs">Offers</a>
								<ul>
									<li><a href="">Coupon Codes</a></li>
									<li class="last"><a href="">Rebates</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="" title="Events"><span class="icon"><img src="resources/images/icons/calendar.png" alt="Events" /></span><span>Events</span></a>
						<ul>
							<li><a href="#">Manage Events</a></li>
							<li class="last"><a href="#">New Event</a></li>
						</ul>
					</li>
					<li>
						<a href="" title="Pages"><span class="icon"><img src="resources/images/icons/page_white_copy.png" alt="Pages" /></span><span>Pages</span></a>
						<ul>
							<li><a href="#">Today's Verse</a></li>
							<li><a href="#">Sermon</a></li>
							<li class="last">
								<a href="#" class="childs">Blog</a>
								<ul>
									<li><a href="#">How to Add a New Page</a></li>
									<li class="last"><a href="#">How to Add a New Page</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="" title="Links"><span class="icon"><img src="resources/images/icons/world_link.png" alt="Links" /></span><span>Links</span></a>
						<ul>
							<li><a href="#">Manage Links</a></li>
							<li class="last"><a href="#">Add Link</a></li>
						</ul>
					</li>
					<li>
						<a href="" title="Settings"><span class="icon"><img src="resources/images/icons/cog.png" alt="Settings" /></span><span>Settings</span></a>
						<ul>
							<li><a href="#">Manage Settings</a></li>
							<li class="last"><a href="#">New Setting</a></li>
						</ul>
					</li>
				</ul>
				<!-- end quick -->
				<div class="corner tl"></div>
				<div class="corner tr"></div>
			</div>
		</div>
		<!-- end header -->
		<!-- content -->
		<div id="content">
			<!-- end content / left -->
			<div id="left">
				<div id="menu">
					<h6 id="h-menu-products" class="selected"><a href="#products"><span>Edit</span></a></h6>
					<ul id="menu-products" class="opened">
						<li><a href="">Today's Verse</a></li>
						<li class="selected"><a href="">News &amp; Events</a></li>

					</ul>

				</div>
				<div id="date-picker"></div>
			</div>
			<!-- end content / left -->
