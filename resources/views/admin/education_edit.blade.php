@extends('admin.layout.app')
@section('title')
    Dashboard - Edit Education
@endsection

@section('rightside_button')

<a href="{{ route('admin_education_show') }}" class="btn btn-info"><i class="fas fa-plus"></i> View Education</a>

@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_education_update', $row_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
        
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Degree *</label>
                                    <input type="text" class="form-control" name="degree" value="{{ $row_data->degree }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Institute * </label>
                                    <input type="text" class="form-control" name="institute" value="{{ $row_data->institute }}">
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