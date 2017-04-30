<?php

namespace App\Repositories\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Category extends Model implements Transformable
{
    use TransformableTrait,Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
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
