@extends('layouts.grid')

@section('title')
    Product types
@stop

@section('toolbar')
    {{ Form::open(['route' => ['productTypesGrid.destroy', 'delete'], 'method' => 'DELETE']) }}
        <a class="pure-button pure-button-primary" href="{{ route('productTypesGrid.create') }}">Add Type</a>
        {{ Form::submit('Delete', ['class' => 'pure-button']) }}
@stop

@section('table-headers')
    <th></th>
    <th>Product type</th>
    <th>Action</th>
@stop

@section('table-contents')
    @foreach(ProductType::all() as $productType)
        <tr>
            <td>
                {{ Form::checkbox('for_delete[]', $productType->id, false, ['class' => 'pure-checkbox']) }}
            </td>
            <td>
                {{ $productType->description }}
            </td>
            <td>
               <a class="pure-button" href="{{ route('productTypesGrid.edit' , $productType->id) }}">Edit</a>
            </td>
        </tr>
    @endforeach
@stop