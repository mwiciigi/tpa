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

                        <div class="col-md-6">
                          <div style="background-color:#eee; padding-top:10px;padding-bottom:70px;height: auto;">
                            <div style="float:left; padding:20px; font-size:17px;font-weight:bold"><h4>Add Details of the Claim</h4>
                            </div>
                            <div class="alert alert-success block-inner" style="display: none;float:right;padding:20px; color: green; font-size:17px;font-weight:bold" id="div_listing_success">       <button type="button" class="close" data-dismiss="alert">×</button>	Success</div>
                          </div>

                          <form class="custom-form" role="form" name="mylisting" id="mylisting" method="post" onsubmit="return save_mylisting();" enctype="multipart/form-data">

                            <!-- profile-edit-container-->
                              <div class="profile-edit-container add-list-container" style="padding-top:20px">

                                  <div class="custom-form">
                                    <div class="custom-form">
                                        <label> Name of the Company in Question</label>
                                        <input type="text" placeholder="Name of the business" value="" id="business_name" name="business_name"/>
                                    </div>
                                    <label>Business Registration Number of the company in Question</label>
                                    <input type="text" placeholder="Reg Number" value="" name="business_regnumber" id="business_regnumber"/>
                                    <label>Business Registration Date of the company in Question</label>
                                    <input type="text" placeholder="Reg Date" value="" name="business_regdate" id="business_regdate"/>
                                    <label>Kenya Revenue Authority pin of the Business in Question</label>
                                    <input type="text" placeholder="KRA Pin" value="" name="business_krapin" id="business_krapin"/>

                                  <div class="profile-edit-header fl-wrap">
                                      <h4>Contacts</h4>
                                  </div>

                                    <label>Phone Number</label>
                                    <input type="text" placeholder="Phone Number" value="" name="business_phonenumber" id="business_phonenumber"/>
                                    <label>Email</label>
                                    <input type="text" placeholder="Email" value="" name="business_email" id="business_email"/>
                                    <label>Fax</label>
                                    <input type="text" placeholder="Fax" value="" name="business_fax" id="business_fax"/>

                                  <div class="profile-edit-header fl-wrap">
                                      <h4>Payment Details</h4>
                                  </div>

                                    <label>Payment Terms</label>
                                    <input type="text" placeholder="Terms of Payment" value="" name="business_website" id="business_website"/>
                                    <label>Date the Product / Service was procured</label>
                                    <input type="text" placeholder="procurement date" value="" name="procurement_date" id="procurement_date"/>
                                    <label>Overdue time of the invoice</label>
                                    <input type="text" placeholder="Overdue date" value="" name="invoice_overduedate" id="invoice_overduedate"/>
                                    <label>Amount of the Invoice</label>
                                    <input type="text" placeholder="Invoice Amount" value="" name="invoice_amount" id="invoice_amount"/>
                                    <label>Product / Service Description</label>
                                    <input type="text" placeholder="Product Description" value="" name="product_description" id="product_description"/>
                                    <label>Measures taken to recover the debt</label>
                                    <input type="text" placeholder="Measures Taken" value="" name="measures_debtrecovery" id="measures_debtrecovery"/>
                                    <label>Any Other Additional Information</label>
                                    <input type="text" placeholder="Additional Info" value="" name="more_information" id="more_information"/>
                                  </div>
                                </div>
                                	<button type="submit" class="btn  big-btn  color-bg flat-btn">Submit</button>
                              </form>
                            </div>
                            <div class="col-md-3" style="background-color:#f8fbfe">
                            <div style="display: none;float:left;text-align:left;color:red" id="div_listing_error">
                            <!--Error Message div-->
                            <button type="button" class="close" data-dismiss="alert">×</button>Error</div>
                                          <!--Success Message div-->

                          </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
