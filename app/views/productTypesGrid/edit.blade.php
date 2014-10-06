@extends('layouts.default')

@section('title')
    Edit Product type
@stop

@section('view')
    <div>
        <h2>Edit Product type</h2>
    </div>
    {{ Form::open(['route' => ['productTypesGrid.update', $typesGrid],'method'=> 'PATCH' , 'class' => 'pure-form pure-form-aligned cav-form-stacked-1']) }}
        <div>
            {{ Form::label('ProductType', 'Type: ') }}
            {{ Form::text('ProductType') }}

            {{ Form::submit('Save', ['class' => 'pure-button pure-button-primary']) }}
            or
            <a class="pure-button" href="{{ action('ProductTypesGridController@index') }}">Cancel</a>

        {{ Form::close() }}
        </div>
@stop