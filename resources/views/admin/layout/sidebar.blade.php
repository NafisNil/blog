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
                    <li class="{{ Request::is('/admin/home-service') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_home_service') }}"><i class="fas fa-angle-right"></i> Service Section</a></li>
                    <li class="{{ Request::is('/admin/home-portfolio') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_home_portfolio') }}"><i class="fas fa-angle-right"></i> Portfolio Section</a></li>
                    <li class="{{ Request::is('/admin/home-seo') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_home_seo') }}"><i class="fas fa-angle-right"></i> Seo Section</a></li>
                    <li class="{{ Request::is('/admin/page-blog') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_home_blog') }}"><i class="fas fa-angle-right"></i> Blog Section</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ Request::is('/admin/home-banner') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Page Items</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('/admin/page-services') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_page_services') }}"><i class="fas fa-angle-right"></i> Service Section</a></li>
                    <li class="{{ Request::is('/admin/page-portfolio') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_page_portfolio') }}"><i class="fas fa-angle-right"></i> Portfolio Section</a></li>
                    <li class="{{ Request::is('/admin/page-about') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_page_about') }}"><i class="fas fa-angle-right"></i> About Section</a></li>
                    <li class="{{ Request::is('/admin/page-contact') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_page_contact') }}"><i class="fas fa-angle-right"></i> Contact Section</a></li>
                    <li class="{{ Request::is('/admin/page-blog') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_page_blog') }}"><i class="fas fa-angle-right"></i> Blog Section</a></li>
                    <li class="{{ Request::is('/admin/page-category') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_page_category') }}"><i class="fas fa-angle-right"></i> Category Section</a></li>
                    <li class="{{ Request::is('/admin/page-archive') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_page_archive') }}"><i class="fas fa-angle-right"></i> Archive Section</a></li>
                    <li class="{{ Request::is('/admin/page-search') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_page_search') }}"><i class="fas fa-angle-right"></i> Search Section</a></li>
     
                </ul>
            </li>

            <li class=""><a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i> <span>Setting</span></a></li>

            <li class=""><a class="nav-link" href="form.html"><i class="fas fa-hand-point-right"></i> <span>Form</span></a></li>

            <li class=""><a class="nav-link" href="{{ route('admin_skill_show') }}"><i class="fas fa-hand-point-right"></i> <span>Skills</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('admin_education_show') }}"><i class="fas fa-hand-point-right"></i> <span>Education</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('admin_experience_show') }}"><i class="fas fa-hand-point-right"></i> <span>Experience</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('admin_testimonial_show') }}"><i class="fas fa-hand-point-right"></i> <span>Testimonial</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('admin_client_show') }}"><i class="fas fa-hand-point-right"></i> <span>Client</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('admin_service_show') }}"><i class="fas fa-hand-point-right"></i> <span>Services</span></a></li>
           
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Portfolio</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('/admin/portfolio-category') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_portfolio_category_show') }}"><i class="fas fa-angle-right"></i>Category</a></li>
                    <li class="{{ Request::is('/admin/portfolio') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_portfolio_show') }}"><i class="fas fa-angle-right"></i>Portfolio</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Blog</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('/admin/post-category') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_post_category_show') }}"><i class="fas fa-angle-right"></i>Category</a></li>
                    <li class="{{ Request::is('/admin/post') ? 'active':'' }}"><a class="nav-link" href="{{ route('admin_post_show') }}"><i class="fas fa-angle-right"></i>Post</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>