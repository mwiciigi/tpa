<div class="top-image">
	<img src="<?php echo base_url();?>assets/images/single-page-top3.jpg" alt="" />
</div><!-- Page Top Image -->

<section class="inner-page">
	<div class="container">
		<div class="page-title">
			<h1>About <span>Us</span></h1>
		</div><!-- Page Title -->
		<div class="row">
			<div class="left-content col-md-9">
				<ul class="search-tabs nav nav-tabs" id="myTab">
					<li class="active"><a data-toggle="tab" href="#all">About Us</a></li>
					<li class=""><a data-toggle="tab" href="#objective">Objectives</a></li>
					<li class=""><a data-toggle="tab" href="#mission">Mission</a></li>
					<li class=""><a data-toggle="tab" href="#vision">Vision</a></li>
				</ul><!-- Selectors -->
				<div class="tab-content" id="myTabContent">
					<div id="all" class="tab-pane fade active in">
						<div class="search-result">
					<?php foreach ($aboutus as $row):?>
							<div class="row">
								<div class="col-md-4">
									<a  class="search-image" href="#" title="">
									<img src="<?php echo base_url();?>uploads/<?php echo $row->about_image;?>" alt="" />
									</a>
								</div>
								<div class="col-md-8">
									<div class="search-detail">
										<h3>Teen Pregnancy Awareness<span> (TPA)</span></h3>
										<p><?php echo $row->aboutus_article;?></p>
									</div>
								</div>
							</div>
					<?php endforeach; ?>
						</div>
					</div><!-- All -->

          <!--Objective-->

          <div id="objective" class="tab-pane fade in">
           <div class="search-result">
					<?php foreach ($objectives as $row):?>
             <div class="row">
               <div class="col-md-4">
                 <a  class="search-image" href="#" title="">
              <img src="<?php echo base_url();?>uploads/<?php echo $row->objective_image;?>" alt="" />
                 </a>
               </div>
               <div class="col-md-8">
                 <div class="search-detail">
                   <h3>Our Objectives at <span> TPA</span></h3>
                  <ol>
                    <li><?php echo $row->objective_list;?></li>
                    <li><?php echo $row->objective_list2;?></li>
                    <li><?php echo $row->objective_list3;?></li>
                    <li><?php echo $row->objective_list4;?></li>
                  </ol>

                 </div>
               </div>
             </div>
					<?php endforeach; ?>
           </div>
         </div><!-- Blog -->
         <div id="gallery" class="tab-pane fade in">
         </div><!-- Gallery -->

         <!--Mission-->
          <div id="mission" class="tab-pane fade in">
						<div class="search-result">
					<?php foreach ($mission as $row):?>
							<div class="row">
								<div class="col-md-4">
									<a  class="search-image" href="#" title="">
										<img src="<?php echo base_url();?>uploads/<?php echo $row->mission_image;?>" alt="" />
									</a>
								</div>
								<div class="col-md-8">
									<div class="search-detail">
									<h3> Our <span> MISSION: </span></h3>
										<p> <?php echo $row->mission_article;?>
                   </div>
								</div>
							</div>
					<?php endforeach;?>
						</div>
					</div><!-- mission -->
					<div id="gallery" class="tab-pane fade in">
					</div><!-- Gallery -->

          <!---->
           <div id="vision" class="tab-pane fade in">
             <div class="search-result">
          <?php foreach ($vision as $row):?>
               <div class="row">
                 <div class="col-md-4">
                   <a  class="search-image" href="#" title="">
                     <img src="<?php echo base_url();?>uploads/<?php echo $row->vision_image;?>" alt="" />
                   </a>
                 </div>
                 <div class="col-md-8">
                   <div class="search-detail">
                     <h3> Our <span> Vision: </span></h3>
                     <p><?php echo $row->vision_article;?></p>
                   </div>
                 </div>
               </div>
						<?php endforeach; ?>
             </div>
           </div><!-- mission -->
           <div id="gallery" class="tab-pane fade in">
           </div><!-- Gallery -->
				</div>
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
