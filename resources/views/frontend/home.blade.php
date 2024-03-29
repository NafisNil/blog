@extends('frontend.layout.app')

@section('content')
<div class="home-banner">
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-md-6 d-flex align-items-center">
                <div class="left">
                    <h4>{{ @$page_data->banner_title }}</h4>
                    <h2>{{ @$page_data->banner_person_name }}</h2>
                    <h3>{!! @$page_data->banner_person_designation !!}</h3>
                    <p>
                        {{ @$page_data->banner_description }}
                    </p>
                    <div class="button">
                        <a href="{{ @$page_data->banner_button_url }}" class="btn btn-primary">{{ @$page_data->banner_button_text }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right">
                    <img src="{{ asset('uploads/' . $page_data->banner_photo) }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@if ($page_data->about_status == '1')

<div class="home-about">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left wow fadeInLeft">
                    <img src="{{ asset('uploads/' . $page_data->about_photo) }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="right wow fadeInRight">
                    <h3>{{ @$page_data->about_subtitle }}</h3>
                    <h2>{{ @$page_data->about_title }}</h2>
                  {!!  nl2br(@$page_data->about_description) !!}
                    <div class="contact-info">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td><i class="far fa-user"></i></td>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td>{{ @$page_data->about_person_name}}</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-phone"></i></td>
                                    <td>Phone</td>
                                    <td>:</td>
                                    <td>{{ @$page_data->about_person_phone}}</td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-envelope"></i></td>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ @$page_data->about_person_email}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="social">
                        <h3>Find me on social media:</h3>
                        <ul>
                            <li><a href="{{ @$page_data->about_icon1_url }}"><i class="{{ @$page_data->about_icon1}}"></i></a></li>
                            <li><a href="{{ @$page_data->about_icon2_url }}"><i class="{{ @$page_data->about_icon2}}"></i></a></li>
                            <li><a href="{{ @$page_data->about_icon3_url }}"><i class="{{ @$page_data->about_icon3}}"></i></a></li>
                            <li><a href="{{ @$page_data->about_icon4_url }}"><i class="{{ @$page_data->about_icon4}}"></i></a></li>
                            <li><a href="{{ @$page_data->about_icon5_url }}"><i class="{{ @$page_data->about_icon5}}"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endif

@if ($page_data->skill_status == '1')

<div class="home-skill">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>{{ @$page_data->skill_title }}</h2>
                <h3>{{ @$page_data->skill_subtitle }}</h3>
            </div>
            <div class="col-md-6 wow fadeInLeft">
                @php
                    $i = 0;
                @endphp
                @foreach ($left_skill as $item)
                @php
                    $i++;
                @endphp
                <div class="progress-text">{{ $item->name }}</div>
                <div class="progress">
                    <div class="progress-bar anim_left{{ $i }} w-80-p w-0" role="progressbar" aria-label="Example with label" aria-valuenow={{ $item->percentage }}" aria-valuemin="0" aria-valuemax="100">{{ $item->percentage }}%</div>
                </div>                    
                @endforeach

            </div>
            <div class="col-md-6 wow fadeInRight">
                @php
                $i = 0;
            @endphp
            @foreach ($right_skill as $item)
            @php
                $i++;
            @endphp
            <div class="progress-text">{{ $item->name }}</div>
            <div class="progress">
                <div class="progress-bar anim_right{{ $i }} w-80-p w-0" role="progressbar" aria-label="Example with label" aria-valuenow={{ $item->percentage }}" aria-valuemin="0" aria-valuemax="100">{{ $item->percentage }}%</div>
            </div>                    
            @endforeach

            </div>
        </div>
    </div>
</div>
    
@endif

<div class="home-qualification">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>{{ $page_data->qualification_subtitle}}</h2>
                <h3>{{ $page_data->qualification_title}}</h3>
            </div>
            <div class="col-md-6">
                <h2 class="title"><i class="fas fa-graduation-cap"></i> {{ $page_data->education_title}}</h2>
                <div class="inner">
                    @foreach ($education as $item)
                    <div class="item wow fadeInUp">
                        <h3>{{ $item->degree }}</h3>
                        <h4>{{ $item->institute }}</h4>
                        <div class="time"><i class="far fa-clock"></i> {{ $item->time }}</div>
                        <div class="v-line"></div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="title"><i class="fas fa-award"></i> {{ $page_data->experience_title}}</h2>
                <div class="inner">
                    @foreach ($experience as $item)

                    <div class="item wow fadeInUp">
                        <h3>{{ $item->company }}</h3>
                        <h4>{{ $item->designation }}</h4>
                        <div class="time"><i class="far fa-clock"></i> {{ $item->time }}</div>
                        <div class="v-line"></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@if ($page_data->service_status == '1')
<div class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>Services</h2>
                <h3>What Services I Offer</h3>
            </div>

            @php
                $i = 1;
            @endphp
            @foreach ($service as $item)
            @php
                if ($i%3 == 1) {
                    # code...
                    $anim = "fadeInLeft";
                }elseif ($i%3 == 2) {
                    # code...
                    $anim = "fadeInUp";
                }elseif ($i%3 == 0) {
                    # code...
                    $anim = "fadeInRight";
                }

                $i++;
            @endphp
            <div class="col-lg-4 col-md-6 wow {{ $anim }}">
                <div class="item">
                    <div class="icon"><i class="{{ $item->icon }}"></i></div>
                    <h3>{{ $item->name }}</h3>
                    <p>
                        {!! nl2br($item->short_description) !!}
                    </p>
                    <div class="button">
                        <a href="{{ route('service_detail', $item->slug) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</div>
@endif

@if ($page_data->counter_status == '1')
<div class="home-counter" style="background-image:url({{ asset('uploads/'.$page_data->counter_background) }})">
    <div class="container">
        <div class="row counter-items">
            <div class="col-md-3 counter-item">
                <div class="counter">{{ $page_data->counter1_number }}</div>
                <div class="text">{{ $page_data->counter1_name}}</div>
            </div>
            <div class="col-md-3 counter-item">
                <div class="counter">{{ $page_data->counter2_number }}</div>
                <div class="text">{{ $page_data->counter2_name }}</div>
            </div>
            <div class="col-md-3 counter-item">
                <div class="counter">{{ $page_data->counter3_number }}</div>
                <div class="text">{{ $page_data->counter3_name }}</div>
            </div>
            <div class="col-md-3 counter-item">
                <div class="counter">{{ $page_data->counter4_number }}</div>
                <div class="text">{{ $page_data->counter4_name }}</div>
            </div>
        </div>
    </div>
</div>
@endif

@if ($page_data->portfolio_status == '1')
<div class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>{{ @$page_data->portfolio_title }}</h2>
                <h3>{{ @$page_data->portfolio_subtitle }}</h3>
            </div>
            <div class="col-md-12">
                <div class="filter">
                    <ul>
                        <li data-filter="*">All</li>
                        <li data-filter=".web_design">Web Design</li>
                        <li data-filter=".web_development">Web Development</li>
                        <li data-filter=".digital_marketing">Digital Marketing</li>
                    </ul>
                </div>
                <div class="filter-items">
                    <div class="filter-item web_design">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_frontend') }}/images/design_1.jpg" alt=""></a></div>
                            <div class="text">
                                <h2>Design Project 1</h2>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item web_development">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_frontend') }}/images/development_1.jpg" alt=""></a></div>
                            <div class="text">
                                <h2>Development Project 1</h2>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item web_design">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_frontend') }}/images/design_2.jpg" alt=""></a></div>
                            <div class="text">
                                <h2>Design Project 2</h2>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item digital_marketing">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_frontend') }}/images/marketing_1.jpg" alt=""></a></div>
                            <div class="text">
                                <h2>Marketing Project 1</h2>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item digital_marketing">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_frontend') }}/images/marketing_2.jpg" alt=""></a></div>
                            <div class="text">
                                <h2>Marketing Project 2</h2>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item web_development">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_frontend') }}/images/development_2.jpg" alt=""></a></div>
                            <div class="text">
                                <h2>Development Project 2</h2>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item web_design">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_frontend') }}/images/design_3.jpg" alt=""></a></div>
                            <div class="text">
                                <h2>Design Project 3</h2>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item web_development">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_frontend') }}/images/development_3.jpg" alt=""></a></div>
                            <div class="text">
                                <h2>Development Project 3</h2>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item digital_marketing">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_frontend') }}/images/marketing_3.jpg" alt=""></a></div>
                            <div class="text">
                                <h2>Marketing Project 3</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if ($page_data->testimonial_status == '1')
<div class="home-testimonial" style="background-image:url({{ asset('uploads/'.$page_data->testimonial_background) }})">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>{{ @$page_data->testimonial_subtitle  }}</h2>
                <h3>{{ @$page_data->testimonial_title  }}</h3>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme testimonial-carousel">
                    @foreach ($testimonial as $item)
                    <div class="item">
                        <div class="photo d-flex justify-content-center">
                            <img src="{{ asset('uploads/'.$item->photo) }}" alt="">
                        </div>
                        <div class="comment">
                            {!! nl2br($item->comment) !!}
                        </div>
                        <div class="person-detail">
                            <h3>{{ $item->name }}</h3>
                            <h4>{{ $item->designation }}</h4>
                        </div>
                    </div>
                    @endforeach
                
          
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>Latest Blog</h2>
                <h3>Updated Posts Are Listed</h3>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="item">
                    <div class="photo">
                        <img src="{{ asset('dist_frontend') }}/images/post-1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Blog Post Title</h3>
                        <p>
                            Lorem ipsum dolor sit amet, sit vidit soluta assueverit ei. Pro ut case abhorreant persequeris. Mei at adhuc invenire. Id purto eloquentiam duo, ne erroribus rationibus mel.
                        </p>
                        <div class="button">
                            <a href="blog-detail.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="item">
                    <div class="photo">
                        <img src="{{ asset('dist_frontend') }}/images/post-2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Blog Post Title</h3>
                        <p>
                            Lorem ipsum dolor sit amet, sit vidit soluta assueverit ei. Pro ut case abhorreant persequeris. Mei at adhuc invenire. Id purto eloquentiam duo, ne erroribus rationibus mel.
                        </p>
                        <div class="button">
                            <a href="blog-detail.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="item">
                    <div class="photo">
                        <img src="{{ asset('dist_frontend') }}/images/post-3.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Blog Post Title</h3>
                        <p>
                            Lorem ipsum dolor sit amet, sit vidit soluta assueverit ei. Pro ut case abhorreant persequeris. Mei at adhuc invenire. Id purto eloquentiam duo, ne erroribus rationibus mel.
                        </p>
                        <div class="button">
                            <a href="blog-detail.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($page_data->client_status == '1')
<div class="home-client">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>{{ $page_data->client_subtitle }}</h2>
                <h3>{{ $page_data->title }}</h3>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme client-carousel">
                    @foreach ($client as $item)
                    <div class="item">
                        @if ($item->url != '')
                             <a href="{{ $item->url }}"> <img src="{{ asset('uploads/'. $item->photo) }}" alt=""></a>
                        @else
                                <img src="{{ asset('uploads/'. $item->photo) }}" alt="">
                        @endif
                         
                    </div>
                    @endforeach
                   

                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection

@section('skill_animation')
@php
    $i = 0;
@endphp
@foreach ($left_skill as $item)
@php
    $i++;
@endphp
    <script>
        $(".anim_left{{ $i }}").animate({width:"{{ $item->percentage }}"}, 2500);
    </script>    
@endforeach


@php
    $i = 0;
@endphp
@foreach ($right_skill as $item)
@php
    $i++;
@endphp
    <script>
        $(".anim_right{{ $i }}").animate({width:"{{ $item->percentage }}"}, 2500);
    </script>    
@endforeach
@endsection