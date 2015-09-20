<?php

namespace App\Entities\Product;
use App\Entities\BaseEntityAbstract;
use PhpParser\Node\Expr\Array_;

class Ingredient extends BaseEntityAbstract
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ingredient';
    protected $fillable = ['name', 'description'];
    public static function create(array $data = [])
    {
        return parent::create($data);
    }
}