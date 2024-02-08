@extends('admin.layout.app')
@section('title')
    Dashboard - Add Education
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
                    <form action="{{ route('admin_education_submit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
        
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Degree *</label>
                                    <input type="text" class="form-control" name="degree" value="">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Institute * </label>
                                    <input type="text" class="form-control" name="institute" value="">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Time * </label>
                                    <input type="text" class="form-control" name="time" value="">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Item Order * </label>
                                    <input type="text" class="form-control" name="item_order" value="">
                                </div>
    
                                <div class="mb-4">
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