<?php
namespace App\Entities;

use App\Entities\System\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Illuminate\Database\Eloquent\Builder;

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
        return $this->belongsTo('App\Entity\System\Auth\UserAccount', self::CREATED_BY);
    }
    /**
     * Getting the updater
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function updatedBy()
    {
        return $this->belongsTo('App\Entity\System\Auth\UserAccount', self::UPDATED_BY);
    }
    /**
     * (non-PHPdoc)
     * @see \Illuminate\Database\Eloquent\Model::performInsert()
     */
    public function performInsert(Builder $query, array $options = [])
    {
        if(!Auth::user() instanceof User) {
            App::error(function(InvalidUserException $exception) {
                Log::error($exception);
                return 'Access denid for creating a new ' . get_called_class();
            });
        }

        $this->attributes['active'] = 1;
        $this->attributes[self::CREATED_AT] = new \DateTime('now', new \DateTimeZone(env('APP_TIMEZONE', 'UTC')));
        $this->attributes[self::CREATED_BY] = Auth::user()->id;
        $this->attributes[self::UPDATED_AT] = new \DateTime('now', new \DateTimeZone(env('APP_TIMEZONE', 'UTC')));
        $this->attributes[self::UPDATED_BY] = Auth::user()->id;
        return parent::performInsert($query, $options);
    }
    /**
     * (non-PHPdoc)
     * @see \Illuminate\Database\Eloquent\Model::performUpdate()
     */
    public function performUpdate(Builder $query, array $options = [])
    {
        if(!Auth::user() instanceof User) {
            App::error(function(InvalidUserException $exception) {
                Log::error($exception);
                return 'Access denid for creating a new ' . get_called_class();
            });
        }

        $this->attributes[self::UPDATED_AT] = new \DateTime('now', new \DateTimeZone(env('APP_TIMEZONE', 'UTC')));
        $this->attributes[self::UPDATED_BY] = Auth::user()->id;
        return parent::performUpdate($query, $options);
    }
}