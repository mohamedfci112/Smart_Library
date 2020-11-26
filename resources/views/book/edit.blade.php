@extends('layouts.admin_dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit book </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('book.index') }}"> Back</a>
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


    {!! Form::model( $book , ['method' => 'PATCH','route' => ['book.update' , $book->id]]) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ISBN:</strong>
                {!! Form::text('isbn', null, array('placeholder' => 'Isbn','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {!! Form::text('title', null , array('placeholder' => 'description','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total:</strong>
                {!! Form::text('total', null , array('placeholder' => 'description','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Avialabel:</strong>
                {!! Form::text('avilable', null , array('placeholder' => 'description','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>language:</strong>
                {!! Form::text('language', null , array('placeholder' => 'description','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total:</strong>
                {!! Form::text('description', null , array('placeholder' => 'description','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                <select name = 'category_id'>
                    @foreach($categories  as $category)
                    <option value = "{{ $category->id }}" 
											@if ( $book->category_id == $category->id)
											selected="selected"
											@endif
											>
                            {{ $category->name }}
                    </option> 
                    @endforeach
    
                </select>
                
            </div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
							<strong>Category:</strong>
							<select name = 'author_id'>
									@foreach($authors  as $author)
									<option value = "{{ $author->id }}" 
											@if ( $book->author_id == $author->id)
											selected="selected"
											@endif
											>
													{{ $author->name }}
									</option> 
									@endforeach
	
							</select>
							
					</div>
			</div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                <select name = 'publisher_id'>
									@foreach($publishers  as $publisher)
										<option value = "{{ $author->id }}" 
										@if ( $book->publisher_id == $publisher->id)
										selected="selected"
										@endif
										>
                            {{ $publisher->name }}
                    </option> 
                    @endforeach
    
                </select>
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                <select name = 'cupbord_id'>
                    @foreach($cupbords  as $cupbord)
                    <option value = "{{ $cupbord->id }}" 
											@if ( $book->cupbord_id == $cupbord->id)
											selected="selected"
											@endif
											>
													{{ $cupbord->id }}
                    </option> 
                    @endforeach
    
                </select>
                
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}


@endsection