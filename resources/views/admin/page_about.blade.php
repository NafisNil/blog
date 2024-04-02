@extends('admin.layout.app')
@section('title')
    Dashboard - Edit About Page Content
@endsection

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_page_about_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-4">
                                <label class="form-label">Existing Banner</label> <br>
                                <img src="{{ asset('uploads/'.$page_data->about_banner) }}" alt="" class="w-50">
                                <input type="file" class="form-control mt_10" name="about_banner">
                            </div>


                            <div class="mb-4">
                                <label class="form-label">Existing Photo</label> <br>
                                @if ($page_data->about_photo != '')
                                <img src="{{ asset('uploads/'.$page_data->about_photo) }}" alt="" class="w-50">
                                <br>
                                <a href="{{ route('admin_page_about_photo_delete') }}" >Remove</a>
                                @endif
                              
                                <input type="file" class="form-control mt_10" name="about_photo">
                            </div>
                
                            <div class="col-md-9">
                      
                                <div class="mb-4">
                                    <label class="form-label">Heading </label>
                                    <input type="text" class="form-control" name="about_heading" value="{{ @$page_data->about_heading }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Description </label>
                               
                                    <textarea name="about_description" class="form-control snote h-100"   cols="30" rows="10">{{ @$page_data->about_description }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">about Seo Title </label>
                                    <input type="text" class="form-control" name="about_seo_title" value="{{ @$page_data->about_seo_title }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">about Meta Description </label>
                                    <textarea name="about_seo_meta_description" id="" cols="30" rows="10" class="form-control h-100">{{ @$page_data->about_seo_meta_description }}</textarea>
                                  
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