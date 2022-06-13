<?php

namespace App\Http\Controllers;

use App\Models\MyProduct;
use App\Models\User;
use Illuminate\Http\Request;

class UserProductsController extends Controller
{
    public function index(){

        $myProducts = (new MyProduct())
            ->leftJoin('users', 'users.id', 'my_products.user_id')
            ->leftJoin('products', 'products.id','my_products.product_id')
            ->select('my_products.*', 'products.*', 'users.name as user_name', 'country_of_purchase')
            ->get();

        $return = ['myProducts' => $myProducts];
        return view('admin.usersproducts', $return);
    }
}
