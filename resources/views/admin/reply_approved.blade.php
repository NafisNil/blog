@extends('admin.layout.app')
@section('title')
    Dashboard - View Approved Replies
@endsection

@section('rightside_button')

   

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
                                <th> Post</th>
                                <th> Comment</th>
                                <th> Name</th>
                                <th>Email</th>
                                <th>Reply</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($approved_reply as $item)
                            <tr>
                               
                               
                                <td>{{ $loop->iteration }}</td>
                       
                                <td>  <a href="{{ route('post', $item->rPost->slug) }}" target="_blank">{{ $item->rPost->title }}</a> </td>
                                <td>
                                    {{ $item->rComment->person_name }} <br>
                                {{ $item->rComment->person_email }} <br>
                            {!! $item->rComment->person_comment !!}

                                </td>
                                <td>{{ $item->person_name }}</td>
                                <td>{{ $item->person_email }}</td>
                                <td>{{ $item->person_comment }}</td>
                               
                                <td class="pt_10 pb_10">
                                    <a href="{{ route('admin_reply_make_pending', $item->id) }}" class="btn btn-info btn-sm" >Make pending</a>
                                    <a href="{{ route('admin_reply_delete', $item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">Delete Reply</a>
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