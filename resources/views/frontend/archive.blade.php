@extends('frontend.layout.app')
@section('seo_title')
    {{ $page_data->category_seo_title }}
@endsection

@section('seo_meta_description')
{{ $page_data->category_seo_meta_description }}
@endsection
@section('content')

<div class="page-banner" style="background-image: url({{ asset('uploads/'.$page_data->archive_banner) }});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($month == '01')
                            {{$month_full=  'January'}}
                            @elseif($month == '02')
                            {{$month_full=  'February'}}
                                
                            @elseif($month == '03')
                             {{$month_full=  'March'}}
                                @elseif($month == '04')
                                 {{$month_full=  'April'}}
                                @elseif($month == '05')
                                 {{$month_full=  'May'}}
                                @elseif($month == '06')
                                {{$month_full=  'June'}}
                                @elseif($month == '07')
                                {{$month_full=  'July'}}
                                @elseif($month == '08')
                                {{$month_full=  'August'}}
                                @elseif($month == '09')
                                {{$month_full=  'September'}}
                                @elseif($month == '10')
                                {{$month_full=  'October'}}
                                @elseif($month == '11')
                                {{$month_full=  'November'}}
                                @elseif($month == '12')
                                {{$month_full=  'December'}}
                            @else
                                
                            @endif
                <h1>All post of: {{ $month_full }} -  {{ $year }}</h1>
            </div>
        </div>
    </div>
</div>

<div class="page-content blog">
    <div class="container">
        <div class="row">
            @if (!$posts->count())
                <span style="color: cadetblue">No post found!</span>
            @endif
            @foreach ($posts as $item)
            @php
                if($item->created_at->format('m') != $month)
                    continue;
            @endphp
            <div class="col-md-4">
                <div class="item">
                    <div class="photo">
                        <img src="{{ asset('uploads/'. $item->photo) }}" alt="">
                    </div>
                    <div class="text">
                        <h3>{{ $item->title }}</h3>
                        <p>
                            {!! nl2br($item->short_description) !!}
                        </p>
                        <div class="button">
                            <a href="{{ route('post', $item->slug) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

    
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      
                  
                    </ul>
                  </nav>
            </div>
        </div>
    </div>
</div>

@endsection