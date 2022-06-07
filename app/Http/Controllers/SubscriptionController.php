<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(){
        try{
            $results = (new Subscription)->getSubscribers();

           return view('admin.subscription', compact('results'));

        } catch (Exception $ex){
             return back()->withError($ex->getMessage());
        }
    }

    public function subscription(Request $request){
        
        $data = new Subscription;
        // $data->user_id = auth()->user()->id;
        $data->email = $request->email;
        if(Subscription::where("email", $request->email)->count()){
            return "2";
        }
        else{
            if($data->save()){
                return true;
            }
            else{
                return false;
            }
        }
        
        // return $request;
    }

    public function destroy($id){
        try{
            $sub_id = decrypt($id);

            $result = (new Subscription)->delSubscriber($sub_id);

            if($result == 1){
                return redirect()->back()->with('success', 'Record deleted successfully.');
            }
            else{
                return redirect()->back()->with('error', 'Something went wrong.');
            }

        } catch(Exception $ex){
            return back()->withError($ex->getMessage());
        }
    }
}
