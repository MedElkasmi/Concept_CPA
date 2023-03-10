<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="{{route('dashboard')}}" class="site_title"><i class="fa fa-home"></i> <span>Dashboard</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src="{{ url('upload/profile_images/'. $user->profile_image )}}" alt="" class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Welcome,</span>
          <h2>{{$user->name}}</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>Settings</h3>
          <ul class="nav side-menu">
            <li><a><i class="fa fa-cloud"></i>Offers<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{route('offer.create')}}">Add Offer</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav side-menu">
            <li><a><i class="fa fa-users"></i>Sponsors<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{route('network.create')}}">Add New Network</a></li>
                <li><a href="{{route('network.index')}}">List Of Networks</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav side-menu">
            <li><a><i class="fa fa-cubes"></i>Verticals<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{route('vertical.create')}}">Add New Vertical</a></li>
                <li><a href="{{route('vertical.index')}}">List Of Verticals</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('logout')}}">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div>
      <!-- /menu footer buttons -->
    </div>
  </div>