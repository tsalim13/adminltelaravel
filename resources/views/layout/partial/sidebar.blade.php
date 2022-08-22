<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Menu 1
                <span class="right badge badge-danger">215</span>
              </p>
            </a>
          </li>
          <li class="nav-item {{ (request()->is('*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('/*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Menu 2
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Welcome 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/2') }}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Welcome 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/3') }}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Welcome 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/4') }}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Welcome 4</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES HEADER</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Menu 3
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
