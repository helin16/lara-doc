<?php

namespace App\Entities\Product;

use App\Entities\BaseEntityAbstract;

class Product extends BaseEntityAbstract
{
	protected $table = "product";
	
	protected $timestamp = false;
	
	protected $fillable = ['name', 'description'];
	
	public static function create(Array $data = array())
	{
		$data['name'] = 'test product 1';
		$data['description'] = 'test product 1';
// 		$data['barcode'] = 'test product 1';
// 		$data['used_by_variance'] = 'test product 1';
// 		$data['unit_price'] = 'test product 1';
// 		$data['label_version_no'] = 'test product 1';
// 		$data['description'] = 'test product 1';
// 		$data['created_by'] = '1';
// 		$data['updated_by'] = '1';
		
		parent::create($data);
	}

}