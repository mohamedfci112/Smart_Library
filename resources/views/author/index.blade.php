@extends('layouts.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Authors page </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('author.create') }}"> Create New author </a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th width="280px">Operations</th>
        </tr>
    @foreach ($authors as $author)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $author->name}}</td>
        <td>{{ $author->email}}</td>
        <td>{{ $author->phone}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('author.show',$author->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('author.edit',$author->id) }}">Edit</a>
            {{--  {!! Form::open(['method' => 'DELETE','route' => ['author.destroy', $author->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}  --}}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $authors->links() !!}
@endsection