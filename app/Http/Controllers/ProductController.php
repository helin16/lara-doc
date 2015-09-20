<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Entities\Product\Product;

class ProductController extends Controller
{
	public function getIndex()
	{
		echo "fasfdsffd 123";
	}
	
	public function getView($id)
	{
		var_dump($id);
		echo "view product";
	}
	
	public function postAdd()
	{
		var_dump($_POST);
		return "aaa";
	}
	
	public function addProduct()
	{
		echo "adding product";
		Product::create(array());
	}

// 	public function viewProduct($id)
// 	{
// 		echo "trying to show product id".$id;
// 	}
}