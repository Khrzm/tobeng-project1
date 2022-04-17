<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow @yield('sidebar-size')" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html">
                    <span class="brand-logo">
                        <img src="{{ asset('logo.png') }}" />
                    </span>
                    <h2 class="brand-text"><img src="{{ asset('logo.png') }}" /></h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span><span class="badge badge-light-warning rounded-pill ms-auto me-1">2</span></a>
                <ul class="menu-content">
                    <li class="{{ (request()->is('/')) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="dashboard-analytics.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="dashboard-ecommerce.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">eCommerce</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item "><a class="d-flex align-items-center" href="app-email.html"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">Email</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Dashboards">User Management</span></a>
                <ul class="menu-content">
                    <li class="{{ (request()->is('/')) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-item text-truncate">Users</span></a>
                    </li>
                    <li class="{{ (request()->is(url('/nde/role'))) ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ url('/nde/role') }}"><i data-feather="users"></i><span class="menu-item text-truncate">Roles</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
