@extends('admin.layout.app')
@section('title')
    Dashboard - Add portfolio
@endsection

@section('rightside_button')

    <a href="{{ route('admin_portfolio_show') }}" class="btn btn-info"><i class="fas fa-plus"></i> View portfolio</a>

@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_portfolio_submit') }}" method="post" enctype="multipart/form-data">
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
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Portfolio Category *</label>
                                   <select name="portfolio_category_id" id="" class="form-control select2">
                                    @foreach ($portfolio_categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                    @endforeach
                                      
                                   </select>
                                </div>
                     
                                <div class="mb-4">
                                    <label class="form-label"> Description * </label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control h-100">{{ old('description') }}</textarea>
                                </div>
      
                                <div class="mb-4">
                                    <label class="form-label">Client Name </label>
                                    <input type="text" class="form-control" name="project_client" value="{{ old('project_client') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Company Name </label>
                                    <input type="text" class="form-control" name="project_company" value="{{ old('project_company') }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Project Start Date </label>
                                    <input type="date" class="form-control" name="project_start_date" value="{{ old('project_start_date') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Project End Date </label>
                                    <input type="date" class="form-control" name="project_end_date" value="{{ old('project_end_date') }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Project Cost </label>
                                    <input type="text" class="form-control" name="project_cost" value="{{ old('project_cost') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Project Website </label>
                                    <input type="url" class="form-control" name="project_website" value="{{ old('project_website') }}">
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