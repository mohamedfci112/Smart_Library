@extends('layouts.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>visitors page </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('visitor.create') }}"> Create New visitor </a>
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
            <th>level </th>
            <th width="280px">Operations</th>
        </tr>
    @foreach ($visitors as $visitor)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $visitor->name}}</td>
        <td>{{ $visitor->level}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('visitor.show',$visitor->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('visitor.edit',$visitor->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['visitor.destroy', $visitor->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $visitors->links() !!}
@endsection