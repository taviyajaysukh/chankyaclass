<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/')}}/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Chanakya Academy</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-is-opening menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
			  {{ __('label.dashboard') }}
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="usermanage" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
			  {{ __('label.usermanager') }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.academics') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="categorymanage" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.categorymanager') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.subcategorymanager') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.batchmanager') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.noticemanager') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.questionmanager') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.upcomingexamsmanager') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.liveclass') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.jitsimeet') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.liveclasshistory') }}</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.studentmanager') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.categorymanager') }}</p>
                </a>
              </li>
			 </ul>
			</li>
			<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.teachermanager') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.categorymanager') }}</p>
                </a>
              </li>
			 </ul>
			</li>
			<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.librarymanager') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.categorymanager') }}</p>
                </a>
              </li>
			 </ul>
			</li>
			<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.exam') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.categorymanager') }}</p>
                </a>
              </li>
			 </ul>
			</li>	
			<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.gallerymanager') }}
              </p>
            </a>
			</li>
			<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.videolecturemanager') }}
              </p>
            </a>
			</li>
			<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.doubtsclass') }}
              </p>
            </a>
			</li>
			<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.enquiry') }}
              </p>
            </a>
			</li>
			<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.settimezone') }}
              </p>
            </a>
			</li>
			<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.sitesettings') }}
              </p>
            </a>
			</li>
			<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.generalsettings') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.categorymanager') }}</p>
                </a>
              </li>
			 </ul>
			</li>
			<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.certificate') }}
              </p>
            </a>
			</li>
			<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.themesoption') }}
              </p>
            </a>
			</li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>