<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    public function getSubscribers(){
        return $this->all();
        
    }

    public function delSubscriber($sub_id){
        
        return $this->where('id', $sub_id)->delete();
    }
}
