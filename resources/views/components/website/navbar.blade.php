<div class="navbar-container">
    <div class="container-lg">
        <nav class="navbar navbar-expand-custom navbar-mainbg">
            <a class="navbar-brand navbar-logo" href="{{ route('website.home') }}">
                <img src="{{ asset('website/images/logo.png') }}" alt="" width="200px">
            </a>
            <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector">
                        <div class="left"></div>
                        <div class="right"></div>
                    </div>
                    <li class="nav-item {{ Route::current()->getName()== 'website.home' ? 'nav-item active' : ''  }}">
                        <a class="nav-link" href="{{ route('website.home') }}"><i class="fas fa-house"></i> Home</a>
                    </li>
                    <li class="nav-item {{ Route::current()->getName()== 'website.about' ? 'nav-item active' : ''  }}">
                        <a class="nav-link" href="{{ route('website.about') }}"><i class="fas fa-info-circle"></i> About Us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('website.home') }}#services"><i class="fas fa-cogs"></i> Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.home') }}#technology"><i class="fas fa-laptop"></i> Technology</a>
                    </li>
                    <li class="nav-item {{ Route::current()->getName()== 'website.contact-us' ? 'nav-item active' : ''  }}">
                        <a class="nav-link" href="{{ route('website.contact-us') }}"><i class="fas fa-envelope"></i> Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" id="login-button"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" id="signup-button" data-toggle="modal" data-target="#modalSignup"><i class="fas fa-user-plus"></i> Register</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</div>

<!-- Modal Sginup -->
<div class="modal fade modal-form-home" id="modalSignup" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Register here as an Agent</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h5 class="mb-0">Personal Agent Information:</h5>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="personName">Person Name</label>
                            <input type="text" id="personName" name="personName" class="form-control inputg" placeholder="Name" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="emailAddress">Email Address</label>
                            <input type="text" id="emailAddress" name="emailAddress" class="form-control inputg" placeholder="Email" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="text" id="phoneNumber" name="phoneNumber" class="form-control inputg" placeholder="Phone" autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h5 class="mb-0">Management Contact:</h5>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="managementName">Person Name</label>
                            <input type="text" id="managementName" name="managementName" class="form-control inputg" placeholder="Name" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="managementEmail">Email Address</label>
                            <input type="text" id="managementEmail" name="managementEmail" class="form-control inputg" placeholder="Email" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="managementPhone">Phone Number</label>
                            <input type="text" id="managementPhone" name="managementPhone" class="form-control inputg" placeholder="Phone" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control inputg" placeholder="Username" autocomplete="off" >
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" id="password" name="password" class="form-control inputg" placeholder="Password" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="text" id="confirmPassword" name="confirmPassword" class="form-control inputg" placeholder="Confirm Password" autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h5 class="mb-0">Company Details:</h5>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="companyName">Company Name</label>
                            <input type="text" id="companyName" name="companyName" class="form-control inputg" placeholder="Name" autocomplete="off" >
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="regNumber">Company Reg. No.</label>
                            <input type="text" id="regNumber" name="regNumber" class="form-control inputg" placeholder="Reg. No." autocomplete="off" >
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="businessNature">Nature of Business</label>
                            <select id="businessNature" name="businessNature" class="form-control inputg" required >
                                <option value="Wholesalers" selected>Wholesalers</option>
                                <option value="Travel agents">Travel Agents</option>
                                <option value="Tour Operation">Tour Operation</option>
                                <option value="Corporates">Corporates</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" class="form-control inputg" placeholder="Place Address" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select id="country" name="country" class="form-control inputg" required>
                                <option value="India" selected>India</option>
                                <option value="USA">USA</option>
                                <option value="Pakisthan">Pakisthan</option>
                                <option value="Bangladesh">Bangladesh</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" class="form-control inputg" placeholder="Place City" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="currency">Currency</label>
                            <select id="currency" name="currency" class="form-control inputg" required>
                                <option value="USD" selected>USD</option>
                                <option value="EUR">EUR</option>
                                <option value="GBP">GBP</option>
                                <option value="BOB">BOB</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="pincode">Pincode/Zipcode</label>
                            <input type="text" id="pincode" name="pincode" class="form-control inputg" placeholder="Place Pincode/Zipcode" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" id="website" name="website" class="form-control inputg" placeholder="Place Website" autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12 ">
                        <div class="form-group profile-userbuttons">
                            <a href="#!" class="btn btn-primary btn_1">Register</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="login-tab" class="hidden">
        <div class="login-body">
            <div class="row align-items-center justify-content-center">

            <div class="col-md-12">
                <div class="login-form">
                <h3>SIGN IN</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mail-input">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"
                        ><i class="fa-solid fa-envelope"></i
                        ></span>
                        <input
                        name="email"
                        id="signInEmail"
                        type="email"
                        class="form-control"
                        placeholder="Email"
                        aria-label="Username"
                        aria-describedby="addon-wrapping"
                        />
                    </div>
                    </div>
                    <div class="password-input">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"
                        ><i class="fa-solid fa-lock"></i
                        ></span>
                        <input name="password"
                        id="signInPassword"
                        type="password"
                        class="form-control"
                        placeholder="Password"
                        aria-label="Username"
                        aria-describedby="addon-wrapping"
                        />
                    </div>
                    </div>
                    <p id="loginError" class="alert text-danger d-none">
                    Your email or password is wrong or cant be empty
                    </p>
                    <button type="submit" id="signInBtn" class="submit d-block m-auto mb-3" style="width: max-content;">
                    </button>
                </form>
                <a href="#">To work with us ? Register here </a>
                <!-- Add Forgot Password link below the login form -->
                    <div class="forgot-password-link">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
</div>
