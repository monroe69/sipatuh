@can('is_user')
    
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
          <li class="{{ Request::is('K3/index*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/index"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="home">Dashboard</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="Forms &amp; Tables">Menu Anda</span><i data-feather="more-horizontal"></i>
          </li>
          <li class="{{ Request::is('K3/rkap*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/rkap"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="home">DataTable</span></a>
          </li>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Form Upload</span></a>
                    <ul class="menu-content">
                      <li class="{{ Request::is('K3/leadership*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/leadership"><span class="menu-title text-truncate" data-i18n="home">Leadership & Management Commitment</span></a>
          </li>
          <li class="{{ Request::is('K3/audit*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/audit"><span class="menu-title text-truncate" data-i18n="home"> Audit, Assessment and Inspection</span></a>
          </li>
          <li class="{{ Request::is('K3/penerapan*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/penerapan"><span class="menu-title text-truncate" data-i18n="home">Penerapan Identifikasi Bahaya, Penilaian dan Pengendalian Risiko (IBPPR)</span></a>
          </li>
          <li class="{{ Request::is('K3/safeti*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/safeti"><span class="menu-title text-truncate" data-i18n="home">Safety Training and Education</span></a>
          </li>
          <li class="{{ Request::is('K3/comunication*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/comunication"><span class="menu-title text-truncate" data-i18n="home">Safety Campaign and Communication</span></a>
          </li>
          <li class="{{ Request::is('K3/reporting*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/reporting"><span class="menu-title text-truncate" data-i18n="home">Reporting</span></a>
          </li>
                    </ul>
                </li>
        </ul>
        </div>
    </div>
            @endcan