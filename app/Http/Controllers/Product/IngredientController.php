<?php

namespace App\Http\Controllers\Product;

use App\Entities\Product\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IngredientController extends Controller
{
    /**
     * Responds to requests to GET /ingredient
     */
    public function getIndex()
    {
        return 'this is ' . __FUNCTION__ . ' of ' . __CLASS__ ;
    }
    /**
     * Responds to requests to GET /ingredient/id
     */
    public function getView($id)
    {
    	if(intval(trim($id)) === 0)
    		die('invlaid id passed in');
        return 'this is ' . __FUNCTION__ . ' of ' . __CLASS__  . ' id => ' . $id;
    }
}