<?php

class ProductTypesGridController extends \BaseController {

	public function index()
	{
		return View::make('productTypesGrid.index');
	}

    public function create()
    {
        return View::make('productTypesGrid.create');
    }

    public function store()
    {
        $input = Input::all();

        if(ProductType::isValid($input)) {

            ProductType::create([
                'description' => $input['ProductType']
            ]);

            return Redirect::route('productTypesGrid.index');
        }

        return Redirect::route('productTypesGrid.index');;
    }
    public function edit($id)
    {
        return View::make('productTypesGrid.edit', ['typesGrid'=>$id]);
    }
    public function update($id){

        $input = Input::all();
        if(ProductType::isValid($input)){
            $ProductType=ProductType::find($id);
            $ProductType->description = Input::get('ProductType');
            $ProductType->save();

            return Redirect::route('productTypesGrid.index');

        }
        return Redirect::route('productTypesGrid.index');
    }
    public function destroy($id){

        $usersForDeletion = Input::get('for_delete');

        foreach($usersForDeletion as $productType) ProductType::find($productType)->delete();

        return Redirect::route('productTypesGrid.index');

    }

}
