<div id="wrapper">
  <div class="content">
    <section id="sec1">
      <div class="container">
        <div class="profile-edit-wrap">
          <div class="profile-edit-page-header">
            <h2>Add New Listing / Claim</h2>
            <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dasboard</a><span>Add Listing</span></div>
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
                            <li><a href="<?php echo base_url();?>user/addnew"><i class="fa fa-plus-square"></i> My Listings</a></li>
                              <li><a href="<?php echo base_url();?>user/messages"><i class="fa fa-envelope"></i> Messages <span>3</span></a></li>
                            </ul>
                          </div>

                            <div class="user-profile-menu">
                                <h3>My Profile</h3>
                                <ul>
                                    <li><a href="<?php echo base_url();?>user/profile"><i class="fa fa-user"></i> Edit profile</a></li>
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
                          <div class="col-md-9">
                            <div style="background-color:#eee; padding-top:10px;padding-bottom:70px">
                              <div style="float:left; padding:20px; font-size:17px;font-weight:bold">
                                <h4>List of your claims</h4>
                              </div>

                                <a href="<?php echo base_url('user/home/add_mylisting');?>">
                                  <button class="btn  big-btn  color-bg flat-btn" style="float:right">Add Claim<i class="fa fa-plus"></i>
                                  </button>
                                </a>
                              </div>
                              <div style="padding:20px">
                              <hr/>
                            </div>
                          <div class="alert alert-danger block-inner" style="display: none;" id="div_mylist_error">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            Error
                          </div>
                        <!--Success Message div-->
                          <div class="alert alert-success block-inner" style="display: none;" id="div_mylist_success">
                            <button type="button" class="close" data-dismiss="alert">×</button>	Success
                          </div>
                        <!-- profile-edit-container-->

                            <form class="custom-form"role="form" name="mylisting" id="mylisting" method="post" action="" enctype="multipart/form-data">
                              <div class="profile-edit-container add-list-container">
                                  <table id="customers">
                                    <tr>
                                    <th>No</th>
                                    <th>Business Name</th>
                                    <th>Reg.No</th>
                                    <th>Reg Date</th>
                                    <th>KRA Pin</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Fax</th>
                                    <th>Action</th>

                                    <!--<th>Phone</th>
                                    <th>Email</th>
                                    <th>Fax</th>
                                    <th>Website</th>
                                    <th>Procurement Date</th>
                                    <th>Overdue Date</th>
                                    <th>Invoice Amount</th>
                                    <th>Product Description</th>
                                    <th>Recovery Measures</th>
                                    <th>More Info</th>
                                    <th class="task-tools text-center">Tools</th>-->
                                    </tr>
                                <?php foreach($mylisting as $row):?>
                                    <tr>
                                    <td><?php echo $row->no;?></td>
                                    <td><?php echo $row->business_name;?></td>
                                    <td><?php echo $row->business_regnumber;?></td>
                                    <td><?php echo $row->business_regdate;?></td>
                                    <td><?php echo $row->business_krapin;?></td>
                                    <td><?php echo $row->business_phonenumber;?></td>
                                    <td><?php echo $row->business_email;?></td>
                                    <td><?php echo $row->business_fax;?></td>
                                    <td><ul>
                                    <li><a href="<?php echo base_url('user/home/edit_mylisting/'.$row->no);?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></li>
                                    <li><a href="<?php echo base_url('user/home/delete_mylisting/'.$row->no);?>"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                    </ul>
                                    </td>
                                    <!--<td><?php echo $row->business_phonenumber;?></td>
                                    <td><?php echo $row->business_email;?></td>
                                    <td><?php echo $row->business_fax;?></td>
                                    <td><?php echo $row->business_website;?></td>
                                    <td><?php echo $row->procurement_date;?></td>
                                    <td><?php echo $row->invoice_overduedate;?></td>
                                    <td><?php echo $row->invoice_amount;?></td>
                                    <td><?php echo $row->product_description;?></td>
                                    <td><?php echo $row->measures_debtrecovery;?></td>
                                    <td><?php echo $row->more_information;?></td>-->
                                    </tr>
                                  <?php endforeach;?>
                                  </table>
                                </form>
                            </div>
                          </div>

                        </div>
                      </div>
                    </section>
                  </div>
                </div>
