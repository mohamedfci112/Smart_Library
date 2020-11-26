<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        {{--  <input type = 'text' name = 'created_by'  value = "{{Auth::user()->name}}"  />   --}}
        <div class="form-group">
            {{--  created by column   --}}
            <strong>created by :</strong>
            {!! Form::text('created_by', Auth::user()->name, array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {{--  created by column   --}}
            <strong>name:</strong>
            {!! Form::text('name', null , array('placeholder' => 'name','class' => 'form-control')) !!}
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