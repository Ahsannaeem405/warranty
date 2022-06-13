<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;
use Illuminate\Support\Facades\Http;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        // dd("helo");
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookSignin()
    {
//        dd("Return from fb");
        try {

            $user = Socialite::driver('facebook')->user();
            $facebookId = User::where('facebook_id', $user->id)->first();

            if($facebookId){
                Auth::login($facebookId);
                return redirect('/dashboard');
            }else{
                $data2 = Http::get('https://api.ipify.org/?format=json');
                $data2 = json_decode($data2->body());
                $ip = $data2->ip;
                $createUser = User::create([
                    'name' => $user->name,
                    'is_admin' => "0",
                    'ip_address' => $ip,
                    'email' => $user->email,
                    'facebook_id' => $user->id,
                    'password' => encrypt('john123')
                ]);

                Auth::login($createUser);
                return redirect('/dashboard');
            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
