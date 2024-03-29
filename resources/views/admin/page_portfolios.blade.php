@extends('admin.layout.app')
@section('title')
    Dashboard - Edit portfolio_category_id Page Content
@endsection

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_page_portfolio_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-4">
                                <label class="form-label">Existing Banner</label> <br>
                                <img src="{{ asset('uploads/'.$page_data->portfolio_banner) }}" alt="" class="w-50">
                                <input type="file" class="form-control mt_10" name="portfolio_banner">
                            </div>
                
                            <div class="col-md-9">
                      
                                <div class="mb-4">
                                    <label class="form-label">Heading </label>
                                    <input type="text" class="form-control" name="portfolio_heading" value="{{ @$page_data->portfolio_heading }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Portfolio Seo Title </label>
                                    <input type="text" class="form-control" name="portfolio_seo_title" value="{{ @$page_data->portfolio_seo_title }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Portfolio Meta Description </label>
                                    <textarea name="portfolio_seo_meta_description" id="" cols="30" rows="10" class="form-control h-100">{{ @$page_data->portfolio_seo_meta_description }}</textarea>
                                  
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