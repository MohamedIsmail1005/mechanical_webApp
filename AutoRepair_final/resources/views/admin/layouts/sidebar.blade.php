  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #4B2637">
      <!-- Brand Logo -->
      <a href="{{url('/')}}" class="brand-link">
          <img src="{{ asset('user/assets/images/MLogo.psd.png') }}" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light"> Fast And Furious</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar" style="background-color:#4B2637">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('dist/img/som3a.jpg') }}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="https://www.facebook.com/mohamed.eltop.35" class="d-block">Admin</a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search" >
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search" style="background-color:#E9E3E3">
                  <div class="input-group-append">
                      <button style="background-color: #B3A2A2" class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="/admin/dashboard" class="nav-link ">
                          <i class="nav-icon fas fa-tags"></i>
                          <p>
                              Category
                          </p>
                      </a>

                  </li>
                  <li class="nav-item">
                      <a href="/admin/requests" class="nav-link ">
                          <i class="nav-icon fas fa-unlock-alt"></i>
                          <p>
                              Approve Products
                          </p>
                      </a>

                  </li>
                  <li class="nav-item">
                    <a href="/admin/order" class="nav-link ">
                        <i class="nav-icon fas fa-money-check"></i>
                        <p>
                            Orders
                        </p>
                    </a>

                </li>

                  <li class="nav-item">
                      <a href="/admin/message" class="nav-link ">
                        <i class="nav-icon fas fa-scroll"></i>
                          <p>
                              Messages
                          </p>
                      </a>

                  </li>

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
