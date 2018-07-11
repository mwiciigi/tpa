
<div class="top-image">

</div><!-- Page Top Image -->


<section class="inner-page">
	<div class="container">
		<div class="page-title">
			<h1>Latest <span>Blog</span></h1>
		</div><!-- Page Title -->
		<div class="row">
			<div class="left-content col-md-9">
				<div class="blog-post">
					<?php foreach ($pagetitle as $row): ?>
					<h2><a href="single-post-image.html" title=""><?php echo $row->title; ?></a></h2>
					<a class="blog-post-img" href="single-post-image.html" title=""><img src="<?php echo base_url(); ?>uploads/<?php echo $row->image; ?>" alt="" /></a>

					<div class="blog-post-details">
						<ul class="post-meta">
							<li><a href="" title=""><i class="icon-calendar-empty"></i><span><?php echo $row->createdat; ?></span></a></li>
							<li><a href="" title=""><i class="icon-share-alt"></i>Home / Blog</a></li>
							<li><a href="" title=""><i class="icon-map-marker"></i><?php echo $row->location; ?></a></li>
						</ul>
						<div class="post-desc">
							<div class="image-lists">
								<ul>
									<li><a href="<?php echo base_url();?>assets/images/blank-image.jpg" class="html5lightbox" title=""><img src="<?php echo base_url(); ?>uploads/<?php echo $row->image; ?>" alt="" /></a></li>
									<li><a href="<?php echo base_url();?>assets/images/blank-image.jpg" class="html5lightbox" title=""><img src="<?php echo base_url(); ?>uploads/<?php echo $row->image; ?>" alt="" /></a></li>
								</ul>
							</div>
							<p><?php echo $row->article; ?></p>
						</div>
					</div>
        <?php endforeach; ?>
				</div><!-- Blog Post With Image -->
				<div class="blog-post">
					<?php foreach ($blogpostwithimage as $row): ?>
					<h2><a href="single-post-slider.html" title=""><?php echo $row->title; ?></a></h2>
					<div id="layerslider-container-fw">
						<div id="layerslider" style="width: 100%; height: 325px; margin: 0px auto; ">

							<div class="ls-layer" style="transition2d: 5; slidedelay: 8000;" >
								<img src="<?php echo base_url(); ?>uploads/<?php echo $row->image; ?>" class="ls-bg" alt="Slide background">
							</div><!-- Slide1 -->

							<div class="ls-layer" style="transition2d: 77; slidedelay: 8000;" >
								<img src="<?php echo base_url(); ?>uploads/<?php echo $row->image; ?>" class="ls-bg" alt="Slide background">
							</div><!-- Slide2 -->
						</div>

					</div><!-- Layer Slider -->
				<?php endforeach; ?>

					<div class="blog-post-details">
						<?php foreach ($layerslier as $row): ?>
						<ul class="post-meta">
							<li><a href="" title=""><i class="icon-calendar-empty"></i><span><?php echo $row->createdat; ?></span></a></li>
							<li><a href="" title=""><i class="icon-share-alt"></i>Home / Blog</a></li>
							<li><a href="" title=""><i class="icon-map-marker"></i><?php echo $row->location; ?></a></li>
						</ul>
						<div class="post-desc">
							<div class="image-lists">
								<ul>
									<li><a href="<?php echo base_url();?>assets/images/blank-image.jpg" class="html5lightbox" title=""><img src="<?php echo base_url(); ?>uploads/<?php echo $row->image; ?>" alt="" /></a></li>
									<li><a href="<?php echo base_url();?>assets/images/blank-image.jpg" class="html5lightbox" title=""><img src="<?php echo base_url(); ?>uploads/<?php echo $row->image; ?>" alt="" /></a></li>
								</ul>
							</div>
							<p>><?php echo $row->article; ?></p>
						</div>
						<?php endforeach; ?>
					</div>

				</div><!-- Blog Post With Slider -->

				<div class="blog-post">
					<?php foreach ($blogpostwithslider as $row): ?>
					<h2><a href="single-post-video.html" title=""><?php echo $row->title; ?></a></h2>
					<div class="video-post">
						<img alt=""src="<?php echo base_url();?>assets/images/blog-post-ws-2.jpg">
						<a title="" href="#"><i class="icon-play"></i></a>
					</div>
					<div class="blog-post-details">
						<ul class="post-meta">
							<li><a href="" title=""><i class="icon-calendar-empty"></i><span><?php echo $row->createdat; ?></span></a></li>
							<li><a href="" title=""><i class="icon-share-alt"></i>Home / Blog</a></li>
							<li><a href="" title=""><i class="icon-map-marker"></i><?php echo $row->location; ?></a></li>
						</ul>
						<div class="post-desc">
							<div class="image-lists">
								<ul>
									<li><a href="<?php echo base_url();?>assets/images/blank-image.jpg" class="html5lightbox" title=""><img src="<?php echo base_url(); ?>uploads/<?php echo $row->image; ?>" alt="" /></a></li>
									<li><a href="<?php echo base_url();?>assets/images/blank-image.jpg" class="html5lightbox" title=""><img src="<?php echo base_url(); ?>uploads/<?php echo $row->image; ?>" alt="" /></a></li>
								</ul>
							</div>
							<p><?php echo $row->sliderarticle; ?></p>
						</div>
					</div>
					<?php endforeach; ?>
				</div><!-- Blog Post With Video -->

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
						<img src="<?php echo base_url(); ?>uploads/<?php echo $row->image; ?>" alt="" />
						<div class="popular-post-title">
							<h6><a href="#" title="">Quisque Sit Amet Unte</a></h6>
							<span>May 3,2013 / 02 comments</span>
						</div>
					</div>
					<div class="popular-post">
						<img src="<?php echo base_url(); ?>uploads/<?php echo $row->image; ?>" alt="" />
						<div class="popular-post-title">
							<h6><a href="#" title="">Quisque Sit Amet Unte</a></h6>
							<span>May 3,2013 / 02 comments</span>
						</div>
					</div>
				</div><!-- Popular Posts -->
				<div class="sidebar-widget">
					<div class="sidebar-title">
						<h4>Tags <span>Clouds</span></h4>
					</div>
					<div class="cloud-tags">
						<a href="#" title="">Uncategorized</a>
						<a href="#" title="">Susipit</a>
						<a href="#" title="">Diam</a>
						<a href="#" title="">Diam</a>
						<a href="#" title="">Susipit</a>
						<a href="#" title="">Diam</a>
						<a href="#" title="">Susipit</a>
						<a href="#" title="">Uncategorized</a>
						<a href="#" title="">Susipit</a>
					</div>
				</div><!-- Tag Clouds -->
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
