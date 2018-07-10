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
                                            <li><a href="<?php echo base_url();?>user/profile"><i class="fa fa-user"></i> profile</a></li>
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
                        <div class="col-md-7">
                          <div style="background-color:#eee; padding-top:10px;padding-bottom:70px">
                            <div style="float:left; padding:20px; font-size:17px;font-weight:bold">
                              <h4>Edit Profile</h4>
                            </div>
                            <a href="<?php echo base_url('user/home/profile');?>">
                              <button class="btn  big-btn  color-bg flat-btn" style="float:right">Back
                              </button>
                            </a>
                            </div>
                            <div style="padding:20px">
                            <hr/>
                          </div>

                              <?php foreach($myprofile as $row):?>
                                <div class="custom-form">
                                    <label> First Name </label>
                                    <input type="text" placeholder="AlisaNoory" value="<?php echo $row->profile_first_name;?>"/>
                                    <label> Last Name </label>
                                    <input type="text" placeholder="AlisaNoory" value="<?php echo $row->profile_last_name;?>"/>
                                    <label>Email Address </label>
                                    <input type="text" placeholder="AlisaNoory@domain.com" value="<?php echo $row->profile_email;?>"/>
                                    <label>Phone</label>
                                    <input type="text" placeholder="+7(123)987654" value="<?php echo $row->profile_phone;?>"/>
                                    <label> Notes</label>
                                    <textarea cols="30" rows="15" height="200px"  placeholder="+7(123)987654" value=""><?php echo $row->profile_bio;?></textarea>
                                </div>
                              <?php endforeach;?>
                            </div>
                            <!-- profile-edit-container end-->

            </div>
            <!--container end -->
        </section>

    </div>
</div>
