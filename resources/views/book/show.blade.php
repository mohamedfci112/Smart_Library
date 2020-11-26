@extends('layouts.admin_dashboard')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Book Details </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('book.index') }}"> Back</a>
        </div>
    </div>
</div>


<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ISBN:</strong>
            {{ $book->isbn}}
        </div>
		</div>
		
    <div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
							<strong>Title:</strong>
							{{ $book->title}}
					</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
							<strong>total:</strong>
							{{ $book->total}}
					</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
							<strong>avialable:</strong>
							{{ $book->avialable}}
					</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
							<strong>Language:</strong>
							{{ $book->language}}
					</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
							<strong>author:</strong>
							{{ $author->name }}
					</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
							<strong>category:</strong>
							{{  $category->name  }}
					</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
						<strong>publisher:</strong>
						{{ $publisher->name }}
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
						<strong>cupbord:</strong>
						{{ $cupbord->id }}
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
							<strong>description:</strong>
							{{ $book->description}}
					</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
						<strong>Book Cover :</strong>
						<img src = "/images/{{$book->Bookcover}}" > 
				</div>
		</div>
    </div>
@endsection