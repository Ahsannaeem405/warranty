<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
        // dd("redirect to google");
    }

    /**
     * Create a new controller instance.
     *
     * @return string
     */
    public function handleGoogleCallback()
    {
        // dd("Response from google");
        try {

            $user = Socialite::driver('google')->user();

            //$userRecord = User::where('email', $user->email)->first();
            //dd($userRecord);

//            if(!empty($userRecord)){
//                $data2 = Http::get('https://api.ipify.org/?format=json');
//                $data2 = json_decode($data2->body());
//                $ip = $data2->ip;
//                $newUser = User::where('id', $userRecord->id)
//                ->update([
//                    'name' => $user->name,
//                    'is_admin' => "0",
//                    'address' => null,
//                    'ip_address' => $ip,
//                    'google_id'=> $user->id,
//                    //'password' => Hash::make('12345678')
//                ]);
//
//                Auth::login($newUser);
//
//                return redirect()->route('home');
//            }else{
//
//            }

            $finduser = User::where('google_id', $user->id)
            ->orwhere("email",$user->email)
            ->first();

            if($finduser){

                Auth::login($finduser);

                return redirect()->route('home');

            }else{
                $data2 = Http::get('https://api.ipify.org/?format=json');
                $data2 = json_decode($data2->body());
                $ip = $data2->ip;
                $newUser = User::firstOrCreate([
                    'name' => $user->name,
                    'is_admin' => "0",
                    'ip_address' => $ip,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => Hash::make('12345678')
                ]);

                Auth::login($newUser);

                return redirect()->route('home');
            }

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
