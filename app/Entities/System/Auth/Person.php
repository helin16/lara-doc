<?php

namespace App\Entities\System\Auth;
use App\Entities\BaseEntityAbstract;
use App\Entities\System\Auth\Store;

class Person extends BaseEntityAbstract
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'person';
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['fullname', 'store'];
    public function store()
    {
        return $this->belongsTo('App\Entities\System\Auth\Store');
    }
    public function role()
    {
        return $this->belongsTo('App\Entities\System\Auth\Role');
    }
    /**
     * getting the fullname
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->firstname . ' ' . $this->lastname;
    }
    /**
     * Get the fullnam for the user.
     *
     * @return bool
     */
    public function getFullnameAttribute()
    {
        return trim($this->getFullname());
    }
    /**
     * Getting the store as attribute
     */
    public function getStoreAttribute()
    {
        return Store::find($this->store_id);
    }
}
