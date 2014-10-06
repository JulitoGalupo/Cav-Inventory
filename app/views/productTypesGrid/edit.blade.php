<div><h2>EDIT</h2></div>
    {{ Form::open(['route' => ['productTypesGrid.update', $typesGrid],'method'=> 'PATCH' , 'class' => 'pure-form pure-form-aligned cav-form-stacked-1']) }}
    <div class="pure-control-group">
        {{ Form::label('ProductType', 'Type: ') }}
        {{ Form::text('ProductType') }}
    </div>
    <div class="pure-controls">
        {{ Form::submit('Save', ['class' => 'pure-button pure-button-primary']) }}
    </div>
    <div class="pure-controls">
        <a class="pure-button" href="{{ action('ProductTypesGridController@index') }}">Cancel</a>
    </div>
    {{ Form::close() }}
