<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="{{ Route('usermanagement') }}">
                <img src="{{asset('logo/aglc-logo.png')}}" alt="AGLC" style="width: 200px; height: 65px;">
            </a>
        </div>


        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>

            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                                                   src="{{ asset('assets/images/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                                                              aria-hidden="true"></i></div>
                    </li>

                    <li class="sidebar-list mt-4">
                        <a class="sidebar-link sidebar-title">
                            <span class=""> <i data-feather="users"></i> User Management</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ Route('usermanagement') }}">
                                    Users </a></li>
                            <li><a href="{{ Route('roles.index') }}">
                                    Roles</a></li>
                            <li><a href="{{ Route('permissions.index') }}">
                                    Permissions</a></li>
                        </ul>

                    </li>
                    <li class="sidebar-list">
                        <a href="{{ route('courses.index') }}" class="sidebar-link">
                            <span> <i data-feather="cast"></i> Courses</span></a>
                    </li>
                    <li class="sidebar-list">
                        <a href="{{ route('certificates.index') }}" class="sidebar-link">
                            <span> <i data-feather="book-open"></i> Certificates</span></a>
                    </li>
                    <li class="sidebar-list">
                        <a href="{{ route('sliders.index') }}" class="sidebar-link">
                            <span class=""> <i data-feather="camera"></i> Slider</span></a>
                    </li>
                    <li class="sidebar-list">
                        <a href="{{ route('mentors.index') }}" class="sidebar-link">
                            <span class=""> <i data-feather="user-check"></i> Mentors</span></a>
                    </li>
                    <li class="sidebar-list">
                        <a href="{{ route('employment_partners.index') }}" class="sidebar-link">
                            <span class=""> <i data-feather="briefcase"></i> Employment Partners</span></a>
                    </li>
                    <li class="sidebar-list">
                        <a href="{{ route('academics.index') }}" class="sidebar-link">
                            <span class=""> <i data-feather="bookmark"></i> Academic Collaboration</span></a>
                    </li>
                    <li class="sidebar-list">
                        <a href="{{ route('placements.index') }}" class="sidebar-link">
                            <span class=""> <i data-feather="airplay"></i> Placements</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

