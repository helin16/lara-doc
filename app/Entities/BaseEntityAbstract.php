<?php
namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
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
}