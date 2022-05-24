<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
// use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function checkpassword(Request $request){
        $pass = User::where("id", auth()->user()->id)
        ->first();
        $hashed_password = $pass->password;
        $plain_password = $request->old_password;
        // dd($pass->password);
        if (Hash::check($plain_password, $hashed_password)) {
            return true;
        }else{
            return "0";
        }
        // return $pass;
    }

    public function updateProfile (Request $request){
        if($request->hasfile("file")){
            $file = $request->file("file");
            $extenssion = $file->getClientOriginalExtension();
            $name = "img-". rand() . "-" . Carbon::now()->format("Ymd") . "." . $extenssion;
            $path = ('upload');
            $file->move($path, $name);
        }else{
            $name = Auth::user()->profile_pic;
        }
        User::where("id", $request->id)->update([
            "name" => $request->name,
            "email" => $request->email,
            "address" => $request->address,
            "mobile" => $request->number,
            "profile_pic" => $name,
        ]);

        session()->flash("success", "User Updated successfully!");
        return redirect()->route("users");
    }

    public function editUser(Request $request){
        $userdata = User::where("id", $request->id)->first();
        $return = [
            "user" => $userdata,
        ];
        return view("admin.edit-user", $return);
    }

    public function deleteUser(Request $request){
        User::where("id", $request->id)->delete();
        session()->flash("success", "User deeleted successfully!");
        return back();
    }

    public function usersList(){
        $users = User::where("is_admin", "0")->get();
        $return = [
            "users" => $users,
        ];
        return view("admin.users", $return);
    }

    public function adminProfile(){
        return view("admin.profile");
    }

    public function saveProfile (Request $request){
        // return $request;
        // $file_name ="";
        if($request->hasfile("file")){
            $file = $request->file("file");
            $extenssion = $file->getClientOriginalExtension();
            $name = "img-". rand() . "-" . Carbon::now()->format("Ymd") . "." . $extenssion;
            $path = ('upload');
            $file->move($path, $name);
        }else{
            $name = Auth::user()->profile_pic;
        }
        $pass = "";
        if($request->newpassword == ""){
            $passwordfind = User::find(Auth::user()->id);
            $pass = $passwordfind->password;
        }else{
            $pass = Hash::make($request->newpassword);
        }

        User::where("id", Auth::user()->id)->update([
            "name" => $request->name,
            "email" => $request->email,
            "mobile" => $request->number,
            "address" => $request->address,
            "profile_pic" => $name,
            "password" => $pass,
        ]);
        Session::flash("success", "Profile updated successfully!");
        return back();
    }
}
