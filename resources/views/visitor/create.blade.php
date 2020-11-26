@extends('layouts.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New visitor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('visitor.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


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

    {{--  // add from exitting users   --}}
    {!! Form::open(array('route' => 'store_exist_user','method'=>'POST')) !!}
        <h1> add from existing users </h1>
        <label for="name" >name</label>
        <select name = 'user_id' > 
        @foreach($existing_users as $user )
        <option value = "{{$user->id}}"> 
            {{ $user->name}}
        </option>

        @endforeach
        </select>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name" >Using Type </label>
                {!! Form::select('using_type',  ['reading'=>'reading','stydying'=>'studying','using_internet'=>'using_internet', 'another'=>'another'], 'reading') !!}
            </div>
        </div>        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    {!! Form::close() !!}
        <br/>
        <hr> 



        <h1> Add   Visitor Manually </h1>
    {!! Form::open(array('route' => 'visitor.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'name','class' => 'form-control')) !!}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name" >Using Type </label>
                {!! Form::select('using_type',  ['reading'=>'reading','stydying'=>'studying','using_internet'=>'using_internet', 'another'=>'another']) !!}
            </div>
        </div> 
    </div>
    {!! Form::close() !!} 

@endsection