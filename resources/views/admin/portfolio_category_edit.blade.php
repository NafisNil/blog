@extends('admin.layout.app')
@section('title')
    Dashboard - Edit Portfolio Category
@endsection

@section('rightside_button')

    <a href="{{ route('admin_portfolio_category_show') }}" class="btn btn-info"><i class="fas fa-plus"></i> View Portfolio Category</a>

@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_portfolio_category_update', $row_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
        
                            <div class="col-md-9">
                 
                                <div class="mb-4">
                                    <label class="form-label">Category Name *</label>
                                    <input type="text" class="form-control" name="category_name" value="{{ $row_data->category_name }}">
                                </div>
                     
                                <div class="mb-4">
                          
    
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