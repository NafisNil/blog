@extends('admin.layout.app')
@section('title')
    Dashboard - Edit Setting
@endsection

@section('rightside_button')

<a href="{{ route('admin_skill_show') }}" class="btn btn-info"><i class="fas fa-plus"></i> View Skills</a>

@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_setting_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
        
                            <div class="col-md-9">
                                <div class="col-md-3">
                                    <label class="form-label">Photo *</label>
                                    <img src="{{ asset('uploads/'.@$setting_data->logo) }}" alt="" class="profile-photo w_100_p">
                                    <input type="file" class="form-control mt_10" name="logo">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Favicon *</label>
                                    <img src="{{ asset('uploads/'.@$setting_data->favicon) }}" alt="" class="profile-photo w_100_p">
                                    <input type="file" class="form-control mt_10" name="favicon">
                                </div>


                                <div class="col-md-3">
                                    <label class="form-label">Footer Logo</label>
                                    <img src="{{ asset('uploads/'.@$setting_data->logo_footer) }}" alt="" class="profile-photo w_100_p">
                                    <input type="file" class="form-control mt_10" name="logo_footer">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Footer Text *</label>
                                    <textarea name="footer_text" class="form-control h_100" id="" cols="30" rows="10">{{ $setting_data->footer_text }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Footer Icon 1 * </label>
                                    <input type="text" class="form-control" name="footer_icon_1" value="{{ $setting_data->footer_icon_1 }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Footer Icon 1 URL* </label>
                                    <input type="url" class="form-control" name="footer_icon_1_url" value="{{ $setting_data->footer_icon_1_url }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Footer Icon 2 * </label>
                                    <input type="text" class="form-control" name="footer_icon_2" value="{{ $setting_data->footer_icon_2 }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Footer Icon 2 URL* </label>
                                    <input type="url" class="form-control" name="footer_icon_2_url" value="{{ $setting_data->footer_icon_2_url }}">
                                </div>



                                <div class="mb-4">
                                    <label class="form-label">Footer Icon 3 * </label>
                                    <input type="text" class="form-control" name="footer_icon_3" value="{{ $setting_data->footer_icon_3 }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Footer Icon 3 URL* </label>
                                    <input type="url" class="form-control" name="footer_icon_3_url" value="{{ $setting_data->footer_icon_3_url }}">
                                </div>


                                <div class="mb-4">
                                    <label class="form-label">Footer Icon 4 * </label>
                                    <input type="text" class="form-control" name="footer_icon_4" value="{{ $setting_data->footer_icon_4 }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Footer Icon 4 URL* </label>
                                    <input type="url" class="form-control" name="footer_icon_4_url" value="{{ $setting_data->footer_icon_4_url }}">
                                </div>


                                <div class="mb-4">
                                    <label class="form-label">Footer Copyright</label>
                                    <input type="text" class="form-control" name="footer_copyright_text" value="{{ $setting_data->footer_copyright_text }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Preloader Status</label>
                                    <select name="preloader_status" class="form-control">
                                        <option value="Show"  @if ($setting_data->side == "Show"):'selected':''
                                        @endif>Show</option>
                                        <option value="Hide" @if ($setting_data->side == "Hide"):'selected':''
                                            @endif>Hide</option>
                                    </select>
                                </div>


                                <div class="mb-4">
                                    <label class="form-label">Color</label>
                                    <input type="color" class="form-control" name="theme_color" value="{{ $setting_data->theme_color }}">
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