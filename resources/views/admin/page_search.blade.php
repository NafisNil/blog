@extends('admin.layout.app')
@section('title')
    Dashboard - Edit Search Page Content
@endsection

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_page_search_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-4">
                                <label class="form-label">Existing Banner</label> <br>
                                <img src="{{ asset('uploads/'.$page_data->search_banner) }}" alt="" class="w-50">
                                <input type="file" class="form-control mt_10" name="search_banner">
                            </div>


                
                            <div class="col-md-9">

                                <div class="mb-4">
                                    <label class="form-label">Search Seo Title </label>
                                    <input type="text" class="form-control" name="search_seo_title" value="{{ @$page_data->search_seo_title }}">
                                </div>
    
                                
    
                                <div class="mb-4">
                                    <label class="form-label">Search Meta Description </label>
                                    <textarea name="search_seo_meta_description" id="" cols="30" rows="10" class="form-control h-100 snote">{{ @$page_data->search_seo_meta_description }}</textarea>
                                  
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