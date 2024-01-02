<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="javascript:void(0)" class="brand-link">
      <img src="{{asset('assets/')}}/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Chanakya Academy</span>
    </a>
    <div class="sidebar">
	@php
		$activemenu = 'menu-is-opening menu-open';
	@endphp
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		@if(Auth::user()->role == 'admin'))
          <li class="nav-item {{ Request::is('admin/dashboard') ? 'menu-is-opening menu-open' : '' }}">
            <a href="{{ url('/admin/dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
			  {{ __('label.dashboard') }}
              </p>
            </a>
          </li>
		  <li class="nav-item {{ Request::is('admin/usermanage') ? 'menu-is-opening menu-open' : '' }}">
            <a href="{{ url('/admin/usermanage') }}" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
			  {{ __('label.usermanager') }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.academics') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ Request::is('admin/categorymanage') ? 'menu-is-opening menu-open' : '' }}">
                <a href="{{ url('/admin/categorymanage') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.categorymanager') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/subcategorymanage') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.subcategorymanager') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/batchmanage') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.batchmanager') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/noticemanage') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.noticemanager') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/subjectmanage') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.subjectmanager') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/questionmanage') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.questionmanager') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/upcommingexammanage') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.upcomingexamsmanager') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/liveclassmanage') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.liveclass') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/jitsimeetmanage') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{ __('label.jitsimeet') }}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/liveclasshistorymanage') }}" class="nav-link">
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
                <a href="{{ url('/admin/addstudent') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{__('label.addstudent')}}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/studentmanage') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>{{__('label.studentmanage')}}</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/managestudentleave') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>Manage Student Leave</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/studentpaymenthistory') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>Payment History</p>
                </a>
              </li>
			 </ul>
			</li>
			<li class="nav-item">
            <a href="javascript:void(0)" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.teachermanager') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/extraclassesmanage') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>Manage extra classes</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/teachermanage') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>Manage Teacher</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/manageteacherleave') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>Manage Teacher Leave</p>
                </a>
              </li>
			 </ul>
			</li>
			<li class="nav-item">
            <a href="javascript:void(0)" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.librarymanager') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/bookmanage') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>Manage book</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/notemanage') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>Manage note</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/oldpapermanage') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>Old paper</p>
                </a>
              </li>
			 </ul>
			</li>
			<li class="nav-item">
            <a href="javascript:void(0)" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.exam') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/createpaper') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>Create Paper</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/exammanage') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>Paper Manage</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/practiceresult') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>Practice Result</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/mocktestresult') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>Mock Test Result</p>
                </a>
              </li>
			 </ul>
			</li>	
			<li class="nav-item {{ Request::is('admin/gallerymanage') ? 'menu-is-opening menu-open' : '' }}">
            <a href="{{ url('/admin/gallerymanage') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.gallerymanager') }}
              </p>
            </a>
			</li>
			<li class="nav-item {{ Request::is('admin/videomanage') ? 'menu-is-opening menu-open' : '' }}">
            <a href="{{ url('/admin/videomanage') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.videolecturemanager') }}
              </p>
            </a>
			</li>
			<li class="nav-item {{ Request::is('admin/doubtsclass') ? 'menu-is-opening menu-open' : '' }}">
            <a href="{{ url('/admin/doubtsclass') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.doubtsclass') }}
              </p>
            </a>
			</li>
			<li class="nav-item">
            <a href="{{ url('/admin/enquiry') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.enquiry') }}
              </p>
            </a>
			</li>
			<li class="nav-item">
            <a href="{{ url('/admin/settimezone') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.settimezone') }}
              </p>
            </a>
			</li>
			<li class="nav-item {{ Request::is('admin/sitesettings') ? 'menu-is-opening menu-open' : '' }}">
            <a href="{{ url('/admin/sitesettings') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.sitesettings') }}
              </p>
            </a>
			</li>
			<li class="nav-item">
            <a href="javascript:void(0)" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.generalsettings') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/paymentsettings') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>Payment Settings</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('/admin/emailsettings') }}" class="nav-link">
                  <i class="fas fa-angle-right left"></i>
                  <p>Email Settings</p>
                </a>
              </li>
			 </ul>
			</li>
			<li class="nav-item {{ Request::is('admin/certificate') ? 'menu-is-opening menu-open' : '' }}">
            <a href="{{ url('/admin/certificate') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.certificate') }}
              </p>
            </a>
			</li>
			<li class="nav-item">
            <a href="{{ url('/admin/themesoption') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
			  {{ __('label.themesoption') }}
              </p>
            </a>
			</li>
			@endif
			@if(Auth::user()->role == 'teacher')
				<li class="nav-item {{ Request::is('teacher/dashboard') ? 'menu-is-opening menu-open' : '' }}">
					<a href="{{ url('/teacher/dashboard') }}" class="nav-link">
					  <i class="nav-icon fas fa-th"></i>
					  <p>
					  {{ __('label.dashboard') }}
					  </p>
					</a>
				  </li>
				  <li class="nav-item {{ Request::is('teacher/assignmentmanage') ? 'menu-is-opening menu-open' : '' }}">
					<a href="{{ url('/teacher/assignmentmanage') }}" class="nav-link">
					  <i class="nav-icon fas fa-th"></i>
					  <p>
					  Manage Assignment
					  </p>
					</a>
				  </li>
				  <li class="nav-item {{ Request::is('teacher/applyleave') ? 'menu-is-opening menu-open' : '' }}">
					<a href="{{ url('/teacher/applyleave') }}" class="nav-link">
					  <i class="nav-icon fas fa-th"></i>
					  <p>
						Apply Leave
					  </p>
					</a>
				  </li>
			@endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>