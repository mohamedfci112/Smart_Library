@extends('layouts.admin_dashboard')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Category </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('publisher.index') }}"> Back</a>
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


    {!! Form::model( $publisher , ['method' => 'PATCH','route' => ['publisher.update' , $publisher->id ]]) !!}
        @include('publisher.form')
    {!! Form::close() !!}


@endsection