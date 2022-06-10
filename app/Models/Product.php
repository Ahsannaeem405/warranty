<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MyProduct;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'image',
        'sku',
        'serial_no',
    ];

//    public function myProducts(){
//        return $this->hasMany(MyProduct::class);
//    }
}
