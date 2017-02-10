<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckArticleRequest;
use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\CheckUpdateRequest;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all the information in the product
        $items = Product::paginate(2);
        //load the view and pass the product
        return view ('Products.index')->with(['items'=> $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckArticleRequest $request)
    {
        //dd($request->all());
        $input = $request->only([
            'name', 'description', 'price'
        ]);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            //getting timestamp
            $timestamp = time();

            $name = $timestamp . '.' . $file->getClientOriginalExtension();

            $file->move(public_path() . '/photo/', $name);
            $input['photo'] = $name;
        }
        Product::create($input);

        return redirect()->route('product.index')
            ->with('success', 'Product create successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        //get all the information in the product
        $item = Product::find($product);
        return view('Products.show')->with(['item'=>$item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {

        $item = Product::find($product);
       // dd($item);
        return view('Products.edit')->with(['item'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CheckUpdateRequest $request, $product)
    {
        $product1 = Product::find($product);
        $product1->name = $request->name;
        $product1->description = $request->description;
        $product1->price = $request->price;
        if ($request->hasFile('photo')) {

            $file = $request->file('photo');
            //getting timestamp
            $timestamp = time();

            $name = $timestamp . '.' . $file->getClientOriginalExtension();

            $file->move(public_path() . '/photo/', $name);
            $product1->photo = $name;
        }
        $product1->save();
        return redirect()->route('product.index')
            ->with('success', 'Product update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        Product::find($product)->delete();
        return redirect()->route('product.index')
            ->with('success','Product deleted');
    }
}
