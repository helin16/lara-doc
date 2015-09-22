<?php

namespace App\Http\Controllers\Api\Store;

use App\Http\Controllers\Api\ApiController;

class StoreController extends ApiController
{
    protected $entityName = 'App\Entities\System\Auth\Store';
    public function show($storeId, $personId)
    {
            return 'storeId: ' . $storeId . ', personId: ' . $personId;
    }
}