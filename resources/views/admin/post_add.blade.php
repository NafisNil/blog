@extends('admin.layout.app')
@section('title')
    Dashboard - Add Post
@endsection

@section('rightside_button')

    <a href="{{ route('admin_post_show') }}" class="btn btn-info"><i class="fas fa-plus"></i> View Post</a>

@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_post_submit') }}" method="post" enctype="multipart/form-data">
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
                                    <label class="form-label">Title *</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Post Category *</label>
                                   <select name="post_category_id" id="" class="form-control select2">
                                    @foreach ($post_categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                    @endforeach
                                      
                                   </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Short Description * </label>
                                    <textarea name="short_description" id="" cols="30" rows="10" class="form-control h-100">{{ old('short_description') }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Description * </label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control h-100 snote">{{ old('description') }}</textarea>
                                </div>
                           
                                <div class="mb-4">
                                    <label class="form-label">SEO title </label>
                                    <input type="text" class="form-control" name="seo_title" value="{{ old('seo_title') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">SEO Meta Description </label>
                                    <textarea name="seo_meta_description" id="" cols="30" rows="10" class="form-control h-100">{{ old('seo_meta_description') }}</textarea>
                                </div>
                          
                                <div class="mb-4">
                                    <label class="form-label">Show Comment</label>
                                    <select name="show_comment" id="" class="form-control">
                                        <option value="1" @if (@$page_data->show_comment == '1')
                                            selected
                                        @endif>Show</option>
                                        <option value="0" @if (@$page_data->show_comment == '0')
                                            selected
                                        @endif>Hide</option>
                                    </select>
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