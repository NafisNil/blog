@extends('admin.layout.app')
@section('title')
    Dashboard - Edit Experience
@endsection

@section('rightside_button')

<a href="{{ route('admin_experience_show') }}" class="btn btn-info"><i class="fas fa-plus"></i> View Experience</a>

@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_experience_update', $row_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
        
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Company *</label>
                                    <input type="text" class="form-control" name="company" value="{{ $row_data->company }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Designation * </label>
                                    <input type="text" class="form-control" name="designation" value="{{ $row_data->designation }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Time * </label>
                                    <input type="text" class="form-control" name="time" value="{{ $row_data->time }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Item Order * </label>
                                    <input type="text" class="form-control" name="item_order" value="{{ $row_data->item_order }}">
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