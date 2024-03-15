@extends('admin.layout.app')
@section('title')
    Dashboard - Edit Home Portfolio 
@endsection

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_home_portfolio_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                     
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Title </label>
                                    <input type="text" class="form-control" name="portfolio_title" value="{{ @$page_data->portfolio_title }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Sub Title </label>
                                    <input type="text" class="form-control" name="portfolio_subtitle" value="{{ @$page_data->portfolio_subtitle }}">
                                </div>
                          
                                <div class="mb-4">
                                    <label class="form-label">About Status</label>
                                    <select name="portfolio_status" id="" class="form-control">
                                        <option value="1" @if ($page_data->portfolio_status == '1')
                                            selected
                                        @endif>Show</option>
                                        <option value="0" @if ($page_data->portfolio_status == '0')
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