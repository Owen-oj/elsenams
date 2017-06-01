<?php

namespace App\Repositories\Eloquent;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\ImageRepository;
use App\Repositories\Models\Image;

/**
 * Class ImageRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class ImageRepositoryEloquent extends BaseRepository implements ImageRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Image::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }


    public function storageDisk()
    {
        $s3 = Storage::disk('public');
        return $s3;
    }

    /**
     * Upload photo
     * @param $formdata
     * @return mixed
     */
    public function upload($formdata)
    {

        //dd($formdata);
        $file = $formdata['file'];
        $imageExt = $file->getClientOriginalExtension();
        $nameWithExt = uniqid() .time(). '.' . $imageExt;
        $iconSize = $this->iconSize($file, $nameWithExt);
        $cardSize = $this->cardSize($file, $nameWithExt);
        $fullSize = $this->fullSize($file, $nameWithExt);

        //todo  add Delete Method
        $artwork = Image::create([
            'icon_size' =>$iconSize,
            'card_size' =>$cardSize,
            'full_size' =>$fullSize,
            'product_id' => $formdata['product_id']
        ]);
        return $artwork;
    }



    /**
     * Save Icon size of original Image
     * @param $file
     * @param $nameWithExt
     * @return string
     */
    public function iconSize($file, $nameWithExt)
    {
        $manager = new ImageManager();
        $image = $manager->make($file)->resize(300, 200);
        $icon = $image->stream();
        $stored = $this->storageDisk()->put(config('es.iconSize') . $nameWithExt, $icon->__toString(),'public');
        $path =config('tourism.iconSize').$nameWithExt;
        return $path;

    }

    /**
     * Save medium or card size of original Image
     * @param $file
     * @param $nameWithExt
     * @return string
     */
    public function cardSize($file, $nameWithExt)
    {
        $manager = new ImageManager();
        $image = $manager->make($file)->resize(640, 540);
        $card = $image->stream();
        $stored = $this->storageDisk()->put(config('es.cardSize') . $nameWithExt, $card->__toString(),'public');
        $path = config('tourism.cardSize').$nameWithExt;
        return $path;

    }

    /**
     * Save medium or card size of original Image
     * @param $file
     * @param $nameWithExt
     * @return string
     */
    public function fullSize($file, $nameWithExt)
    {
        $manager = new ImageManager();
        $image = $manager->make($file)->resize(1000, 800);
        $card = $image->stream();
        $stored =$this->storageDisk()->put(config('es.fullSize') . $nameWithExt, $card->__toString(),'public');
        $path = config('tourism.fullSize').$nameWithExt;
        return $path;

    }
}
