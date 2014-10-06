<?php

class ProductType extends Eloquent {

    protected $fillable = ['description'];
    protected $table = 'product_types';

    public static function isValid($input) {
        $validate = Validator::make($input, [
            'ProductType' => 'required|alpha'
        ]);

        return $validate->passes();
    }
}