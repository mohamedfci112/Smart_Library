@extends('layouts.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Issue New Book </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('issue.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if (count($errors) < 0 )
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    {!! Form::open(array('route' => 'issue.store','method'=>'POST')) !!}
        
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label> Book name </label>
                <select name = 'book_id' > 
                    @foreach($books_name as $book )
                    <option value = "{{$book->id}}"> 
                        {{ $book->title}}
                    </option>
            
                    @endforeach
                    </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label> user name </label>
                <select name = 'user_name' > 
                @foreach($users_name as $user )
                <option value = "{{$user->name}}"> 
                    {{ $user->name}}
                </option>
        
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label> Phone: </label>
                <input type = 'text' name = 'phone'/> 
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label> Return Date: </label>
                    <input type = 'date' name = 'return_date'/> 
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

    {!! Form::close() !!}
    


@endsection