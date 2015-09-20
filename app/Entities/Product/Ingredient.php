<?php

namespace App\Entities\Product;
use App\Entities\BaseEntityAbstract;

class Ingredient extends BaseEntityAbstract
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ingredient';
    public static function create($name, $description = "")
    {
    	if(($name = trim($name)) === '')
    		throw new \Exception('invalid name "' . trim($name) . '" passed in');
    	$attributes = [];
        $attributes['name'] = trim($name);
        $attributes['description'] = ( ($description = trim($description)) === '' ? $name : $description );
        return parent::create($attributes);
    }
}
