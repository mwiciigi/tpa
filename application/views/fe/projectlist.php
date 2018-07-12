<div class="top-image">
	<img src="<?php echo base_url();?>assets/images/single-page-top3.jpg" alt="" />
</div><!--Page Top Image-->

<section class="inner-page">
	<div class="container">
			<div class="page-title">
				<h1>Our <span>Projects</span></h1>
			</div><!--Page Title-->
			<div class="col-md-9">
			<div class="row">
		<?php foreach ($projectlist as $row): ?>
				<div class="col-md-4">
					<div class="story">

						<div class="story-img">
							<img src="<?php echo base_url();?>assets/images/<?php echo $row->project_image;?>" alt="" />
<!--kyalo
							<h5><?php echo $row->project_title;?></h5>
							<a href="<?php echo base_url();?>project" title=""><span></span></a>
						</div>
						<p><?php echo $row->project_article;?></p>
						<h6><i>Kes</i><?php echo $row->moneyspent;?><span>Money Spent</span></h6>
						<span><i class="icon-map-marker"></i><?php echo $row->project_location;?></span>-->

							</div>
							<h5 style="padding-bottom:10px"><a href="<?php echo base_url();?>home/readproject/<?php echo $row->project_id;?>"><?php echo $row->project_title;?></a></h5>

						<p><?php echo character_limiter($row->project_article, 200);?><span style="color: #a561d6;font-size:15px">Read More</span></p>
						<hr/>
						<h6><i>Ksh </i><strong><?php echo $row->moneyspent;?></strong><i><span>Money Spent</span></i></h6>
						<span><i class="fa fa-map-marker"></i><?php echo $row->project_location;?></span>

					</div><!--Story-->
				</div>
		<?php endforeach ?>
			</div>
			<div class="pagination-area">
				<ul class="pagination">
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				</ul>

				<div class="pagination-buttons">
					<a title="" href="#"><i class="icon-angle-left"></i></a>
					<a title="" href="#"><i class="icon-angle-right"></i></a>
				</div>

				<span>Page 1 of 10</span>
			</div><!--Pagination-->
		</div>
			<div class="sidebar col-md-3 pull-right">
				<div class="sidebar-widget">
					<div class="sidebar-search">
						<input class="search" type="text" placeholder="Enter Search Item" />
						<input class="search-button" type="submit" value="" />
					</div>
				</div><!-- Sidebar Search -->
				<div class="sidebar-widget">
					<div class="sidebar-title">
						<h4>Popular <span>Posts</span></h4>
					</div>
					<div class="popular-post">
						<img src="<?php echo base_url();?>assets/images/popular-post1.jpg" alt="" />
						<div class="popular-post-title">
							<h6><a href="#" title="">Quisque Sit Amet Unte</a></h6>
							<span>May 3,2013 / 02 comments</span>
						</div>
					</div>
					<div class="popular-post">
						<img src="<?php echo base_url();?>assets/images/popular-post2.jpg" alt="" />
						<div class="popular-post-title">
							<h6><a href="#" title="">Quisque Sit Amet Unte</a></h6>
							<span>May 3,2013 / 02 comments</span>
						</div>
					</div>
				</div><!-- Popular Posts -->
				<div class="sidebar-widget">
					<div class="sidebar-title">
						<h4>Category <span>List</span></h4>
					</div>
					<ul class="sidebar-list">
						<li><a href="#" title="">Blog (6)</a></li>
						<li><a href="#" title="">Colourful (5)</a></li>
						<li><a href="#" title="">Feature (2)</a></li>
						<li><a href="#" title="">Nature (7)</a></li>
						<li><a href="#" title="">Scenery(3)</a></li>
						<li><a href="#" title="">Uncategorized(1)</a></li>
					</ul>
				</div><!-- Category List -->

			</div><!-- Sidebar -->
	</div>

</section>
</div>
