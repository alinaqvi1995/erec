<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        
        $user = Socialite::driver('google')->user();

        // dd($user);
        if(isset($user)){

        $userlogin = User::where('email','=',$user->email)->first();

            // dd($userlogin);

            if(isset($userlogin)){

                
                // dd($userlogin);

                if(($userlogin->role == 'user') && ($userlogin->status == 1  )){

                    Auth::login($userlogin);

                    return redirect('/user');
                    
                }elseif(($userlogin->role == 'admin') && ($userlogin->status == 1  )){

                    Auth::login($userlogin);

                    return redirect('/admin');

                }elseif(($userlogin->role == 'rec') && ($userlogin->status == 1  )){

                    Auth::login($userlogin);

                    return redirect('/recruiter');

                }elseif( ($userlogin->role == 'company') && ($userlogin->status == 1  )){

                    Auth::login($userlogin);

                    return redirect('/company');

                }else{

                    // dd('bro');

                    return redirect('/login')->with('message','Sorry your Profile in not actived yet!!');

                }

            }else{

                $myuserlogin = User::create([
                    'name'      => $user->name,
                    'email'     => $user->email,
                    'password'  => Hash::make('Hashone'),
                    'role'      => 'user',
                ]);

                Auth::login($userlogin);

                return redirect('/user');

            }

        }else{

            return "user variable not found";

        }

        return "not found";

    }

    public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }


    public function handleLinkedinCallback()
    {
        
        $user = Socialite::driver('linkedin')->user();

        // dd($user->name);

        if(isset($user)){

            $userlogin = User::where('email','=',$user->email)->first();
    
                // dd($userlogin);
    
                if(isset($userlogin)){
    
                    
                    // dd($userlogin);
    
                    if(($userlogin->role == 'user') && ($userlogin->status == 1  )){
    
                        Auth::login($userlogin);
    
                        return redirect('/user');
                        
                    }elseif(($userlogin->role == 'admin') && ($userlogin->status == 1  )){
    
                        Auth::login($userlogin);
    
                        return redirect('/admin');
    
                    }elseif(($userlogin->role == 'rec') && ($userlogin->status == 1  )){
    
                        Auth::login($userlogin);
    
                        return redirect('/recruiter');
    
                    }elseif( ($userlogin->role == 'company') && ($userlogin->status == 1  )){
    
                        Auth::login($userlogin);
    
                        return redirect('/company');
    
                    }else{
    
                        // dd('bro');
    
                        return redirect('/login')->with('message','Sorry your Profile in not actived yet!!');
    
                    }
    
                }else{
    
                    $myuserlogin = User::create([
                        'name'      => $user->name,
                        'email'     => $user->email,
                        'password'  => Hash::make('Hashone'),
                        'role'      => 'user',
                    ]);
    
                    Auth::login($userlogin);
    
                    return redirect('/user');
    
                }
    
            }else{
    
                return "user variable not found";
    
            }
    
            return "not found";

    }
}
