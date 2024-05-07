<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFormRequest;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::orderBy('created_at','desc')->paginate(5);
        //return($products);
        return View('admin.product.index',[
            'products' =>  $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id','name')->get();
        return View("admin.product.create",[
            'categories' =>  $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductFormRequest $request)
    {
        $data = $request->validated();
        $image = $data['image_path'] ?? null;

        if ($image) {
            $data['image_path'] = $image->store('product/' . Str::random(), 'public');
        }

        Products::create($data);

        return to_route('product.index')
            ->with('success', 'product was created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        $categories = Category::select('id','name')->get();

        return View("admin.product.edite",[
            'categories' =>  $categories,
            'product' =>  $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductFormRequest $request, Products $product)
    {
        $data = $request->validated();
        $image = $data['image_path'] ?? null;
        if ($image) {
            if ($product->image_path) {
                Storage::disk('public')->deleteDirectory(dirname($product->image_path));
            }
            $data['image_path'] = $image->store('product/' . Str::random(), 'public');
        }
        $product->update($data);

        return to_route('product.index')
            ->with('success', "Product \"$product->name\" was updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        $name = $product->name;
        $product->delete();
        if ($product->image_path) {
            Storage::disk('public')->deleteDirectory(dirname($product->image_path));
        }
        return to_route('product.index')
            ->with('success', "product \"$name\" was deleted");
    }
}
