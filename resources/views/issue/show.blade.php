@extends('layouts.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show issue Details </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('issue.index') }}"> Back</a>
            </div>
        </div>
		</div>
		
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>student/stuff name :</strong>
                {{ $issue->user_name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Title:</strong>
                {{ $issue->book_name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>student/stuff phone :</strong>
                    {{ $issue->phone}}
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Return Date :</strong>
                {{ $issue->return_date}}
            </div>
        </div>
    </div>
@endsection