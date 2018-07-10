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
                          <h4>Edit Claim</h4>
                        </div>
                        <div class="alert alert-danger block-inner" style="display: none;" id="div_sermon_error">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                                                  Error
                            </div>
                                          <!--Success Message div-->
                              <div class="alert alert-success block-inner" style="display: none;" id="div_sermon_success">
                                  <button type="button" class="close" data-dismiss="alert">×</button>	Success
                              </div>

                            </div>
                            <!-- profile-edit-container-->
                            <?php foreach($mylisting1 as $row):?>
                              <form class="custom-form"role="form" name="mylisting" id="mylisting" method="post" action="<?php echo base_url();?>user/home/update_mylisting/<?php echo $row->no;?>" enctype="multipart/form-data">

                            <!-- profile-edit-container end-->
                            <!-- profile-edit-container-->
                      <div class="profile-edit-container add-list-container">
                          <div class="profile-edit-header fl-wrap"  style="padding-top:20px">
                              <h4>Location / Contacts</h4>
                          </div>
                                  <div class="custom-form">
                                    <div class="custom-form">
                                        <label> Name of the Company in Question</label>
                                        <input type="text" placeholder="Name of the business" value="<?php echo $row->business_name;?>" id="business_name" name="business_name"/>
                                    </div>
                                    <label>Business Registration Number of the company in Question</label>
                                    <input type="text" placeholder="Reg Number" value="<?php echo $row->business_regnumber;?>" name="business_regnumber" id="business_regnumber"/>
                                    <label>Business Registration Date of the company in Question</label>
                                    <input type="date" placeholder="Reg Date" value="<?php echo $row->business_regdate;?>" name="business_regdate" id="business_regdate"/>
                                    <label>Kenya Revenue Authority pin of the Business in Question</label>
                                    <input type="text" placeholder="KRA Pin" value="<?php echo $row->business_krapin;?>" name="business_krapin" id="business_krapin"/>
                          <div class="profile-edit-header fl-wrap">
                              <h4>Contacts</h4>
                          </div>
                                    <label>Phone Number</label>
                                    <input type="text" placeholder="Phone Number" value="<?php echo $row->business_phonenumber;?>" name="business_phonenumber" id="business_phonenumber"/>
                                    <label>Email</label>
                                    <input type="email" placeholder="Email" value="<?php echo $row->business_email;?>" name="business_email" id="business_email"/>
                                    <label>Fax</label>
                                    <input type="text" placeholder="Fax" value="<?php echo $row->business_fax;?>" name="business_fax" id="business_fax"/>

                          <div class="profile-edit-header fl-wrap">
                              <h4>Payment Details</h4>
                          </div>

                                    <label>Payment Terms</label>
                                    <input type="text" placeholder="Terms of Payment" value="<?php echo $row->business_website;?>" name="business_website" id="business_website"/>
                                    <label>Date the Product / Service was procured</label>
                                    <input type="text" placeholder="procurement date" value="<?php echo $row->procurement_date;?>" name="procurement_date" id="procurement_date"/>
                                    <label>Overdue time of the invoice</label>
                                    <input type="date" placeholder="Overdue date" value="<?php echo $row->invoice_overduedate;?>" name="invoice_overduedate" id="invoice_overduedate"/>
                                    <label>Amount of the Invoice</label>
                                    <input type="text" placeholder="Invoice Amount" value="<?php echo $row->invoice_amount;?>" name="invoice_amount" id="invoice_amount"/>
                                    <label>Product / Service Description</label>
                                    <input type="text" placeholder="Product Description" value="<?php echo $row->product_description;?>" name="product_description" id="product_description"/>
                                    <label>Measures taken to recover the debt</label>
                                    <input type="text" placeholder="Measures Taken" value="<?php echo $row->measures_debtrecovery;?>" name="measures_debtrecovery" id="measures_debtrecovery"/>
                                    <label>Any Other Additional Information</label>
                                    <input type="text" placeholder="Additional Info" value="<?php echo $row->more_information;?>" name="more_information" id="more_information"/>
                                  </div>
                                </div>
                                 <button class="btn  big-btn  color-bg flat-btn" id="submit">Save<i class="fa fa-save"></i></button>
                              </form>
                            <?php endforeach;?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
