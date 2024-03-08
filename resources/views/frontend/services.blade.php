@extends('frontend.layout.app')

@section('content')


<div class="page-banner" style="background-image: url({{ asset('dist_frontend/images/page-banner.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Services</h1>
            </div>
        </div>
    </div>
</div>


<div class="page-content service">
    <div class="container">
        <div class="row">
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
        @endforeach
        </div>
    </div>
</div>
@endsection