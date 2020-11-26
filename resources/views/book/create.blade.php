@extends('layouts.admin_dashboard')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Book </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('book.index') }}"> Back</a>
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

    {{--  <form method="POST" action="{{route('book.store')}}"> 
            @include('book.form')
    </form>  --}}
    {!! Form::open(array('route' => 'book.store','method'=>'POST','files' => true)) !!}
        @include('book.form')
    {!! Form::close() !!}


@endsection