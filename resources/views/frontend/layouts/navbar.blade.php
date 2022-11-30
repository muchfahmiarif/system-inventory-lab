<header id="topnav" class="defaultscroll sticky">
  <div class="container">
    <!-- Logo container-->
    <a class="logo" href="/">
        <span class="logo-light-mode">
            <img src="image/logo/1.svg" class="l-dark" alt="" style="width: 3rem">
            <img src="image/logo/2.svg" class="l-light" alt="" style="width: 3rem">
        </span>
        <img src="image/logo/2.svg" class="logo-dark-mode" alt="" style="width: 3rem">
    </a>
    <!-- End Logo container-->
    <div class="menu-extras">
        <div class="menu-item">
            <!-- Mobile menu toggle-->
            <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
            <!-- End mobile menu toggle-->
        </div>
    </div>

    <ul class="buy-button list-inline mb-0">
        <li class="list-inline-item search-icon mb-0">
            <div class="dropdown">
                <button type="button" class="btn btn-link text-decoration-none dropdown-toggle mb-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{-- <i class="uil uil-search h5 text-dark nav-light-icon-dark mb-0"></i> --}}
                    <i class="bi bi-search h5 text-dark nav-light-icon-dark mb-0"></i>
                    {{-- <i class="uil uil-search h5 text-white nav-light-icon-white mb-0"></i> --}}
                    <i class="bi bi-search h5 text-white nav-light-icon-white mb-0"></i>
                </button>
                <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-4 py-0" style="width: 300px;">
                    <form class="p-4">
                        <input type="text" id="text" name="name" class="form-control border bg-white" placeholder="Search...">
                    </form>
                </div>
            </div>
        </li>
    </ul>

    <div id="navigation">
      <ul class="navigation-menu nav-right nav-light">
        <li class="has-submenu parent-parent-menu-item {{ Request::is('/') ? 'active' : '' }}">
          <a href="/">Home</a><span class="menu-arrow"></span>
        </li>
        <li class="has-submenu parent-parent-menu-item {{ Request::is('about*') ? 'active' : '' }}">
          <a href="/about">About</a><span class="menu-arrow"></span>
        </li>
        <li class="has-submenu parent-parent-menu-item {{ Request::is('inventory/*') ? 'active' : '' }}">
          <a href="javascript:void(0)">Inventory</a><span class="menu-arrow"></span>
            <ul class="submenu">
              <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">Chemical</a><span class="submenu-arrow"></span>
                <ul class="submenu">
                  <li><a href="/inventory/glassware" class="sub-menu-item">Alat Gelas</a></li>
                  <li><a href="javascript:void(0)" class="sub-menu-item">Reagent</a></li>
                  <li><a href="/inventory/standard" class="sub-menu-item">Standard</a></li>
                </ul>
              </li>
              <li><a href="javascript:void(0)" class="sub-menu-item">Non Chemical</a></li>
            </ul>
        </li>

        <li class="has-submenu parent-parent-menu-item {{ Request::is('pages*') ? 'active' : '' }}">
          <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
            <ul class="submenu">
              <li class="sub-menu-item"><a href="/pages/blogs">Blogs</a>
              </li>
          </li>
              <li><a href="/pages/author" class="sub-menu-item">Author</a></li>
            </ul>
        </li>

        {{-- <li><a href="page-contact.html" class="sub-menu-item ">Log In</a></li> --}}

        <!--Login button Start-->
        <ul class="buy-button list-inline mb-0">                    
          <li class="list-inline-item ps-1 mb-0">
            <a href="/login" target="_blank">
              <div class="btn btn-primary btn-sm"><span class="fs-6">Log In</span></div>
            </a>
          </li>
        </ul>
      <!--Login button End-->

      </ul><!--end navigation menu-->
    </div><!--end navigation-->
  </div><!--end container-->
</header><!--end header-->