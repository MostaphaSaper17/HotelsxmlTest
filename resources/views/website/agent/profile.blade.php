@extends('layouts.agent')
@section('content')

<div class="clearfix"></div>
<!--Profile Admin Area Start-->
<div class="container-fluid profile-admin-area" id="st-content-wrapper">
    <div class="row">
        <div class="col-md-3">
            <div class="card card-topline-aqua">
                <div class="card-body no-padding height-9">

                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">Hi Profile name</div>
                    </div>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Phone</b> <a class="pull-right">{{ Auth()->user()->phone }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Email</b> <a class="pull-right">{{ Auth()->user()->email }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Address</b> <a class="pull-right">Bangalore, 104, 560066 </a>
                        </li>
                        <li class="list-group-item">
                            <b>Currency</b> <a class="pull-right">USD </a>
                        </li>
                        <li class="list-group-item">
                            <b>Documents</b> <a class="pull-right">Verified&nbsp;<img src="{{ asset('website/images/verified-icon.png') }}" alt="" style="vertical-align: top;"></a>
                        </li>
                        <li class="list-group-item">
                            <b>Email</b> <a class="pull-right">Verified&nbsp;<img src="{{ asset('website/images/verified-icon.png') }}" alt="" style="vertical-align: top;"></a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR USER TITLE -->

                </div>
            </div>
        </div>
        <div class="col-md-9">
            <!-- Popup -->
            <div class="modal fade modal-map" id="st-modal-show-map" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">



                            <h4 class="modal-title">Edit Profile</h4>
                            <button type="button" class="btn-close close"  data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5 class="mb-5">Personal Agent Information:</h5>
                            <div class="row">
                                <div class="col-md-4 border-right">
                                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                                        <div class="dropdown">
                                            <label>Person Name</label>
                                            <input type="text" id="" name="" value="" class="inputg" placeholder="Name"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-right">
                                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                                        <div class="dropdown">
                                            <label>Email Address</label>
                                            <input type="text" id="" name="" value="" class="inputg" placeholder="Email"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                                        <div class="dropdown">
                                            <label>Phone Number</label>
                                            <input type="text" id="" name="" value="" class="inputg" placeholder="Phone"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="col-md-12">
                                    <h5 class="mb-5">Management Contact:</h5>
                                </div>
                                <div class="col-md-4 border-right">
                                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                                        <div class="dropdown">
                                            <label>Person Name</label>
                                            <input type="text" id="" name="" value="" class="inputg" placeholder="Name"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-right">
                                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                                        <div class="dropdown">
                                            <label>Email Address</label>
                                            <input type="text" id="" name="" value="" class="inputg" placeholder="Email"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-right">
                                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                                        <div class="dropdown">
                                            <label>Phone Number</label>
                                            <input type="text" id="" name="" value="" class="inputg" placeholder="Phone"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                                        <div class="dropdown">
                                            <label>Username</label>
                                            <input type="text" id="" name="" value="" class="inputg" placeholder="Username" autocomplete="off" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h5 class="mb-5">Company Details:</h5>
                                </div>
                                <div class="col-md-4 border-right">
                                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                                        <div class="dropdown">
                                            <label>Company Name</label>
                                            <input type="text" id="" name="" value="" class="inputg" placeholder="Name" autocomplete="off" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-right">
                                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                                        <div class="dropdown">
                                            <label>Company Reg. No.</label>
                                            <input type="text" id="" name="" value="" class="inputg" placeholder="Reg. No." autocomplete="off" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                                        <div class="dropdown">
                                            <label>Nature of Business</label>
                                            <select name="" id="" class="inputg" required="" disabled="">
                                                <option value="Wholesalers" selected="">Wholesalers</option>
                                                <option value="Travel agents">Travel Agents</option>
                                                <option value="Tour Operation">Tour Operation </option>
                                                <option value="Corporates">Corporates</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-right">
                                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                                        <div class="dropdown">
                                            <label>Address</label>
                                            <input type="text" id="" name="" value="" class="inputg" placeholder="Place Address"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 border-right">
                                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                                        <div class="dropdown">
                                            <label>Country</label>
                                            <select name="" id="" class="inputg" required="">
                                                <option value="India" selected="">India</option>
                                                <option value="USA">USA</option>
                                                <option value="Pakisthan">Pakisthan</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                                        <div class="dropdown">
                                            <label>City</label>
                                            <input type="text" id="" name="" value="" class="inputg" placeholder="Place City"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 border-right">
                                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                                        <div class="dropdown">
                                            <label>Currency</label>
                                            <select name="" id="" class="inputg" required="">
                                                <option value="USD" selected="">USD</option>
                                                <option value="EUR">EUR</option>
                                                <option value="GBP">GBP</option>
                                                <option value="BOB">BOB</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 border-right">
                                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                                        <div class="dropdown">
                                            <label>Pincode/Zipcode</label>
                                            <input type="text" id="" name="" value="" class="inputg"
                                                placeholder="Place Pincode/Zipcode" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                                        <div class="dropdown">
                                            <label>Website</label>
                                            <input type="text" id="" name="" value="" class="inputg" placeholder="Place Website"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-4">
                                    <!--<div class="form-group">
                                        <label>Your photo</label>
                                        <form action="" class="dropzone dz-clickable">
                                            <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                        </form>
                                    </div>-->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="profile-userbuttons"><a href="#!" class="btn_1 medium">Edit Profile</a></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Icon Cards-->

            <div class="row">
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-primary o-hidden h-100">
                        <div class="card-body"><div class="card-body-icon"><i class="fas fa-fw fa-user-plus"></i></div>
                            <div class="mr-5"><h5>Manage Users</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1 nav-link-extra" href="#tab4" data-toggle="tab">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon"><i class="fas fa-fw fa-user-circle-o"></i></div>
                            <div class="mr-5"><h5>Manage Operation Staff</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1 nav-link-extra" href="#tab3" data-toggle="tab">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon"><i class="fas fa-fw fa-credit-card-alt"></i></div>
                            <div class="mr-5"><h5>Transactions</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1 nav-link-extra" href="#tab5" data-toggle="tab">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon"><i class="fas fa-fw fa-envelope-open"></i></div>
                            <div class="mr-5"><h5>Messages</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1 nav-link-extra" href="#tab6" data-toggle="tab">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
	        </div>
		    <!-- /cards -->
            <div class="st-tabs">
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item tab-all active"><a class="active" href="#tab1" data-toggle="tab"><i class="fas fa-fw fa-bullseye"></i>Overview</a></li>
                    <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#!" data-toggle="modal" data-target="#st-modal-show-map"><i class="fas fa-fw fa-thumb-tack"></i>Edit Profile</a></li>
                    <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab2" data-toggle="tab"><i class="fas fa-fw fa-lock"></i>Change Password</a></li>
                </ul>

        <div class="tab-content">
            <div id="tab1" class="tab-pane fade in active">
                <div class="card mb-3" style="display: none;">
                    <div class="card-body">
                        <canvas id="myAreaChart" width="100%" height="30"></canvas>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-3 modern-card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="header-title">
                                    <i class="fas fa-chart-line icon"></i> Monthly Report
                                </div>
                                <select id="month" name="month">
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12" selected>December</option>
                                </select>
                            </div>
                            <div class="card-body">
                                <div class="report-info">
                                    <p>Total Amount Of Orders, Sep 2023</p>
                                    <h4>500 <span>USD</span></h4>
                                </div>
                                <canvas id="myBarChart" width="100" height="50" hidden></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-3 modern-card">
                            <div class="card-header">Credit Statement Used</div>
                            <div class="card-body">
                                <canvas id="myBarChart-2" width="100" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-3 modern-card">
                            <div class="card-header">Your Booking Statistics</div>
                            <div class="card-body">
                                <canvas id="myPieChart" width="100%" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab2" class="tab-pane fade">
               <div class="row">
                <div class="col-lg-10">
                    <div class="card mb-3">
                        <div class="card-header">Change Password</div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-6 border-right">
                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                <div class="dropdown">
                                    <label>Current Password</label>
                                    <input type="text" id="" name="" value="" class="inputg" placeholder="Place Current Password" autocomplete="off">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                <div class="dropdown">
                                    <label>New Password</label>
                                    <input type="text" id="" name="" value="" class="inputg" placeholder="Place New Password" autocomplete="off">
                                </div>
                            </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 mobile-hide-hr"><hr></div>
                            <div class="clearfix"></div>
                            <div class="col-md-6 border-right">
                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                <div class="dropdown">
                                    <label>Confirm New Password</label>
                                    <input type="text" id="" name="" value="" class="inputg" placeholder="Confirm New Password" autocomplete="off">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="profile-userbuttons"><a href="#!" class="btn_1 medium pull-left bg-danger">Cancel</a></div>
                                    <div class="profile-userbuttons"><a href="#!" class="btn_1 medium">Change</a></div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div id="tab3" class="tab-pane fade">
                <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header">Manage Operation Staff</div>
                <div class="card-body">
                    <div class="row">
                     <div class="col-md-3 border-right">
                       <div class="form-group form-extra-field dropdown clearfix field-detination">
                         <div class="dropdown">
                            <label>User Name</label>
                            <input type="text" id="" name="" value="" class="inputg" placeholder="Place Username" autocomplete="off">
                         </div>
                       </div>
                     </div>
                     <div class="col-md-3 border-right">
                       <div class="form-group form-extra-field dropdown clearfix field-detination">
                         <div class="dropdown">
                            <label>Password</label>
                            <input type="text" id="" name="" value="" class="inputg" placeholder="Place Password" autocomplete="off">
                         </div>
                        </div>
                     </div>
                     <div class="col-md-3 border-right">
                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                              <div class="dropdown">
                                 <label>Generate Password</label>
                                 <div class="clearfix"></div>
                                <a href="#!" class="btn_1 medium pull-left bg-danger">Generate</a>
                              </div>
                            </div>
                     </div>
                     <div class="col-md-3">
                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                <div class="dropdown">
                                    <label>Status</label>
                                    <select name="" id="" class="inputg" required="">
                                        <option value="India" selected="">Active</option>
                                        <option value="USA">Deactive</option>
                                    </select>
                                </div>
                            </div>
                     </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 mobile-hide-hr"><hr></div>
                    <div class="clearfix"></div>
                      <div class="row">
                            <div class="col-md-3 border-right">
                                    <div class="table-bg-1">
                                        <div class="ckeck-area">
                                            <input type="checkbox" name="checkbox" id="checkbox_id" value="value">
                                            <label for="checkbox_id">Allow Booking within cancellation</label>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-3 border-right">
                                    <div class="table-bg-2"><div class="ckeck-area">
                                        <input type="checkbox" name="checkbox" id="checkbox_id" value="value">
                                        <label for="checkbox_id"> Pay Booking</label>
                                    </div></div>
                            </div>
                            <div class="col-md-3">
                                    <div class="table-bg-3"><div class="ckeck-area">
                                        <input type="checkbox" name="checkbox" id="checkbox_id" value="value">
                                        <label for="checkbox_id">Book</label>
                                    </div></div>
                            </div>
                      </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 mobile-hide-hr"><hr></div>
                    <div class="clearfix"></div>
                    <div class="row">
                     <div class="col-md-3 border-right">
                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                              <div class="dropdown">
                                 <label>First Name</label>
                                 <input type="text" id="" name="" value="" class="inputg" placeholder="Place Name" autocomplete="off">
                              </div>
                            </div>
                     </div>
                     <div class="col-md-3 border-right">
                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                              <div class="dropdown">
                                 <label>Last Name</label>
                                 <input type="text" id="" name="" value="" class="inputg" placeholder="Place Last name" autocomplete="off">
                              </div>
                            </div>
                     </div>
                     <div class="col-md-3">
                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                              <div class="dropdown">
                                 <label>Designation</label>
                                 <input type="text" id="" name="" value="" class="inputg" placeholder="Place Designation" autocomplete="off">
                              </div>
                            </div>
                     </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 mobile-hide-hr"><hr></div>
                    <div class="clearfix"></div>
                    <div class="row">
                     <div class="col-md-3 border-right">
                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                              <div class="dropdown">
                                 <label>Address</label>
                                 <input type="text" id="" name="" value="" class="inputg" placeholder="Place Address" autocomplete="off">
                              </div>
                            </div>
                     </div>
                     <div class="col-md-3 border-right">
                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                              <div class="dropdown">
                                 <label>Email</label>
                                 <input type="text" id="" name="" value="" class="inputg" placeholder="Place Email" autocomplete="off">
                              </div>
                            </div>
                     </div>
                     <div class="col-md-3">
                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                              <div class="dropdown">
                                 <label>Phone Number</label>
                                 <input type="text" id="" name="" value="" class="inputg" placeholder="Place Phone Number" autocomplete="off">
                              </div>
                            </div>
                     </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 mobile-hide-hr"><hr></div>
                    <div class="clearfix"></div>
                    <div class="row">
                     <div class="col-md-3 border-right">
                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                              <div class="dropdown">
                                 <label>Mobile</label>
                                 <input type="text" id="" name="" value="" class="inputg" placeholder="Place Mobile No." autocomplete="off">
                              </div>
                            </div>
                     </div>
                     <div class="col-md-3 border-right">
                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                <div class="dropdown">
                                    <label>Country</label>
                                    <select name="" id="" class="inputg" required="">
                                        <option value="India" selected="">Select Country</option>
                                        <option value="USA">USA</option>
                                        <option value="Pakisthan">Pakisthan</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                    </select>

                                </div>
                            </div>
                     </div>
                     <div class="col-md-3 border-right">
                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                              <div class="dropdown">
                                 <label>City</label>
                                 <input type="text" id="" name="" value="" class="inputg" placeholder="Place City" autocomplete="off">
                              </div>
                            </div>
                     </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 mobile-hide-hr"><hr></div>
                    <div class="clearfix"></div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <div class="profile-userbuttons"><a href="#!" class="btn_1 medium pull-left bg-danger">Cancel</a></div>
                            <div class="profile-userbuttons"><a href="#!" class="btn_1 medium">Submit</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>
            </div>
            <div id="tab4" class="tab-pane fade">
            <div class="card mb-3">
                <div class="card-header">Manage Users</div>
                <div class="card-body">
                <!-- data table -->
                <div class="table-responsive">
            <table class="table table-room-type table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Privileges</th>
                  <th>Action</th>
                  </tr>
              </thead>

              <tbody>
                <tr>
                  <td class="max-space">Mr. Ali</td>
                  <td class="min-space">test.kh@gmail.com</td>
                  <td class="min-space">01234567890</td>
                  <td class="min-space"><span class="bg-success label">Can Book</span> <span class="bg-danger label">Can Cancel</span></td>
                  <td class="min-space">
                    <a href="#" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><i class="material-icons"></i></a>
					<a href="#" class="view" title="" data-toggle="tooltip" data-original-title="De-Active"><i class="material-icons"></i></a>
                </td>
                </tr>
                <tr>
                  <td class="max-space">Mr. Ali</td>
                  <td class="min-space">test.kh@gmail.com</td>
                  <td class="min-space">01234567890</td>
                  <td class="min-space"><span class="bg-success label">Can Book</span> <span class="bg-danger label">Can Cancel</span></td>
                  <td class="min-space">
                    <a href="#" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><i class="material-icons"></i></a>
					<a href="#" class="view" title="" data-toggle="tooltip" data-original-title="De-Active"><i class="material-icons"></i></a>
                </td>
                </tr>

              </tbody>
            </table>
                </div>
                <!-- /data table -->
                </div>
            </div>
            </div>
            <div id="tab5" class="tab-pane fade">
            <div class="card mb-3">
                <div class="card-header">Transactions</div>
                <div class="card-body">
                    <div class="profile-userbuttons mar-b-20">
                        <a href="#!" class="btn_1 medium">Send Deposit Request</a>
                        <a href="#!" class="btn_1 medium">Top up by credit card</a>
                    </div>
                    <div class="table-responsive mar-b-20">
                                            <table class="table table-room-type table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Transactions</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td class="max-space">Total Debits:</td>
                                                    <td class="min-space">26933.67 USD</td>
                                                </tr>
                                                <tr>
                                                    <td class="max-space">Total Credits:</td>
                                                    <td class="min-space">27050.13 USD</td>
                                                </tr>
                                                <tr>
                                                    <td class="max-space">Balance:</td>
                                                    <td class="min-space"><b>116.46 USD</b></td>
                                                </tr>
                                            </tbody></table>
                                        </div>
                <!-- data table -->
                <div class="table-responsive">
            <table class="table table-room-type table-bordered" id="transactions-dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Reference</th>
                  <th>Amount</th>
                  <th>Currency</th>
                  <th>Type</th>
                  <th>Date</th>
                  <th>Invoice</th>
                  </tr>
              </thead>

              <tbody>
                <tr>
                  <td class="max-space">CVT304576395G</td>
                  <td class="min-space">16.95</td>
                  <td class="min-space">USD</td>
                  <td class="min-space"><span class="bg-success label">Credit</span></td>
                  <td class="min-space">May 15th,19</td>
                  <td class="min-space"><a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View Invoice"><i class="material-icons"></i></a></td>
                </tr>
                <tr>
                  <td class="max-space">CVT304576395G</td>
                  <td class="min-space">16.95</td>
                  <td class="min-space">USD</td>
                  <td class="min-space"><span class="bg-danger label">Debit</span></td>
                  <td class="min-space">May 15th,19</td>
                  <td class="min-space"><a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View Invoice"><i class="material-icons"></i></a></td>
                </tr>
                <tr>
                  <td class="max-space">Manual</td>
                  <td class="min-space">16.95</td>
                  <td class="min-space">USD</td>
                  <td class="min-space"><span class="bg-success label">Credit</span></td>
                  <td class="min-space">May 15th,19</td>
                  <td class="min-space">Manual</td>
                </tr>

              </tbody>
            </table>
                </div>
                <!-- /data table -->
                </div>
            </div>
            </div>
            <div id="tab6" class="tab-pane fade">
            <div class="card mb-3">
                <div class="card-header">Messages</div>
                <div class="card-body">
                    <div class="st-tabs">
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item tab-all active"><a class="active" href="#tab8" data-toggle="tab"><i class="fas fa-fw fa-inbox"></i>Open Tickets</a></li>
                            <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab9" data-toggle="tab"><i class="fas fa-fw fa-close"></i>Closed Tickets</a></li>
                            <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab10" data-toggle="tab"><i class="fas fa-fw fa-check"></i>Add New Tickets</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                    <div id="tab8" class="tab-pane fade in active">
                <!-- data table -->
                <div class="table-responsive">
                    <table class="table table-room-type table-bordered" id="openticket-dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Ticket</th>
                  <th>Subject</th>
                  <th>Created</th>
                  <th>Last Reply</th>
                  <th>Status</th>
                  <th>Action</th>
                  </tr>
              </thead>

              <tbody>
                <tr>
                  <td class="max-space">#1460&nbsp;<span class="bg-primary label">Request</span></td>
                  <td class="min-space">Hi, need special request</td>
                  <td class="min-space">2019-04-05<br />07:01:03</td>
                  <td class="min-space">2019-04-09<br/>08:37:13</td>
                  <td class="min-space"><span class="bg-danger label">Open</span></td>
                  <td class="min-space">
                      <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="Reply"><i class="material-icons">reply</i></a>
                      <a href="#" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><i class="material-icons">delete</i></a>
				 </td>
                </tr>


              </tbody>
                    </table>
                </div>
                <!-- /data table -->
                </div>
                <div id="tab9" class="tab-pane fade">
                    <!-- data table -->
                <div class="table-responsive">
                    <table class="table table-room-type table-bordered" id="closeticket-dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Ticket</th>
                  <th>Subject</th>
                  <th>Created</th>
                  <th>Last Reply</th>
                  <th>Status</th>
                  <th>Action</th>
                  </tr>
              </thead>

              <tbody>
                <tr>
                  <td class="max-space">#1460&nbsp;<span class="bg-primary label">Request</span></td>
                  <td class="min-space">Hotel confirmation number</td>
                  <td class="min-space">2019-04-05<br />07:01:03</td>
                  <td class="min-space">2019-04-09<br/>08:37:13</td>
                  <td class="min-space"><span class="bg-success label">Closed</span></td>
                  <td class="min-space">
                      <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="Reply"><i class="material-icons">reply</i></a>
                      <a href="#" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><i class="material-icons">delete</i></a>
				 </td>
                </tr>


              </tbody>
                    </table>
                </div>
                <!-- /data table -->
                </div>
                <div id="tab10" class="tab-pane fade">

                <div class="col-md-6 border-right">
                <div class="form-group form-extra-field dropdown clearfix field-detination">
                    <div class="dropdown">
                        <label>Category</label>
                        <select name="" id="" class="inputg" required="">
                            <option value="" selected="">Select Category</option>
                            <option value="7">Special Request</option>
                            <option value="8">Amendment</option>
                            <option value="9">Clients in Hotel Support</option>
                        </select>

                    </div>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-extra-field dropdown clearfix field-detination">
                        <div class="dropdown">
                            <label>Subject</label>
                            <input type="text" id="" name="" value="" class="inputg" placeholder="Place Subject" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Attachment</label>
                    <form action="" class="dropzone dz-clickable">
                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                    </form>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group form-extra-field dropdown clearfix field-detination">
                    <div class="dropdown">
                        <label>Message</label>
                        <textarea name="message" id="" rows="5" required="" class="inputg" placeholder="Type Message" autocomplete="off" style="min-height: 180px; border: 2px dashed rgba(0, 0, 0, 0.1); padding-left: 15px; padding-right: 15px;"></textarea>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="profile-userbuttons"><a href="#!" class="btn_1 medium bg-success">Add Ticket</a></div>
                    </div>
                </div>
                </div>
                </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>
  </div>
<!--Profile Admin Area End-->

<div class="clearfix"></div>

@endsection
