<?php

namespace App\Entities\System\Auth;
use App\Entities\BaseEntityAbstract;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends BaseEntityAbstract implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'useraccount';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['person'];
    /**
     * Getting the person
     */
    public function person()
    {
        return $this->belongsTo('App\Entities\System\Auth\Person');
    }
    /**
     * Getting the person as attribute
     */
    public function getPersonAttribute()
    {
    	return Person::find($this->person_id);
    }
}
