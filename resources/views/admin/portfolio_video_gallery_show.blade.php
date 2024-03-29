@extends('admin.layout.app')
@section('title')
    Dashboard - View Portfolio Video Gallery
@endsection

@section('rightside_button')

    <a href="{{ route('admin_portfolio_show') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Back To Previous </a>

@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-8">
            <h5>All Photos</h5>
            <div class="card">
                <div class="card-body">
                    <h4>  Dashboard - View Portfolio Video Gallery ({{ $single_portfolio->name }})</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                            <tr>
                                <th>SL</th>
                            
                                <th> Video</th>
                                <th> Caption</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($video_gallery_items as $item)
                            <tr>
                               
                               
                          <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="video-iframe-container_1">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $item->video_id }}?si=M_raZDHoIXb1g9wl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                                </td>
                                <td>{{ $item->caption }}</td>
                            
                                <td class="pt_10 pb_10">
                                   
                                    <a href="{{ route('admin_portfolio_video_gallery_delete', $item->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                </td>
                                    
                                
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <h5>Add Video</h5>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_portfolio_video_gallery_submit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
        
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Caption *</label>
                                    <input type="text" class="form-control" name="caption" value="{{ old('caption') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Video ID *</label>
                                    <input type="text" class="form-control" name="video_id" value="{{ old('video_id') }}">
                                </div>
                     
                                <input type="hidden" name="portfolio_id" value="{{ $single_portfolio->id }}">
                                <div class="mb-4 mt-5">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection