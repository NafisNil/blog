@extends('frontend.layout.app')
@section('seo_title')
    {{ $page_data->blog_seo_title }}
@endsection

@section('seo_meta_description')
{{ $page_data->blog_seo_meta_description }}
@endsection
@section('content')

<div class="page-banner" style="background-image: url({{ asset('uploads/'.$page_data->blog_banner) }});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $page_data->blog_heading }}</h1>
            </div>
        </div>
    </div>
</div>



@endsection