<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function saveCSV(Request $request){

        $csv_array = csvToArray($request->file("csv"));
        for ($i = 1; $i <= count($csv_array); $i++)
        {
            // dd();
            $csv_array[$i]["purchased_date"] = Carbon::create($csv_array[$i+1]["purchased_date"])->format("Y-m-d");
            $csv_array[$i]["expiry_date"] = Carbon::create($csv_array[$i+1]["expiry_date"])->format("Y-m-d");
            // dd($csv_array[$i+1]["expiry_date"]);
        Product::create($csv_array[$i]);
        }
        Session::flash("success","Records inserted successfully!");
        return back();

    
    }

    public function deleteproduct(Request $request){
        Product::where("id", $request->id)->delete();
        session()->flash("success", "Product deleted successfully!");
        return redirect()->route("productList");

    }

    public function productList(){
        $product = Product::all();
        $return = ["products" => $product];
        return view("admin.product", $return);
    }

    public function saveProduct(Request $request){
        // return $request; 
        // if($request->hasfile("file")){
        //     $file = $request->file("file");
        //     $extenssion = $file->getClientOriginalExtension();
        //     $name = "img-". rand() . "-" . Carbon::now()->format("Ymd") . "." . $extenssion;
        //     $path = ('products');
        //     $file->move($path, $name);
        // }else{
        //     if($request->id){
        //         $product_data = Product::find($request->product_id);
        //         $name = $product_data->image;
        //     }else{
        //         $name = "";
        //     }
            
        // }
        $name = $request->file;
        $product = new Product;
        $product->name = $request->name;
        $product->user_id = auth()->user()->id;
        $product->image = $name;
        $product->price = $request->price;
        $product->serial_no = $request->serial;
        $product->expiry_date = $request->expiry;
        $product->purchased_date = $request->purchased;
        $product->sku = $request->sku;
        $product->description = $request->description;
        if($request->id){
            Product::where("id", $request->id)->update([
                "name" => $request->name,
                "user_id" => auth()->user()->id,
                "image" => $name,
                "price" => $request->price,
                "sku" => $request->sku,
                "expiry_date" => $request->expiry,
                "purchased_date" => $request->purchased,
                "serial_no" => $request->serial,
                "description" => $request->description
            ]);
            session()->flash("success", "Product updated successfully!");
        }else{
            $product->save();
            session()->flash("success", "Product added successfully!");
        }
           
        return redirect()->route("productList");
    }
}
