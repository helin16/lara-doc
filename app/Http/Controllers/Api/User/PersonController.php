<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Api\ApiController;
use App\Entities\System\Auth\Store;

class PersonController extends ApiController
{
    protected $entityName = 'App\Entities\System\Auth\Person';
    public function getByStore($storeId)
    {
        $class = trim($this->entityName);
        return $class::has('store', '=', $storeId)->get()->toJson();
    }
}