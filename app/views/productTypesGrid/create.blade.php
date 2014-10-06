<div><h2>ADD TYPE</h2></div>
    {{ Form::open(['route' => 'productTypesGrid.store', 'class' => 'pure-form pure-form-aligned cav-form-stacked-1']) }}
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
