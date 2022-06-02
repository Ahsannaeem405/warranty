<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscription(Request $request){
        $data = new Subscription;
        $data->user_id = auth()->user()->id;
        $data->email = $request->email;
        if(Subscription::where("email",$request->email)->count()){
            return "2";
        }else{
            if($data->save()){
                return true;
            }else{
                return false;
            }
        }
        
        // return $request;
    }
}
