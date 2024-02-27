<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Admin Panel</a>
         
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('/admin/home') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_home') }}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>

            <li class="nav-item dropdown {{ Request::is('/admin/home-banner') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Home Page</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('/admin/home-banner') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_home_banner') }}"><i class="fas fa-angle-right"></i> Banner Section</a></li>
                    <li class="{{ Request::is('/admin/home-about') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_home_about') }}"><i class="fas fa-angle-right"></i> About Section</a></li>
                    <li class="{{ Request::is('/admin/home-skill') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_home_skill') }}"><i class="fas fa-angle-right"></i> Skill Section</a></li>
                    <li class="{{ Request::is('/admin/home-qualification') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_home_qualification') }}"><i class="fas fa-angle-right"></i> Qualification Section</a></li>
                    <li class="{{ Request::is('/admin/home-counter') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_home_counter') }}"><i class="fas fa-angle-right"></i> Counter Section</a></li>
                    <li class="{{ Request::is('/admin/home-testimonial') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_home_testimonial') }}"><i class="fas fa-angle-right"></i> Testimonial Section</a></li>
                    <li class="{{ Request::is('/admin/home-client') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_home_client') }}"><i class="fas fa-angle-right"></i> Client Section</a></li>
                </ul>
            </li>

            <li class=""><a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i> <span>Setting</span></a></li>

            <li class=""><a class="nav-link" href="form.html"><i class="fas fa-hand-point-right"></i> <span>Form</span></a></li>

            <li class=""><a class="nav-link" href="{{ route('admin_skill_show') }}"><i class="fas fa-hand-point-right"></i> <span>Skills</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('admin_education_show') }}"><i class="fas fa-hand-point-right"></i> <span>Education</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('admin_experience_show') }}"><i class="fas fa-hand-point-right"></i> <span>Experience</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('admin_testimonial_show') }}"><i class="fas fa-hand-point-right"></i> <span>Testimonial</span></a></li>
            <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-hand-point-right"></i> <span>Invoice</span></a></li>

        </ul>
    </aside>
</div>