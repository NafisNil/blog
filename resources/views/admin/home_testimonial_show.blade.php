@extends('admin.layout.app')
@section('title')
    Dashboard - Edit Home Testimonial 
@endsection

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_home_testimonial_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-4">
                                <label class="form-label">Existing Testimonial Background </label>
                                <img src="{{ asset('uploads/'.$page_data->testimonial_backgorund) }}" alt="" class="w-200">
                            </div>
                            <div class="col-md-3">
                                <img src="{{ asset('uploads/'.@$page_data->testimonial_background) }}" alt="" class="profile-photo w_100_p">
                                <input type="file" class="form-control mt_10" name="testimonial_background">
                            </div>
                            <div class="col-md-9">
                      
                                <div class="mb-4">
                                    <label class="form-label">Subtitle </label>
                                    <input type="text" class="form-control" name="testimonial_subtitle" value="{{ @$page_data->testimonial_subtitle }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="testimonial_title" value="{{ @$page_data->testimonial_title }}">
                                </div>

                
                                <div class="mb-4">
                                    <label class="form-label">Testimonial Status</label>
                                    <select name="testimonial_status" id="" class="form-control">
                                        <option value="1" @if ($page_data->testimonial_status == '1')
                                            selected
                                        @endif>Show</option>
                                        <option value="0" @if ($page_data->testimonial_status == '0')
                                            selected
                                        @endif>Hide</option>
                                    </select>
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