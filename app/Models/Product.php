<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MyProduct;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'price',
        'sku',
        'serial_no',
        'expiry_date',
        'purchased_date',
        'description',
    ];

    public function myProducts(){
        return $this->hasMany(MyProduct::class);
    }
}
