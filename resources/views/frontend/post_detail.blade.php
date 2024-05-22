@extends('frontend.layout.app')
@section('seo_title')
    {{ $post_detail->seo_title }}
@endsection

@section('seo_meta_description')
{{ $post_detail->seo_meta_description }}
@endsection
@section('content')

@section('open_graph_data')
<meta property="og:title" content="{{ $post_detail->title }}" />
<meta property="og:description" 
  content="{{ $post_detail->short_description }}" />
<meta property="og:url" content="{{ Route::getCurrentRoute()->getActionName() }}" />
<meta property="og:image" content="{{ asset('uploads/'. $post_detail->photo) }}" />
@endsection

<div class="page-banner" style="background-image: url({{ asset('uploads/'.$post_detail->banner) }});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $post_detail->title }}</h1>
            </div>
        </div>
    </div>
</div>



<div class="page-content blog-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="photo">
                    <img src="{{ asset('uploads/'. $post_detail->photo) }}" alt="">
                </div>
                <div class="sub d-flex justify-content-start">
                    <div class="author"><span>By:</span> Admin</div>
                    <div class="dash"> - </div>
                    <div class="date"><span>On:</span>{{ $post_detail->created_at->format('F d, Y') }} </div>
                    <div class="dash"> - </div>
                    <div class="category"><span>Category:</span> <a href="{{ route('category', $post_detail->rPostCategory->category_slug) }}">{{ $post_detail->rPostCategory->category_name }}</a></div>
                </div>
                <div class="text">
                   {!! nl2br($post_detail->description) !!}
                   {{ @Auth::guard('admin')->user()->name }}
               
                </div>
                <br>
                <div class="share">
                    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=633263d3bfbc4500128cca2f&product=inline-share-buttons" async="async"></script>
                    <div class="sharethis-inline-share-buttons"></div>
                </div>
                <br>
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
                @if ($post_detail->show_comment == '1')
                <div class="comment">

                    <h2>{{ $commentsCount }} Comments</h2>
                    @foreach ($comments as $item)
                    <div class="comment-section">

                        <div class="comment-box d-flex justify-content-start">
                            <div class="left">
                                <img src="https://gravatar.com/avatar/27205e5c51cb03f862138b22bcb5dc20f94a342e744ff6df1b8dc8af3c865109" alt="">
                            </div>
                            <div class="right">
                                <div class="name">{{ $item->person_name }}</div>
                                <div class="date">{{ $item->created_at->format('d M, Y') }}</div>
                                <div class="text">
                                    {!! nl2br($item->person_comment) !!}
                                </div>
                                <div class="reply">
                                    <a href="" data-toggle="modal" data-target="#exampleModal{{ $item->id }}"><i class="fas fa-reply"></i> Reply</a>
                                </div>
                            </div>
                        </div>

                        @foreach ($item->rReply as $value)

                        <div class="comment-box reply-box d-flex justify-content-start">
                            <div class="left">
                                <img src="https://gravatar.com/avatar/27205e5c51cb03f862138b22bcb5dc20f94a342e744ff6df1b8dc8af3c865109?f=y" alt="">
                            </div>
                            <div class="right">
                                <div class="name">{{ $value->person_name }}</div>
                                <div class="date">{{ $value->created_at->format('d M, Y') }}</div>
                                <div class="text">
                                    {!! nl2br($value->person_comment) !!}
                                </div>
                                <div class="reply">
                                    <a href=""><i class="fas fa-reply"></i> Reply</a>
                                </div>
                            </div>
                        </div>
                                                    
                        @endforeach


                    </div>


                   <!-- Button trigger modal -->

                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Reply Here</h5>
                        <button type="button" class="close bg-secondary" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('reply_submit') }}" method="post">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post_detail->id }}">
                                <input type="hidden" name="comment_id" value="{{ $item->id }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Email Address" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="3" placeholder="Comment" name="comment"></textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
              
                    </div>
                    </div>
                </div>
                    @endforeach

                    <div class="mt_40"></div>

                    <h2>Leave Your Comment</h2>
                <form action="{{ route('comment_submit') }}" method="post">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post_detail->id }}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Email Address" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="3" placeholder="Comment" name="comment"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                    
                </div>
                @endif


            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="widget">
                        <h2>Search</h2>
                        <div class="search">
                            <form class="row g-3" action="{{ route('search') }}" method="post">
                                @csrf
                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="Search Anything ..." name="search_text">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget">
                        <h2>Latest Post</h2>
                        <ul>
                            @foreach ($post as $item)
                                <li><a href="{{ route('post', $item->slug) }}">{{ $item->title }}</a></li>
                            @endforeach
                            
                        </ul>
                    </div>
                    <div class="widget">
                        <h2>Categories</h2>
                        <ul>
                            @foreach ($post_categories as $item)
                            <li><a href="{{ route('category', $item->category_slug) }}">{{ $item->category_name }}</a></li>
                            @endforeach
                           
                          
                        </ul>
                    </div>
                    <div class="widget">
                        <h2>Archives</h2>
                        <ul>
                            @foreach ($archives as $item)
                            @if ($item->month == '01')
                            {{$month=  'January'}}
                            @elseif($item->month == '02')
                            {{$month=  'February'}}
                                
                            @elseif($item->month == '03')
                             {{$month=  'March'}}
                                @elseif($item->month == '04')
                                 {{$month=  'April'}}
                                @elseif($item->month == '05')
                                 {{$month=  'May'}}
                                @elseif($item->month == '06')
                                {{$month=  'June'}}
                                @elseif($item->month == '07')
                                {{$month=  'July'}}
                                @elseif($item->month == '08')
                                {{$month=  'August'}}
                                @elseif($item->month == '09')
                                {{$month=  'September'}}
                                @elseif($item->month == '10')
                                {{$month=  'October'}}
                                @elseif($item->month == '11')
                                {{$month=  'November'}}
                                @elseif($item->month == '12')
                                {{$month=  'December'}}
                            @else
                                
                            @endif
                            <li><a href="{{ route('archive', [$item->month, $item->year]) }}">{{ $month }}  {{ $item->year }} ({{ $item->total_post }})</a></li>
                            @endforeach
                           
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection