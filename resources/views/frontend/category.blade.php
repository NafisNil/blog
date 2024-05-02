@extends('frontend.layout.app')
@section('seo_title')
    {{ $category_detail->category_seo_title }}
@endsection

@section('seo_meta_description')
{{ $category_detail->category_seo_meta_description }}
@endsection
@section('content')

<div class="page-banner" style="background-image: url({{ asset('uploads/'.$page_data->category_banner) }});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $category_detail->category_name }}</h1>
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
                      
                       {{ $posts->links() }}
                    </ul>
                  </nav>
            </div>
        </div>
    </div>
</div>

@endsection