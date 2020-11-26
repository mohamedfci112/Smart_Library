@extends('layouts.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Smart Library Assuit University</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('issue.create') }}"> Issue  New Book </a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($message = Session::get('danger'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>Book ID</th>
            <th>Book Title</th>
            <th>student/stuff name  </th>
            <th>phone  </th>
            <th width="280px">Return Date </th>
        </tr>
    @foreach ($issues as $issue)
    <tr>
        <td>{{ $issue->book_id }}</td>
        <td>{{ $issue->book_name}}</td>
        <td>{{ $issue->user_name}}</td>
        <td>{{ $issue->phone}}</td>
        <td>{{ $issue->return_date}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('issue.show',$issue->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('issue.edit',$issue->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['issue.destroy', $issue->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Return this Book ', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $issues->links() !!}
@endsection