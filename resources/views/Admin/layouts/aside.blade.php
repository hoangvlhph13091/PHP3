<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item {{ request()->routeIs('category*') ? 'm-menu__item--active' : '' }} " aria-haspopup="true">
                <a href="{{route('category')}}" id="menu_item" class="m-menu__link  ">
                    <i class="m-menu__link-icon fa fa-chart-bar "></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">category</span>
                </a>
            </li>
            {{-- @role('giao_vu|admin') --}}
            <li class="m-menu__item {{ request()->routeIs('product*') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                <a href="{{route('product')}}" id="menu_item" class="m-menu__link ">
                    <i class="m-menu__link-icon fa 	fa-file-excel"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">product</span>
                </a>
            </li>
            {{-- @endrole

            @role('teacher') --}}
            {{-- <li class="m-menu__item {{ request()->routeIs('preview*') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                <a href="" id="menu_item" class="m-menu__link">
                    <i class="m-menu__link-icon fa 	fa-chalkboard-teacher"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Giáo Viên Bộ Môn Phê Duyệt</span>
                </a>
            </li> --}}
             {{-- @endrole
           
             @role('major_head_teacher') --}}
             {{-- <li class="m-menu__item {{ request()->routeIs('final-preview*') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                <a href="" id="menu_item" class="m-menu__link ">
                    <i class="m-menu__link-icon fa 	fa-user-check"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Chủ Nhiệm Bộ Môn Phê Duyệt</span>
                </a>
            </li> --}}
             {{-- @endrole
             @role('giao_vu|admin') --}}
             {{-- <li class="m-menu__item {{ request()->routeIs('chuyen-nganh*') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                 <a href="" id="menu_item" class="m-menu__link ">
                     <i class="m-menu__link-icon fa fa-project-diagram"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Chuyên Ngành</span>
                 </a>
             </li> --}}
             {{-- @endrole
             @role('admin') --}}
             {{-- <li class="m-menu__item {{ request()->routeIs('bo-mon*') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                 <a href="" id="menu_item" class="m-menu__link ">
                     <i class="m-menu__link-icon fa fa-briefcase"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Bộ Môn</span>
                 </a>
             </li> --}}
             {{-- @endrole
             @role('giao_vu|admin') --}}
             {{-- <li class="m-menu__item {{ request()->routeIs('mon-hoc*') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                 <a href="" id="menu_item" class="m-menu__link ">
                     <i class="m-menu__link-icon fa fa-book"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Môn Học</span>
                 </a>
             </li> --}}
             {{-- @endrole
             @role('admin') --}}
             {{-- <li class="m-menu__item {{ request()->routeIs('giao-vu*') ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                 <a href="" id="menu_item" class="m-menu__link ">
                     <i class="m-menu__link-icon fa fa-address-book"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Giáo Vụ</span>
                 </a>
             </li> --}}
             {{-- @endrole --}}
        </ul>
    </div>
    

    <!-- END: Aside Menu -->
    {{-- update dinh --}}
</div>
