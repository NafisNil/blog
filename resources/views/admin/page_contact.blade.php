@extends('admin.layout.app')
@section('title')
    Dashboard - Edit Contact Page Content
@endsection

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                   
                    <form action="{{ route('admin_page_contact_update') }}" method="post" enctype="multipart/form-data">
                       
                        @csrf
                        <div class="row">
         
                            <div class="mb-4">
                                <label class="form-label">Existing Banner</label> <br>
                                <img src="{{ asset('uploads/'.$page_data->contact_banner) }}" alt="" class="w-50">
                                <input type="file" class="form-control mt_10" name="contact_banner">
                            </div>
                
                            <div class="col-md-9">
                      
                                <div class="mb-4">
                                    <label class="form-label">Heading </label>
                                    <input type="text" class="form-control" name="contact_heading" value="{{ @$page_data->contact_heading }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Address </label>
                                    <textarea name="contact_address" id="" cols="30" rows="10" class="form-control  snote h-100">{{ @$page_data->contact_address }}</textarea>
                                  
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Email </label>
                                    <input type="email" class="form-control" name="contact_email" value="{{ @$page_data->contact_email }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Phone </label>
                                    <input type="text" class="form-control" name="contact_phone" value="{{ @$page_data->contact_phone}}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Map (Iframe) </label>
                                    <input type="text" class="form-control" name="contact_map_iframe" value="{{ @$page_data->contact_map_iframe}}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Contact Seo Title </label>
                                    <input type="text" class="form-control" name="contact_seo_title" value="{{ @$page_data->contact_seo_title }}">
                                </div>

                                

                                <div class="mb-4">
                                    <label class="form-label">Contact Meta Description </label>
                                    <textarea name="contact_seo_meta_description" id="" cols="30" rows="10" class="form-control h-100">{{ @$page_data->contact_seo_meta_description }}</textarea>
                                  
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