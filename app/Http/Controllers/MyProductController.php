<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyProduct;
use App\Models\Product;

class MyProductController extends Controller
{

    public function productDetail(Request $request){
        // return $request;
        $product_detail = Product::where("id", $request->product_id)->first();
        $return = [
            "product_detail" => $product_detail,
        ];
        return view("product_detail", $return);
    }


    public function myproduct(){
        $myproducts = MyProduct::where("my_products.user_id",auth()->user()->id)
        ->join("products","products.id","my_products.product_id")
        ->select("products.*")
        ->get();
        // dd($myproducts);
        $return=["myproducts" => $myproducts];
        return view("product_page", $return);
    }

    public function add_product(Request $request){
        // return $request->product_id;
        MyProduct::firstOrCreate([
            "user_id" => auth()->user()->id,
            "product_id" => $request->product_id,
        ]);
        session()->flash("added");
        return redirect()->route("home");
    }
}
