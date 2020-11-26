@extends('layouts.admin_dashboard')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Category </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('issue.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::model( $issue , ['method' => 'PATCH','route' => ['issue.update' , $issue->id]]) !!}
    <div class="row">
        
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label> Book name </label>
                    <select name = 'book_name'>
                            @foreach($books_name  as $book)
                            <option value = "{{ $book->title }}" 
                                @if ( $book->title == $issue->book_name)
                                selected="selected"
                                @endif
                                >
                                            {{ $book->title }}
                            </option> 
                            @endforeach

                    </select>
                </div>
            </div>
    
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label> user name </label>
                    <select name = 'user_name'>
                            @foreach($users_name  as $user)
                            <option value = "{{ $user->name }}" 
                                @if ( $user->name == $issue->user_name)
                                selected="selected"
                                @endif
                                >
                                {{ $user->name }}
                            </option> 
                            @endforeach

                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label> Phone: </label>
                    <input type = 'text' value = "{{$issue->phone}}"  name = 'phone'/> 
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label> Return Date: </label>
                        <input type = 'date' value = "{{$issue->return_date}}"  name = 'return_date'/> 
                    </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    
    {!! Form::close() !!}


@endsection