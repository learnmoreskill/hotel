<nav class="pcoded-navbar">
  <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
  <div class="pcoded-inner-navbar main-menu">
     <div class="">
        <div class="main-menu-header">
           <img src="{{asset($site_setting->logo1)}}"  alt="User-Profile-Image">
           <div class="user-details">
              <span id="more-details">{{Auth::user()->name}}<i class="fa fa-caret-down"></i></span>
           </div>
        </div>
        <div class="main-menu-content">
           <ul>
              <li class="more-details">
                 {{-- <a href="user-profile.html"><i class="ti-user"></i>View Profile</a> --}}
                 <a href="{{route('change_password')}}"><i class="ti-settings"></i>Change Password</a>
              <a href="{{route('admin.logout')}}"><i class="ti-layout-sidebar-left"></i>Logout</a>
              </li>
           </ul>
        </div>
     </div>
     <div class="p-15 p-b-0">
        <form class="form-material">
           <div class="form-group form-primary">
              {{-- <input type="text" name="footer-email" class="form-control" required="">
              <span class="form-bar"></span>
              <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label> --}}
           </div>
        </form>
     </div>
     <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu active pcoded-trigger">
           <a href="{{route('dashboard')}}" class="waves-effect waves-dark">
           <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
           <span class="pcoded-mtext">Dashboard</span>
           <span class="pcoded-mcaret"></span>
           </a>
           
        </li>

        @if (Gate::check('add-about') || Gate::check('update-about'))
        <li class="">
            <a href="{{route('aboutus')}}" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
            <span class="pcoded-mtext">About Hotel</span>
            <span class="pcoded-mcaret"></span>
            </a>
         </li>
         @endif
         @if (Gate::check('add-menu') || Gate::check('update-menu'))
         <li class="">
            <a href="{{route('menu.index')}}" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-menu"></i><b>D</b></span>
            <span class="pcoded-mtext">Menu</span>
            <span class="pcoded-mcaret"></span>
            </a>
         </li>
         @endif
   
         @if (Gate::check('add-hotel-staffs') || Gate::check('view-hotel-staffs') || Gate::check('update-hotel-staff-page'))
        <li class="pcoded-hasmenu">
           <a href="javascript:void(0)" class="waves-effect waves-dark">
           <span class="pcoded-micon"><i class="ti-view-grid"></i><b>W</b></span>
           <span class="pcoded-mtext">Hotel Staffs</span>
           <span class="pcoded-mcaret"></span>
           </a>
           <ul class="pcoded-submenu">
              @can('add-hotel-staffs')
              <li class="">
                 <a href="{{route('hotelstaff.create')}}" class="waves-effect waves-dark">
                 <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                 <span class="pcoded-mtext">Add Staff</span>
                 <span class="pcoded-mcaret"></span>
                 </a>
              </li>
              @endcan
              @can('view-hotel-staffs')
              <li class=" ">
                 <a href="{{route('hotelstaff.index')}}" class="waves-effect waves-dark">
                 <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                 <span class="pcoded-mtext">View Staff List</span>
                 <span class="pcoded-mcaret"></span>
                 </a>
              </li>
              @endcan
              @can('update-hotel-staff-page')
              <li class=" ">
                  <a href="{{route('staffpage')}}" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext">Staff Page Setting</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               @endcan
              
           </ul>
        </li>
        @endif

        @if (Gate::check('add-hotel-rooms') || Gate::check('view-hotel-rooms') || Gate::check('update-hotel-rooms-page'))
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-home"></i><b>W</b></span>
            <span class="pcoded-mtext">Hotel Rooms</span>
            <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
               @can('add-hotel-rooms')
               <li class="">
                  <a href="{{route('room.create')}}" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext">Add Room</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               @endcan
               @can('view-hotel-rooms')
               <li class=" ">
                  <a href="{{route('room.index')}}" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext">View Room List</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               @endcan
               @can('update-hotel-rooms-page')
               <li class=" ">
                   <a href="{{route('roompage')}}" class="waves-effect waves-dark">
                   <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                   <span class="pcoded-mtext">Room Page Setting</span>
                   <span class="pcoded-mcaret"></span>
                   </a>
                </li>
               @endcan
            </ul>
         </li>
         @endif
         @if (Gate::check('add-events') || Gate::check('view-events') || Gate::check('update-events-page'))
         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-calendar"></i><b>W</b></span>
            <span class="pcoded-mtext">Events</span>
            <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
               @can('add-events')
               <li class="">
                  <a href="{{route('event.create')}}" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext">Add Event</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               @endcan
               @can('view-events')
               <li class=" ">
                  <a href="{{route('event.index')}}" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext">View Event List</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               @endcan
               @can('update-events-page')
               <li class=" ">
                   <a href="{{route('eventpage')}}" class="waves-effect waves-dark">
                   <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                   <span class="pcoded-mtext">Event Page Setting</span>
                   <span class="pcoded-mcaret"></span>
                   </a>
                </li>
                @endcan
               
            </ul>
         </li>
         @endif

         @if (Gate::check('add-sliders') || Gate::check('view-sliders'))
         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-image"></i><b>W</b></span>
            <span class="pcoded-mtext">Slider</span>
            <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
               @can('add-sliders')
               <li class="">
                  <a href="{{route('slider.create')}}" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext">Manage Slider</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               @endcan
               @can('view-sliders')
               <li class=" ">
                  <a href="{{route('slider.index')}}" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext">View Slider Images</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               @endcan
               
            </ul>
         </li>
         @endif

         @if (Gate::check('add-gallery') || Gate::check('view-gallery') || Gate::check('update-gallery-page'))
         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-image"></i><b>W</b></span>
            <span class="pcoded-mtext">Gallery</span>
            <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                  @if (Gate::check('add-gallery') || Gate::check('view-gallery'))
                     <li class="">
                        <a href="{{route('gallery.index')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Manage Gallery</span>
                        <span class="pcoded-mcaret"></span>
                        </a>
                     </li>
                  @endif
                  @can('update-gallery-page')
                  <li class=" ">
                     <a href="{{route('gallerypage')}}" class="waves-effect waves-dark">
                     <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                     <span class="pcoded-mtext">Gallery Page Setting</span>
                     <span class="pcoded-mcaret"></span>
                     </a>
                  </li>
               @endcan
               
            </ul>
         </li>
         @endif
         @if (Gate::check('view-contact') || Gate::check('update-contact-page'))

         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-mobile"></i><b>W</b></span>
            <span class="pcoded-mtext">Contact</span>
            <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
               @can('view-contact')
               <li class="">
               <a href="{{route('contact.index')}}" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext">Contacted Lists</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               @endcan
               @can('update-contact-page')
               <li class=" ">
                  <a href="{{route('contactpage')}}" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext">Contact Page Setting</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               @endcan
               
            </ul>
         </li>
         @endif
     </ul>
     
     <div class="pcoded-navigation-label">Settings</div>
     <ul class="pcoded-item pcoded-left-item">
        <li class="">
           <a href="{{route('sitesetting')}}" class="waves-effect waves-dark">
           <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
           <span class="pcoded-mtext">Site Settings</span>
           <span class="pcoded-mcaret"></span>
           </a>
        </li>

        @if (Gate::check('add-manage-permissions') || Gate::check('view-manage-permissions') || Gate::check('view-manage-roles') || Gate::check('add-manage-roles'))

        <li class="pcoded-hasmenu">
         <a href="javascript:void(0)" class="waves-effect waves-dark">
         <span class="pcoded-micon"><i class="ti-user"></i><b>W</b></span>
         <span class="pcoded-mtext">User Setting</span>
         <span class="pcoded-mcaret"></span>
         </a>
         <ul class="pcoded-submenu">
               @if (Gate::check('add-manage-permissions') || Gate::check('view-manage-permissions'))
                  <li class="">
                     <a href="{{route('permission.create')}}" class="waves-effect waves-dark">
                     <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
                     <span class="pcoded-mtext">Manage Permissions</span>
                     <span class="pcoded-mcaret"></span>
                     </a>
                  </li>
               @endif
                  @can('view-manage-roles')
                  <li class="">
                     <a href="{{route('roles.index')}}" class="waves-effect waves-dark">
                     <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
                     <span class="pcoded-mtext">All Roles</span>
                     <span class="pcoded-mcaret"></span>
                     </a>
                  </li>
                @endcan
              @can('add-manage-roles')
                  <li class="">
                     <a href="{{route('roles')}}" class="waves-effect waves-dark">
                     <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
                     <span class="pcoded-mtext">Add Roles</span>
                     <span class="pcoded-mcaret"></span>
                     </a>
                  </li>
              @endcan
            
            </ul>
         </li>
         @endif

           {{-- <li class="">
           <a href="#" class="waves-effect waves-dark">
           <span class="pcoded-micon"><i class="ti-layout-list-post"></i><b>SI</b></span>
           <span class="pcoded-mtext">Need Support ?</span>
           <span class="pcoded-mcaret"></span>
           </a>
        </li> --}}
     </ul>
  </div>
</nav>