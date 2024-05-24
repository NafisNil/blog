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

</head>
<body>

    <div id="preloader">
        <div id="preloader_inner"></div>
    </div>

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
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="copyright">
                        Copright 2022, company name. All Rights Reserved.
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