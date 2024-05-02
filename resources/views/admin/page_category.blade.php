@extends('admin.layout.app')
@section('title')
    Dashboard - Edit Blog Page Category
@endsection

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_page_category_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-4">
                                <label class="form-label">Existing Banner</label> <br>
                                <img src="{{ asset('uploads/'.$page_data->category_banner) }}" alt="" class="w-50">
                                <input type="file" class="form-control mt_10" name="category_banner">
                            </div>
                
                            <div class="col-md-9">
           

                         
                 
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