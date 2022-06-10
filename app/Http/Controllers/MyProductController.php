<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyProduct;
use App\Models\Product;

class MyProductController extends Controller
{

    public function removeProduct(Request $request){
        // return $request;
        // return auth()->user()->id;
       $del_it= MyProduct::where("user_id", auth()->user()->id)->where("id", $request->id)
        ->delete();
        // return $del_it;
        session()->flash("success","Product deleted successfully!");
        return back();
    }

    public function productDetail(Request $request){
//        dd($request->all());
        // return $request;
        $product_detail = Product::where("id", $request->product_id)->first();
        //dd($product_detail);
        $return = [
            "product_detail" => $product_detail,
        ];
        return view("product_detail", $return);
    }


    public function myproduct(){
        //dd('hello');

       $myproducts = MyProduct::where("my_products.user_id",auth()->user()->id)
       ->join("products", "products.id","my_products.product_id")
           ->join('countries', "countries.id", "my_products.country_of_purchase")
       ->select("products.*", "my_products.id as product_id",
           'my_products.date_of_purchase', 'my_products.country_of_purchase',
           'my_products.dealer_name', 'my_products.expiry', 'countries.name as country_name')->get();
        // dd($myproducts);
        $return=["myProducts" => $myproducts];
        return view("product_page", $return);
    }

    public function add_product(Request $request){
        //dd($request->all());
        //$product = Product::find($request->product_id);

        $purchase_date = $request->date_of_purchase;
        $expiry = date('Y-m-d', strtotime('+1 year', strtotime($purchase_date)));

        $data = [
            'user_id' => auth()->user()->id,
            'product_id' => $request->product_id,
            'country_of_purchase' => $request->country_id,
            'dealer_name' => $request->dealer_name,
            'date_of_purchase' => $request->date_of_purchase,
            'expiry' => $expiry,
        ];

        (new MyProduct())->addMyProduct($data);

//        MyProduct::firstOrCreate([
//            "user_id" => auth()->user()->id,
//            "product_id" => $request->product_id,
//        ]);
        session()->flash("added");
        return redirect()->route("home");
    }
}
