      <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-image: linear-gradient(-225deg, #473B7B 0%, #3584A7 51%, #30D2BE 100%);">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src=" {{ asset('adminlte/dist/img/AdminLTELogo.png')}} " alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Speedy Car</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

              <li class="nav-item">
                <a href=" {{ route('post.index') }} " class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    <span class="right badge badge-danger ">New</span>
                      Blog Post
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{ route('comment.index') }} " class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    <span class="right badge badge-danger ">New</span>
                    Comment Blog 
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{ route('order.index') }} " class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    <span class="right badge badge-danger ">New</span>
                    Orders 
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Danh mục sản phẩm
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('menus.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Menus
                  </p>
                </a>
              </li>

              
              <li class="nav-item">
                <a href="{{ route('product.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Sản Phẩm
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('slider.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Slider
                  </p>
                </a>
              </li>

              <li class="nav-item">
                  <a href="{{ route('links.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Links
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Danh sách nhân viên
                </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('roles.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Danh sách vai trò (Roles)
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('permissions.index') }} " class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                      Tạo dữ liệu  Permissions
                  </p>
                </a>
              </li>



            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>