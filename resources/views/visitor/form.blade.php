<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'name','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Level :</strong>
            {!! Form::select('using_type',  ['first'=>'first','second'=>'second','third'=>'third','fourth'=>'fourth', 'stuff'=>'stuff']) !!}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>