@extends('layouts.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Books page </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('book.create') }}"> Create New Book </a>
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
            <th>ISBN</th>
            <th>Total</th>
            <th>Avialable</th>
            <th>language</th>
            
            <th width="280px">Operations</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->isbn }}</td>
            <td>{{ $book->total }}</td>
            
            
            <td>{{ $book->avilable}}</td>
            <td>{{ $book->language}}</td>
            <td>
                <a class="btn btn-info" href="{{ route('book.show',$book->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('book.edit',$book->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['book.destroy', $book->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>


    {!! $books->links() !!}
@endsection