<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class MyProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
        'date_of_purchase',
        'country_of_purchase',
        'dealer_name',
        'expiry'
    ];

    public function addMyProduct($data){
        return $this->create($data);
    }

//    public function product(){
//        return $this->belongsTo(Product::class);
//    }
}
