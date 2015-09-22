<?php

namespace App\Entities\System\Auth;
use App\Entities\BaseEntityAbstract;

class Person extends BaseEntityAbstract
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'person';
    public function user()
    {
        return $this->hasOne('App\Entities\System\Auth\User');
    }
}
