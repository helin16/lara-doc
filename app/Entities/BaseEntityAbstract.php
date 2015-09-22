<?php
namespace App\Entities;

use App\Entities\System\Auth\UserAccount;
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
        return $this->belongsTo('App\Entity\System\Auth\UserAccount');
    }
    /**
     * Getting the updater
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function updatedBy()
    {
        return $this->belongsTo('App\Entity\System\Auth\UserAccount');
    }
    /**
     * Save a new model and return the instance.
     *
     * @param  array  $attributes
     * @return static
     */
    public static function create(array $attributes = [])
    {
//         if(!Auth::user() instanceof UserAccount)
//             throw new \Exception('Access denid for creating a new ' . get_called_class());
		
        $attributes['active'] = 1;
        $attributes['create_at'] = new \DateTime('now', new \DateTimeZone(env('APP_TIMEZONE', 'UTC')));
//         $attributes[self::CREATED_BY . '_id'] = Auth::user()->id();
        $attributes['updated_at'] = new \DateTime('now', new \DateTimeZone(env('APP_TIMEZONE', 'UTC')));
//         $attributes[self::UPDATED_BY . '_id'] = Auth::user()->id();
        var_dump($attributes);
        return parent::create($attributes);
    }
    /**
     * Update the model in the database.
     *
     * @param  array  $attributes
     * @return bool|int
     */
    public function update(array $attributes = [])
    {
        if(!Auth::user() instanceof UserAccount)
            throw new \Exception('Access denid for creating a new ' . get_called_class());

        $attributes['updated_at'] = new \DateTime('now', new \DateTimeZone(env('APP_TIMEZONE', 'UTC')));
        $attributes[self::UPDATED_BY . '_id'] = Auth::user()->id();
        return parent::update($attributes);
    }
}