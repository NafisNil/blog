@extends('admin.layout.app')
@section('title')
    Dashboard - View Testimonial
@endsection

@section('rightside_button')

    <a href="{{ route('admin_testimonial_add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>

@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th> Name</th>
                                <th>Designation</th>
                                <th> Photo</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_data as $item)
                            <tr>
                               
                               
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->designation }}</td>
                                <td><img src="{{ asset('uploads/'. $item->photo) }}" alt="" class="w_50"></td>
                                <td class="pt_10 pb_10">
                                    <a href="{{ route('admin_testimonial_edit', $item->id) }}" class="btn btn-info" >Edit</a>
                                    <a href="{{ route('admin_testimonial_delete', $item->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                </td>
                                    
                                
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection