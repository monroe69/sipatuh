@can('is_admin')
    
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="{{ route ('home') }}"><span class="brand-logo">
                        <img class="image" border="0" src="../../../app-assets/images/pages/udiklat.png" width="20px" style="margin: 0px;padding: 0px color:white;">
                </span>
                   <h2 class="brand-text">UPDL BOGOR</h2>
            </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="{{ Request::is('dashboardk3*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/dashboardk3"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="home">Dashboard</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="Forms &amp; Tables">Verifikator</span><i data-feather="more-horizontal"></i>
          </li>
          <li class="{{ Request::is('contoh*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/bogork3"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">UPDL BOGOR</span></a>
          </li>
          <li class="{{ Request::is('contoh*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/padangk3"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">UPDL PADANG</span></a>
          </li>
          <li class="{{ Request::is('contoh*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/jakartak3"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">UPDL JAKARTA</span></a>
          </li>
          <li class="{{ Request::is('K3/form*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/form"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="home">Form Upload</span></a>
          </li>
        </ul>
        </div>
    </div>
            @endcan