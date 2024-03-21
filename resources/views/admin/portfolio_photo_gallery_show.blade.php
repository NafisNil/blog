@extends('admin.layout.app')
@section('title')
    Dashboard - View Portfolio Photo Gallery
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
                    <h4>  Dashboard - View Portfolio Photo Gallery ({{ $single_portfolio->name }})</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                            <tr>
                                <th>SL</th>
                            
                                <th> Photo</th>
                             
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($photo_gallery_items as $item)
                            <tr>
                               
                               
                          <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset('uploads/'. $item->photo) }}" alt="" class="w_50"></td>
                            
                                <td class="pt_10 pb_10">
                                   
                                    <a href="{{ route('admin_portfolio_photo_gallery_delete', $item->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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
            <h5>Add Photos</h5>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_portfolio_photo_gallery_submit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
        
                            <div class="col-md-9">
                                <div class="col-md-12">
                                    <label class="form-label">Photo *</label>
                                    <img src="{{ asset('uploads/'.@$page_data->photo) }}" alt="" class="profile-photo w_100_p">
                                    <input type="file" class="form-control mt_10" name="photo">
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