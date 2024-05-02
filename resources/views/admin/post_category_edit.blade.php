@extends('admin.layout.app')
@section('title')
    Dashboard - Edit Post Category
@endsection

@section('rightside_button')

    <a href="{{ route('admin_post_category_show') }}" class="btn btn-info"><i class="fas fa-plus"></i> View Post Category</a>

@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_post_category_update', $row_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
        
                            <div class="col-md-9">
                 
                                <div class="mb-4">
                                    <label class="form-label">Category Name *</label>
                                    <input type="text" class="form-control" name="category_name" value="{{ $row_data->category_name }}">
                                </div>


                                              
                                <div class="mb-4">
                                    <label class="form-label">SEO title </label>
                                    <input type="text" class="form-control" name="category_seo_title" value="{{ $row_data->category_seo_title }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">SEO Meta Description </label>
                                    <textarea name="category_seo_meta_description" id="" cols="30" rows="10" class="form-control h-100">{{ $row_data->category_seo_meta_description }}</textarea>
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