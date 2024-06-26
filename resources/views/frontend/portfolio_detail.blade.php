@extends('frontend.layout.app')
@section('seo_title')
    {{ $portfolio_detail->seo_title }}
@endsection

@section('seo_meta_description')
{{ $portfolio_detail->seo_meta_description }}
@endsection
@section('content')


<div class="page-banner" style="background-image: url({{ asset('uploads/'.$portfolio_detail->banner) }});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $portfolio_detail->name }}</h1>
            </div>
        </div>
    </div>
</div>


<div class="page-content portfolio-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="owl-carousel owl-theme photo-carousel">
                    <div class="item">
                        <div class="photo">
                            <img src="{{ asset('uploads/'.$portfolio_detail->photo) }}" alt="">
                        </div>
                    </div>
                    @foreach ($portfolio_photos as $item)
                    <div class="item">
                        <div class="photo">
                            <img src="{{ asset('uploads/'.$item->photo) }}" alt="">
                        </div>
                    </div>
                    @endforeach

 
                </div>
                <div class="text">
                   {!!  nl2br(@$portfolio_detail->description)!!}
                </div>
                
                @foreach ($portfolio_videos as $item)
                <div class="video">
                    <h3>{{ $item->caption }}</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $item->video_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                @endforeach

            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="widget">
                        <h2>All Work Portfolios</h2>
                        <ul>
                            @foreach ($portfolio as $item)
                            <li><a href="{{ route('portfolio_detail', $item->slug) }}">{{ $item->name }}</a></li>
                            @endforeach
                           
                  
                        </ul>
                    </div>
                    <div class="widget">
                        <h2>Project Detail</h2>
                        <div class="project-detail">
                            <div class="item">
                                <div class="name">Client Name</div>
                                <div class="value">{{ @$portfolio_detail->project_client }}</div>
                            </div>
                            <div class="item">
                                <div class="name">Company Name</div>
                                <div class="value">{{ @$portfolio_detail->project_company }}</div>
                            </div>
                            <div class="item">
                                <div class="name">Start Date</div>
                                <div class="value">{{ @$portfolio_detail->project_start_date }}</div>
                            </div>
                            <div class="item">
                                <div class="name">End Date</div>
                                <div class="value">{{ @$portfolio_detail->project_end_date }}</div>
                            </div>
                            <div class="item">
                                <div class="name">Project Cost</div>
                                <div class="value">{{ @$portfolio_detail->project_cost }}</div>
                            </div>
                            <div class="item">
                                <div class="name">Website URL</div>
                                <div class="value"><a href="{{ @$portfolio_detail->project_website }}">{{ @$portfolio_detail->project_website }}</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection