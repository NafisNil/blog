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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
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
                               
                               
                          
                                <td><img src="{{ asset('uploads/'. $item->photo) }}" alt="" class="w_50"></td>
                                <td>
                                    <a href="{{ route('admin_portfolio_photo_gallery_show') }}" class="btn btn-success btn-sm w-100-p">Photo Gallery</a>
                                    <a href="" class="btn btn-success btn-sm w-100-p">Video Gallery</a>
                                </td>
                                <td class="pt_10 pb_10">
                                    <a href="{{ route('admin_portfolio_edit', $item->id) }}" class="btn btn-info" >Edit</a>
                                    <a href="{{ route('admin_portfolio_delete', $item->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                </td>
                                    
                                
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection