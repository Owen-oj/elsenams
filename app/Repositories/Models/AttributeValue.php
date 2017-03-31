<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class AttributeValue extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['attribute_id','value','image_id'];

    public function attributes()
    {
        return $this->belongsTo(Attribute::class);
    }

}
