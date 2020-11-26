@extends('layouts.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Smart Library Assuit University</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New category </a>
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
            <th>Title</th>
            <th>Body</th>
            <th width="280px">Operations</th>
        </tr>
    @foreach ($categories as $category)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $category->name}}</td>
        <td>{{ $category->description}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
            {{--  {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $category->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}  --}}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $categories->links() !!}
@endsection