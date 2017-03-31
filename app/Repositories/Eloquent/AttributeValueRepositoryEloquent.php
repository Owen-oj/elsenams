<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\AttributeValueRepository;
use App\Repositories\Models\AttributeValue;
use App\Validators\AttributeValueValidator;

/**
 * Class AttributeValueRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class AttributeValueRepositoryEloquent extends BaseRepository implements AttributeValueRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AttributeValue::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
