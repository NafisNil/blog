@extends('admin.layout.app')
@section('title')
    Dashboard - Add Service
@endsection

@section('rightside_button')

    <a href="{{ route('admin_service_show') }}" class="btn btn-info"><i class="fas fa-plus"></i> View Service</a>

@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_service_submit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
        
                            <div class="col-md-9">
                                <div class="col-md-3">
                                    <label class="form-label">Photo *</label>
                                    <img src="{{ asset('uploads/'.@$page_data->photo) }}" alt="" class="profile-photo w_100_p">
                                    <input type="file" class="form-control mt_10" name="photo">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Banner *</label>
                                    <img src="{{ asset('uploads/'.@$page_data->banner) }}" alt="" class="profile-photo w_100_p">
                                    <input type="file" class="form-control mt_10" name="banner">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Name *</label>
                                    <input type="text" class="form-control" name="name" value="">
                                </div>
                     
                                <div class="mb-4">
                                    <label class="form-label">Short Description * </label>
                                    <textarea name="short_description" id="" cols="30" rows="10" class="form-control h-100"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Description * </label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control snote h-100"></textarea>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Icon *</label>
                                    <input type="text" class="form-control" name="icon" value="">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">SEO title </label>
                                    <input type="text" class="form-control" name="seo_title" value="">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">SEO Meta Description </label>
                                    <textarea name="seo_meta_description" id="" cols="30" rows="10" class="form-control h-100"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Order *</label>
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