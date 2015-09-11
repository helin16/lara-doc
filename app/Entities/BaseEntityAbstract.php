<?php
namespace App\Entities;

use App\Entities\System\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
/**
 * The base abstract entity
 *
 * @author lhe<helin16@gmail.com>
 */
abstract class BaseEntityAbstract extends Model
{
    /**
     * The name of the "created by" column
     *
     * @var string
     */
    const CREATED_BY = 'created_by';
    /**
     * The name of the "updated by" column
     *
     * @var string
     */
    const UPDATED_BY = 'updated_by';
    /**
     * Getting the creator
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function createdBy()
    {
        return $this->belongsTo('App\Entity\System\Auth\User');
    }
    /**
     * Getting the updater
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function updatedBy()
    {
        return $this->belongsTo('App\Entity\System\Auth\User');
    }
    /**
     * Save a new model and return the instance.
     *
     * @param  array  $attributes
     * @return static
     */
    public static function create(array $attributes = [])
    {
        if(Auth::user() instanceof User)

        $attributes['active'] = 1;
//         $attributes['create_at'] = new
        $model = new static($attributes);
        $model->save();
        return $model;
    }
}