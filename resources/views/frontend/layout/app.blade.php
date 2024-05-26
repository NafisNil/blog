<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('seo_title')</title>
    @yield('open_graph_data')
    @include('frontend.layout.styles')

    <link rel="icon" type="image/png" href="{{ asset('uploads/'.$global_setting_data->favicon) }}">
    <meta name="description" value="@yield('seo_meta_description')">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        nav .nav-item .nav-link.active,
        nav .nav-item .nav-link:hover,
        .home-banner .left .button a,
        .home-about .right h3,
        .home-about .contact-info i,
        .home-skill .heading h2,
        .home-qualification .heading h2,
        .home-qualification h2.title,
        .service .heading h2,
        .service .item .icon i,
        .portfolio .heading h2,
        .portfolio .filter ul li,
        .home-testimonial .heading h2,
        .home-qualification .item:before,
        .blog .heading h2,
        .home-client .heading h2,
        .footer .social ul li:hover a,
        .sidebar .widget h2,
        .sidebar .widget ul li a:hover,
        .sidebar .widget ul li:hover::before,
        .sidebar .widget .project-detail .item .name,
        .blog .page-link,
        .comment h2,
        .comment .comment-box .right .reply a,
        .contact .item .icon
        {
            color: {{ $global_setting_data->theme_color }}
        }

        .home-banner,
        .home-about .social ul li,
        .home-skill .progress-bar,
        .service .item .button a,
        .home-qualification .item .v-line,
        .testimonial-carousel .owl-dot.active span,
        .blog .item .button a,
        .scrollup i,
        .footer .social ul li,
        .portfolio-detail .photo-carousel .owl-nav button.owl-next, .portfolio-detail .photo-carousel .owl-nav button.owl-prev,
        .sidebar .widget .search button,
        .blog-detail .sub .category a,
        .comment button,
        .contact .form-map button
       {
            background: {{ $global_setting_data->theme_color }}
        }

        .portfolio .filter ul li{
            background-color: #cad7da; 
        }

        .sidebar .widget .search button{
            border-color: aquamarine;
        }

  
    </style>
</head>
<body>

    @if ($global_setting_data->preloader_status == 'Show')
    <div id="preloader">
        <div id="preloader_inner"></div>
    </div>
    @endif


@include('frontend.layout.nav')


@yield('content')

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo d-flex justify-content-center">
                        <img src="{{ asset('uploads/'.$global_setting_data->logo_footer) }}" alt="">
                    </div>
                    <div class="description">
                        {!! nl2br($global_setting_data->footer_text) !!}
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href="{{ @$global_setting_data->footer_icon_1_url }}"><i class="{{ @$global_setting_data->footer_icon_1 }}"></i></a></li>
                            <li><a href="{{ @$global_setting_data->footer_icon_2_url }}"><i class="{{ @$global_setting_data->footer_icon_2 }}"></i></a></li>
                            <li><a href="{{ @$global_setting_data->footer_icon_3_url }}"><i class="{{ @$global_setting_data->footer_icon_3 }}"></i></a></li>
                            <li><a href="{{ @$global_setting_data->footer_icon_4_url }}"><i class="{{ @$global_setting_data->footer_icon_4 }}"></i></a></li>
                        </ul>
                    </div>
                    <div class="copyright">
                        {{ @$global_setting_data->footer_copyright_text }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="" class="scrollup">
        <i class="fas fa-chevron-up"></i>
    </a>

    
@include('frontend.layout.scripts')

@if ($errors->any())
    @foreach ($errors->all() as $error)
    <script>
        iziToast.error({
            title: '',
            position: 'topRight',
            message: '{{ $error }}',
        });
    </script>
    @endforeach
@endif

@include('admin.layout.scripts_footer')
@if (session()->get('error'))
    <script>
        iziToast.error({
            title: '',
            position: 'topRight',
            message: '{{ session()->get('error') }}',
        });
    </script>
@endif
    
</body>
</html>