<?php

namespace App\Repositories\Models;

use Conner\Tagging\Taggable;
use Cviebrock\EloquentSluggable\Sluggable;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Product extends Model implements Transformable,Buyable
{
    use TransformableTrait,SoftDeletes,Taggable,Sluggable;

    protected $fillable = [
        'name',
        'description',
        'product_code',
        'price',

    ];

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug'=>[
                'source' => 'name'
            ]
        ];
    }

    /**
     * Get the identifier of the Buyable item.
     *
     * @return int|string
     */
    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
    }

    /**
     * Get the description or title of the Buyable item.
     *
     * @return string
     */
    public function getBuyableDescription($options = null)
    {
        return $this->description;
    }

    /**
     * Get the price of the Buyable item.
     *
     * @return float
     */
    public function getBuyablePrice($options = null)
    {
        return $this->price;
    }
}
