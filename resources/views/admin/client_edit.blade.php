@extends('admin.layout.app')
@section('title')
    Dashboard - Edit Client
@endsection

@section('rightside_button')

<a href="{{ route('admin_client_show') }}" class="btn btn-info"><i class="fas fa-plus"></i> View Client</a>

@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_client_update', $row_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label">Photo *</label>
                                <img src="{{ asset('uploads/'.@$row_data->photo) }}" alt="" class="profile-photo w_100_p">
                                <input type="file" class="form-control mt_10" name="photo">
                            </div>
                            <div class="col-md-9">
                                
                                <div class="mb-4">
                                    <label class="form-label">URL </label>
                                    <input type="url" class="form-control" name="url" value="{{ $row_data->url }}">
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