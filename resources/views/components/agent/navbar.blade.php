<!--Navigation Start-->
<div id="top-header-menu-area">
    <div class="menu-area menu-sticky">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3" >
            <div class="logo-area"> <a class="main--logo" href="{{ route('agent.home') }}"><img src="{{ asset('website/images/logo.png') }}" alt="logo"></a> </div>
          </div>
          <div class="col-sm-9" >
            <div id="main-nav" class="stellarnav">
              <ul>
                <li><a href="#">Search</a></li>
                <li><a href="{{ route('agent.booking-list') }}">Manage Orders</a></li>
                <li><a href="#">Reporting</a></li>
              </ul>

              <ul class="list-right">
                  <li>
                      <a href="#"><i class="fas fa-language"></i> Eng</a>
                  </li>
                  <li>
                      <a href="#"><i class="fas fa-dollar-sign"></i> Usd</a>
                  </li>
                  <li>
                      <a href="#"><i class="fas fa-headset"></i> Support</a>
                  </li>
                  <li class="line-en">
                        <a>Hi, {{ Auth::user()->name }}</a>
                  </li>
                  <li>
                      <a href="#"> Agent Profile</a>
                      <li>
                        <a class="btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                            logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                   </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Navigation End-->
