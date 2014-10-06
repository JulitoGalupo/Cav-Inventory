@extends('layouts.default')

@section('title')
    Add New Product type
@stop

@section('view')
    <div>
        <h2>Add new Product type</h2>
    </div>
    <div>
    {{ Form::open(['route' => 'productTypesGrid.store', 'class' => 'pure-form pure-form-aligned cav-form-stacked-1']) }}
        <div>
            {{ Form::label('ProductType', 'Type: ') }}
            {{ Form::text('ProductType') }}

            {{ Form::submit('Add', ['class' => 'pure-button pure-button-primary']) }}
            or
            <a class="pure-button" href="{{ action('ProductTypesGridController@index') }}">Cancel</a>
            {{ Form::close() }}
        </div>

@stop