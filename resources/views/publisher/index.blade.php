@extends('layouts.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>publishers page </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('publisher.create') }}"> Create New publisher </a>
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
    @foreach ($publishers as $publisher)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $publisher->name}}</td>
        <td>{{ $publisher->email}}</td>
        <td>{{ $publisher->phone}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('publisher.show',$publisher->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('publisher.edit',$publisher->id) }}">Edit</a>
            {{--  {!! Form::open(['method' => 'DELETE','route' => ['publisher.destroy', $publisher->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}  --}}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $publishers->links() !!}
@endsection