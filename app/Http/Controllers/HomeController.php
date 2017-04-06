<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_new = Product::take(6)->get();
        $product_tb = Product::orderBy('view')->take(6)->get();
        return view('home',compact('product_new','product_tb'));
    }


    public  function product(Request $request){
        $part = $request->get('part',30);

        $products = DB::table('products');


        if($request->has('category')){
            $id = $request->get('category',0);
            $products = $products->where('category_id','=',$id);
        }
        $products =  $products->paginate($part);
        $categories = Category::all();
        return view('product',compact('products','categories'));
    }

    public function detail(Product $product){
        return view('detail',compact('product'));
    }


    public function contact(Request $request){
        return view('contact');
    }


}
