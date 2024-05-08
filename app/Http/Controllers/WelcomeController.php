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
            $items['articles'] = $category->products->take(4);

            array_push($products, $items);
        }
        return View('welcome',[
            'products' =>  $products
        ]);
    }


    public function maquillageListe(Request $request)
    {
        $category = Category::select('id','name') ->where('name', '=', $request->path())->get();
        $products['titre'] = $category[0]->name;
        $products['data'] = $category[0]->products;

        return View('maquillage',[
            'products' =>  $products
        ]);
    }

    public function parfunListe(Request $request)
    {
        $category = Category::select('id','name') ->where('name', '=', $request->path())->get();
        $products['titre'] = $category[0]->name;
        $products['data'] = $category[0]->products;

        return View('parfun',[
            'products' =>  $products
        ]);
    } 

    public function accessoiresListe(Request $request)
    {
        $category = Category::select('id','name') ->where('name', '=', $request->path())->get();
        $products['titre'] = $category[0]->name;
        $products['data'] = $category[0]->products;

        return View('accessoire',[
            'products' =>  $products
        ]);
    } 

    public function cheveuxListe(Request $request)
    {
        $category = Category::select('id','name') ->where('name', '=', $request->path())->get();
        $products['titre'] = $category[0]->name;
        $products['data'] = $category[0]->products;

        return View('cheveux',[
            'products' =>  $products
        ]);
    } 

    public function soinListe(Request $request)
    {
        $category = Category::select('id','name') ->where('name', '=', $request->path())->get();
        $products['titre'] = $category[0]->name;
        $products['data'] = $category[0]->products;

        return View('soins',[
            'products' =>  $products
        ]);
    } 
}
