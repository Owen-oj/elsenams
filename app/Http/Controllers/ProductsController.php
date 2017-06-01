<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ImageRepository;
use App\Repositories\Contracts\ProductRepository;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $products,$images;

    public function __construct(ProductRepository $products,ImageRepository $images)
    {
        $this->products = $products;
        $this->images = $images;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->products->paginate(16);

        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $this->products->create($request->all());

        return redirect(route('upload',$product->id));
    }


    public function uploadForm($product_id)
    {

        return view('products.upload',compact('product_id'));
    }


    public function storeImages()
    {
        $image = $this->images->upload(request()->all());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
