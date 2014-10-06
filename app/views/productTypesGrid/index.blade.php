{{ Form::open(['route' => ['productTypesGrid.destroy', 'delete'], 'method' => 'DELETE']) }}
<a class="pure-button pure-button-primary" href="{{ route('productTypesGrid.create') }}">Add Type</a>
{{ Form::submit('Delete', ['class' => 'pure-button']) }}

<table border="1" style="border-collapse: collapse">
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
</table>
