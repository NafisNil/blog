@extends('admin.layout.app')
@section('title')
    Dashboard - Edit Testimonial
@endsection

@section('rightside_button')

<a href="{{ route('admin_testimonial_show') }}" class="btn btn-info"><i class="fas fa-plus"></i> View Testimonial</a>

@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_testimonial_update', $row_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label">Photo *</label>
                                <img src="{{ asset('uploads/'.@$row_data->photo) }}" alt="" class="profile-photo w_100_p">
                                <input type="file" class="form-control mt_10" name="photo">
                            </div>
                            <div class="col-md-9">
                                
                                <div class="mb-4">
                                    <label class="form-label">Name *</label>
                                    <input type="text" class="form-control" name="name" value="{{ $row_data->name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Designation * </label>
                                    <input type="text" class="form-control" name="designation" value="{{ $row_data->designation }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Comment * </label>
                                    <textarea name="comment" id="" cols="30" rows="10" class="form-control h-100">{{ $row_data->comment }}</textarea>
                                </div>
                             
                          
    
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
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