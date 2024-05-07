<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::select('id','name')->get();
        $products = array();

        foreach ($categories as $category) {
            $items = [];
            $items['titre'] = $category->name;
            $items['articles'] = $category->products;

            array_push($products, $items);
        }

        return View('welcome',[
            'products' =>  $products
        ]);
    } 
}
