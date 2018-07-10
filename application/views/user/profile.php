                  <div id="wrapper">
                    <div class="content">
                      <section id="sec1">
                        <div class="container">
                          <div class="profile-edit-wrap">
                            <div class="profile-edit-page-header">
                              <div>
                              <img  src="<?php echo base_url();?>assets/images/avatar/4.jpg" style=" border-radius: 100%;float:right;padding-left:20px" width="70px" alt=""></div>


                                  <div class="breadcrumbs" style="float:left"><a href="<?php echo base_url();?>user/dashboard">Dashboard</a><a href="<?php echo base_url();?>user/profile">Profile</a><a href="<?php echo base_url();?>user/home/editprofile">Edit Profile</a> </div>
                                </div>
                                      <div class="row">
                                        <div class="col-md-3">
                                          <div class="fixed-bar fl-wrap">
                                            <div class="user-profile-menu-wrap fl-wrap">
                                              <!-- user-profile-menu-->
                                                <div class="user-profile-menu">
                                                  <h3>Main</h3>
                                                    <ul>
                                                      <li><a href="<?php echo base_url();?>user/dashboard" class="user-profile-act"><i class="fa fa-gears"></i>Dashboard</a></li>
                                                      <li><a href="<?php echo base_url();?>user/addnew"><i class="fa fa-plus-square"></i> Add New</a></li>
                                                      <li><a href="<?php echo base_url();?>user/mylisting"><i class="fa fa-th-list"></i> My listigs  </a></li>

                                                        <li><a href="<?php echo base_url();?>user/messages"><i class="fa fa-envelope"></i> Messages <span>3</span></a></li>

                                                    </ul>
                                                      </div>
                                                      <!-- user-profile-menu end-->
                                                      <!-- user-profile-menu-->
                                                      <div class="user-profile-menu">
                                                          <h3>My Profile</h3>
                                                          <ul>
                                                              <li><a href="<?php echo base_url();?>user/profile"><i class="fa fa-user"></i> Profile</a></li>
                                                              <li><a href="<?php echo base_url();?>user/resetmypassword"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                                                              <!--<li><a href="<?php echo base_url();?>user/bookings"> <i class="fa fa-calendar-check"></i> Bookings <span>2</span></a></li>-->
                                                              <li><a href="<?php echo base_url();?>user/reviews"><i class="fa fa-comments"></i> Reviews </a></li>

                                                          </ul>
                                                      </div>
                                                      <!-- user-profile-menu end-->
                                                      <a href="#" class="log-out-btn">Log Out</a>
                                                  </div>
                                              </div>
                                          </div>


                                        <div class="col-md-9" style="border: 1px solid gray">

                                          <div style="background-color:#eee; padding-top:10px;padding-bottom:70px">
                                            <div style="float:left; padding:20px; font-size:17px;font-weight:bold">
                                              <h4>My Profile</h4>
                                            </div>
                                              <a href="<?php echo base_url('user/home/editprofile');?>">
                                                <button class="btn  big-btn  color-bg flat-btn" style="float:right">Edit Profile<i class="fa fa-plus"></i>
                                                </button>
                                              </a>
                                            </div>
                                            <div style="padding:20px">
                                            <hr/>
                                          </div>
                                           <div class="row" style="text-align:left">
                                            <?php foreach($myprofile as $row):?>

                                                <div class="col-md-6">
                                                  <div style="padding-bottom:20px;font-size:20px;font-weight:bold">

                                                    <h1> My Profile</h1>

                                                </div>
                                                <div class="col-md-6" style="float:left">
                                                  <img  src="<?php echo base_url();?>assets/images/user1.jpg" width="190px" alt="">
                                                </div>
                                                <div>

                                                  <div>

                                                </div>

                                                  <div><i class="fa fa-user"></i> <span> <?php echo $row->profile_first_name;?> <?php echo $row->profile_last_name;?></span></div>
                                                  <br>
                                                  <div> <i class="fa fa-envelope"></i>  <?php echo $row->profile_email;?></div>
                                                  <br>
                                                  <div><i class="fa fa-phone"></i> <?php echo $row->profile_phone;?>
                                                  </div>
                                                  <br>
                                                  <div> <i class="fa fa-globe"></i> <?php echo $row->profile_website;?></div>
                                                  <br>
                                                  <div> <i class="fa fa-globe"></i> <?php echo $row->profile_website;?></div>
                                                  <br>

                                                  <div> <i class="fa fa-globe"></i> <?php echo $row->profile_website;?></div>
                                                  <br>
                                                  <p>
                                                    <div style="padding-bottom:20px"><hr/><hr/></div>
                                                    <h2><strong> My Bio</strong></h2><p><?php echo $row->profile_bio;?></p>

                                                </div>
                                              </div>

                                              <div class="col-md-6">
                                                <div style="padding-bottom:20px;font-size:20px;font-weight:bold">

                                                  <h1> Company Profile</h1>

                                              </div>
                                              <div class="col-md-6" style="float:left">
                                                  <img  src="<?php echo base_url();?>assets/images/logo22.png" width="180px" alt="">
                                                </div>

                                                <div> <h1>Company Profile:</h1>
                                                  <div><i class="fa fa-user"></i> Companies Name:</div>
                                                  <p> <?php echo $row->profile_first_name;?> <?php echo $row->profile_last_name;?></p>

                                                  <div> <i class="fa fa-envelope"></i> Company's Regestration Number: </div>
                                                  <p><?php echo $row->profile_email;?></p>

                                                  <div><i class="fa fa-phone"></i> Date of registration :
                                                  </div>
                                                  <p><?php echo $row->profile_phone;?></p>

                                                  <div> <i class="fa fa-globe"></i> Website : <?php echo $row->profile_website;?></div>

                                                  <p>
                                                    <div style="padding-bottom:20px"><hr/><hr/></div>
                                                    <h2><strong> Company Description</strong></h2><p><?php echo $row->profile_bio;?></p>

                                                </div>
                                              </div>








                                                    <?php endforeach;?>
                                                  </div>


                                    </div>

                                </div>
                            </div>
                            <!--profile-edit-wrap end -->
                        </div>
                        <!--container end -->
                    </section>
