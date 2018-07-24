<div class="top-image">
	<img src="<?php echo base_url();?>assets/images/single-page-top2.jpg" alt="" />
</div><!-- Page Top Image -->

<section class="inner-page">
	<div class="container">
		<div class="row">
			<div class="left-content col-md-9">

				<div class="post">
			<?php foreach ($project as $row):?>
					<div class="causes-single">
						<div class="tab-content" id="myTabContent">
							<div id="cause1" class="tab-pane fade in active">
								<img src="<?php echo base_url();?>assets/images/<?php echo $row->project_image;?>" alt="" />
							</div>
							<div id="cause2" class="tab-pane fade in">
								<img src="<?php echo base_url();?>uploads/<?php echo $row->project_image;?>" alt="" />
							</div>
							<div id="cause3" class="tab-pane fade in">
								<img src="<?php echo base_url();?>uploads/<?php echo $row->project_image;?>" alt="" />
							</div>
						</div>

						<ul class="nav nav-tabs" id="myTab">
							<li class="active"><a data-toggle="tab" href="#cause1"><img src="<?php echo base_url();?>assets/images/gallery1.jpg" alt="" /></a></li>
							<li><a data-toggle="tab" href="#cause2"><img src="<?php echo base_url();?>assets/images/gallery2.jpg" alt="" /></a></li>
							<li><a data-toggle="tab" href="#cause3"><img src="<?php echo base_url();?>assets/images/gallery3.jpg" alt="" /></a></li>
						</ul>
					</div>

					<div class="cause-bar">
						<div class="cause-box"><h3><span>$</span><?php echo $row->neededmoney;?></h3><i>NEEDED DONATION</i></div>
						<div class="cause-progress">
								<div class="progress-report">
								<h6>PHASES</h6>
								<span>67%</span>
								<div class="progress pattern">
									<div class="progress-bar" style="width: 67%"></div>
								</div>
							</div>
						</div>
						<div class="cause-box"><h3><span>$</span><?php echo $row->collectedmoney;?></h3><i>COLLECTED DONATION</i></div>
						<div class="cause-box donate-drop-btn"><h4>DONATE NOW</h4></div>
					</div>
					<div class="donate-drop-down">
						<div class="amount-btns">
								<a style="cursor:pointer;" onclick="document.getElementById('textfield').value='$500';">$500</a>
								<a style="cursor:pointer;" onclick="document.getElementById('textfield').value='$1000';">$1000</a>
								<a style="cursor:pointer;" onclick="document.getElementById('textfield').value='$1500';">$1500</a>
								<a style="cursor:pointer;" onclick="document.getElementById('textfield').value='$2000';">$2000</a>
								<a style="cursor:pointer;" onclick="document.getElementById('textfield').value='$2500';">$2500</a>
						</div>
						<div class="other-amount">
							<input type="text" id="textfield" value="ENTER YOUR AMOUNT PLEASE">
							<a href="" title="">DONATE NOW</a>
						</div>
					</div>

					<span class="category">In <a href="#" title="">Home</a>, <a href="#" title="">Blog</a>, <a href="#" title="">Charity</a></span><!-- Categories -->
					<h1><?php echo $row->project_title;?></h1>
					<ul class="post-meta">
						<li><a href="" title=""><i class="icon-calendar-empty"></i><span><?php echo $row->project_startdate;?></span>&emsp;<?php echo $row->project_starttime;?></a></li>
						<li><a href="" title=""><i></i>To 	<span><?php echo $row->project_enddate;?></span>&emsp;<?php echo $row->project_endtime;?></a></li>
						<li><a href="" title=""><i class="icon-user"></i><?php echo $row->project_author;?></a></li>
						<li><a href="" title=""><i class="icon-map-marker"></i><?php echo $row->project_location;?></a></li>
						<li>
							<p><span>$</span> 85920</p>
							<span>Needed Donation</span>
						</li>

					</ul>
					<div class="post-desc">
						<p><?php echo $row->project_article;?></p>
					</div>
					<blockquote><?php echo $row->project_blockquote;?></blockquote>
					<p><?php echo $row->project_article2;?></p>
				<?php endforeach; ?>
				</div>
				</div>

			<div class="sidebar col-md-3 pull-right">
				<div class="sidebar-widget">
					<div class="sidebar-search">
						<input class="search" type="text" placeholder="Enter Search Item" />
						<input class="search-button" type="submit" value="" />
					</div>
				</div><!-- Sidebar Search -->
			<?php foreach ($projectlist as $row):?>
				<div class="sidebar-widget">
					<ul class="sidebar-list">
						<li><a href="#" title=""><?php echo $row->project_title;?></a> </li>
						<p style="float:right;"><?php echo $row->project_startdate;?></p>
					</ul>
				</div><!-- Category List -->
    <?php endforeach; ?>

				<div class="sidebar-widget">
					<div class="sidebar-title">
						<h4>Recent <span>Events</span></h4>
					</div>
				</div><!-- Recent Events -->
				<div class="sidebar-widget">
					<div class="sidebar-title">
						<h4>Donate <span>Us</span></h4>
					</div>
					<div class="donate-us">
						<h3>Give Your Donations</h3>
						<span><i class="icon-phone"></i>1 (123) 12345678</span>
						<div class="collected">
							<p>Collected Donations</p>
							<span><strong>$</strong> 7,089,7!</span>
						</div>
						<div class="d-now">
							<a title="" class="donate-btn" href="">Donate Now</a>
						</div>
					</div>
				</div><!--Donate Us -->
				<div class="sidebar-widget">
					<div class="sidebar-title">
						<h4>Video <span>Widget</span></h4>
					</div>
					<div class="sidebar-video">
						<img src="<?php echo base_url();?>assets/images/sidebar-video.jpg" alt="" />
						<h6>Quisque Sit Amet Unte</h6>
						<span><a class="html5lightbox" href="http://player.vimeo.com/video/31943945?color=ffffff" title="This Is a Demo Video"><i class="icon-play"></i></a></span>
					</div>
				</div><!-- Video Widget -->

			</div>
		</div>
	</div>
</section>
</div>
