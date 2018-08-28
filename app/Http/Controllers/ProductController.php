<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $product=new Product;
        $product->name=$request->name;
        $product->category_id=$request->category_id;
        $product->subcategory_id=$request->subcategory_id;
        $product->productdetail=$request->productdetail;
        $product->materialandcare=$request->materialandcare;
        $product->sizeandfit=$request->sizeandfit;
        $product->styledescribe=$request->styledescribe;
        $product->price=$request->price;

        if( $fileone= $request->file('image_one')){

         $filenameone=$fileone->getClientOriginalName();
         $fileone->move('img', $filenameone);
          $product->image_one=$filenameone;  
        }

        if( $filetwo = $request->file('image_two')){

         $filenametwo=$filetwo->getClientOriginalName();
         $filetwo->move('img', $filenametwo);
          $product->image_two=$filenametwo;  
        }

         if( $filethree = $request->file('image_three')){

         $filenamethree=$filethree->getClientOriginalName();
         $filethree->move('img', $filenamethree);
          $product->image_three=$filenamethree;  
        }
        
        

        $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
         $categories =Category::All();


        return view('Products.show')->with('categories', $categories)->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);

        return view('Products.edit')->with('product', $product);
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
        $product = Product::find($id);
        $product->name=$request->name;
        $product->category_id=$request->category_id;
        $product->subcategory_id=$request->subcategory_id;
        $product->productdetail=$request->productdetail;
        $product->materialandcare=$request->materialandcare;
        $product->sizeandfit=$request->sizeandfit;
        $product->styledescribe=$request->styledescribe;
        $product->price=$request->price;

        if( $fileone= $request->file('image_one')){

         $filenameone=$fileone->getClientOriginalName();
         $fileone->move('img', $filenameone);
          $product->image_one=$filenameone;  
        }

        if( $filetwo = $request->file('image_two')){

         $filenametwo=$filetwo->getClientOriginalName();
         $filetwo->move('img', $filenametwo);
          $product->image_two=$filenametwo;  
        }

         if( $filethree = $request->file('image_three')){

         $filenamethree=$filethree->getClientOriginalName();
         $filethree->move('img', $filenamethree);
          $product->image_three=$filenamethree;  
        }
        

        $product->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
    }
}
