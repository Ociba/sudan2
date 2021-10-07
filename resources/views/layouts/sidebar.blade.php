<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="{{ asset('admin/app-assets/images/backgrounds/02.jpg')}}">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="#"><img class="brand-logo" alt="Chameleon admin logo" style="border-radius:50%; width: 50px; height:50px;" src="{{ asset('admin/app-assets/images/ico/logo.png')}}"/>
              <h3 class="brand-text">SSNEC</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="navigation-background"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li  @if(\Request::route()->getName() == "dashboard")class="nav-item menu-item active" @else class="nav-item menu-item" @endif>
            <a href="/dashboard"><i class="icon-home"></i><span class="menu-title" data-i18n="">Dashboard</span>
          </a>
            
          </li>
          <li class="nav-item"><a href="/get-results"><i class="icon-grid"></i><span class="menu-title" data-i18n="">Results</span></a>
          </li>
            {{--<li  @if(\Request::route()->getName() == "Members")class="nav-item active" @else class="nav-item" @endif>
              <a href="/registered-users"><i class="icon-user"></i><span class="menu-title" data-i18n="">Register Users</span>
            </a>
            </li>
            --}}
            <li class="nav-item">
              <a href="/get-students-performance"><i class="icon-book-open"></i><span class="menu-title">Performance</span>
            </a>
            </li>
            <li class="nav-item">
              <a href="/get-schools-performance"><i class="icon-graduation"></i><span class="menu-title">Schools</span>
            </a>
            </li>
            <li class="nav-item">
              <a href="/get-gender-performance"><i class="icon-users"></i><span class="menu-title">Gender</span>
            </a>
            </li>
            <li class="nav-item">
              <a href="/get-states-performance"><i class="icon-globe"></i><span class="menu-title">States</span>
            </a>
            </li>
        </ul>
      </div>
    </div>