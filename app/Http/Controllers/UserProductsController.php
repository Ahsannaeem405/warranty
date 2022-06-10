<?php

namespace App\Http\Controllers;

use App\Models\MyProduct;
use App\Models\User;
use Illuminate\Http\Request;

class UserProductsController extends Controller
{
    public function index(){

        $myProducts = (new MyProduct())
            ->join('users', 'users.id', 'my_products.user_id')
            ->join('products', 'products.id','my_products.product_id')
            ->join('countries', "countries.id", "my_products.country_of_purchase")
            ->select('my_products.*', 'products.*', 'users.name as user_name',
                'countries.name as country_name')
            ->get();
//dd($myProducts);
        $return = ['myProducts' => $myProducts];
        return view('admin.usersproducts', $return);
    }
}
