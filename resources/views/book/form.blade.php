<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ISBN:</strong>
            {!! Form::text('isbn', null, array('placeholder' => 'name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {!! Form::text('title', null, array('placeholder' => 'name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>total:</strong>
            {!! Form::number('total', null, array('placeholder' => 'name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>avilable:</strong>
            {!! Form::number('avilable', null, array('placeholder' => 'name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>language:</strong>
            {!! Form::text('language' , null, array('placeholder' => 'name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Book Cover :</strong>
            {!! Form::file('Bookcover', null , array('placeholder' => 'uplade image ','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Category:</strong>
            <select name = 'category_id'>
                @foreach($categories  as $category)
                <option value = "{{ $category->id }}">
                        {{ $category->name }}
                </option> 
                @endforeach

            </select>
            
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Author:</strong>
            <select name = 'author_id'>
                @foreach($authors  as $author)
                <option value = "{{ $author->id }}">
                        {{ $author->name }}
                </option> 
                @endforeach
    
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Publisher:</strong>
            <select name = 'publisher_id'>
                @foreach($publishers  as $publisher)
                <option value = "{{ $publisher->id }}">
                        {{ $publisher->name }}
                </option> 
                @endforeach
    
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cuboard:</strong>
            <select name = 'cupbord_id'>
                @foreach($cupbords  as $cupbord)
                <option value = "{{ $cupbord->id }}">
                        {{ $cupbord->id }}
                </option> 
                @endforeach
    
            </select>
            
        </div>
    </div>

    
    
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            {!! Form::textarea('description', null , array('placeholder' => 'description','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>