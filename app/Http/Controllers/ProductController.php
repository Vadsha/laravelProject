<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(4);
        return view('admin.products.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.products.create' , compact('brands' , 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,svg,webp'
        ]);
        if($request->has('image'))
        {
            $file = $request->image;
            $filename = time(). "_".$file->getClientOriginalName();
            $file->move(public_path('storage/products'),$filename);

            Product::create(
                [
                    'title' => $request->title,
                    'price' => $request->price,
                    'category_id' => $request->category_id,
                    'brand_id' => $request->brand_id,
                    'description' => $request->description,
                    'image' => $filename
                ]
                );
                return redirect()->route('products.index')->with('created' , 'A new product has been created!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show' , compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.products.edit',compact('product' , 'brands' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,svg,webp'
        ]);
        if($request->has('image'))
        {
            unlink(public_path('storage/products/'. $product->image));

            $file = $request->image;
            $filename = time(). "_".$file->getClientOriginalName();
            $file->move(public_path('storage/products'),$filename);

            $product->update(
                [
                    'title' => $request->title,
                    'price' => $request->price,
                    'category_id' => $request->category_id,
                    'brand_id' => $request->brand_id,
                    'description' => $request->description,
                    'image' => $filename
                ]
                );
                return redirect()->route('products.index')->with('updated' , 'A new product has been updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $path = public_path('storage/products/'. $product->image);
        if(file_exists($path))
        {
            unlink($path);
            $product->delete();
            return redirect()->route('products.index')->with('deleted','Product has been deleted successfully!');
        }
    }
}
