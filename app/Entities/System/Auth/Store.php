<?php

namespace App\Entities\System\Auth;
use App\Entities\BaseEntityAbstract;

class Store extends BaseEntityAbstract
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'store';
    public function persons()
    {
        $this->hasMany('App\Entities\System\Auth\Person');
    }
}
