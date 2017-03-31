<?php

namespace App\Repositories\Models;

use Conner\Tagging\Taggable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Product extends Model implements Transformable
{
    use TransformableTrait,SoftDeletes,Taggable,Sluggable;

    protected $fillable = [
        'name',
        'description',
        'sku',
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
}
