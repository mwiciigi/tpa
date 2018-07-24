<div class="top-image">
	<img src="<?php echo base_url();?>assets/images/single-page-top3.jpg" alt="" />
</div><!-- Page Top Image -->

<section class="inner-page">
	<div class="container">
		<div class="page-title">
			<h1>Latest <span>Blog</span></h1>
		</div><!-- Page Title -->
		<div class="row">
			<div class="left-content col-md-9">
			<?php foreach ($posts as $row):?>
				<div class="blog-post">
					<h2><a href="single-post-image.html" title=""><?php echo $row->blog_title;?></a></h2>
					<a class="blog-post-img" href="single-post-image.html" title=""><img src="<?php echo base_url();?>uploads/<?php echo $row->blog_image;?>" alt="" /></a>
					<div class="blog-post-details">
						<ul class="post-meta">
							<li><a href="" title=""><i class="icon-calendar-empty"></i><span><?php echo $row->blog_date;?></span> <?php echo $row->blog_time;?></a></li>
							<li><a href="" title=""><i class="icon-share-alt"></i>Home / Blog</a></li>
							<li><a href="" title=""><i class="icon-map-marker"></i><?php echo $row->blog_location;?></a></li>
						</ul>
						<div class="post-desc">
							<div class="image-lists">
								<ul>
									<li><a href="images/blank-image.jpg" class="html5lightbox" title=""><img src="<?php echo base_url();?>assets/images/<?php echo $row->blog_image1;?>" alt="" /></a></li>
									<li><a href="images/blank-image.jpg" class="html5lightbox" title=""><img src="<?php echo base_url();?>assets/images/<?php echo $row->blog_image2;?>" alt="" /></a></li>
								</ul>
							</div>
							<p><?php echo word_limiter($row->blog_content, 50);?><br/><strong><span>Read More</span></strong></p>
						</div>
					</div>
				</div><!-- Blog Post With Image -->
				<hr/><hr/>
			<?php endforeach;?>

				<div class="pagination-area">
					<ul class="pagination">
					  <li><a href="#">1</a></li>
					  <li><a href="#">2</a></li>
					  <li><a href="#">3</a></li>
					  <li><a href="#">4</a></li>
					  <li><a href="#">5</a></li>
					</ul>

					<div class="pagination-buttons">
						<a href="#" title=""><i class="icon-angle-left"></i></a>
						<a href="#" title=""><i class="icon-angle-right"></i></a>
					</div>

					<span>Page 1 of 10</span>
				</div><!-- Pagination -->


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
	</div>
</section>
</div>
