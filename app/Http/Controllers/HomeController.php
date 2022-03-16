<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd("check");
        // return view('home');
        $user = Auth::user();
        // dd($user->role);

        if($user->role == "admin"){

            return redirect('/admin');

        }elseif($user->role == "rec"){

            return redirect('/recruiter');

        }elseif($user->role == "company"){

            return redirect('/company');

        }elseif($user->role == "user"){

            return redirect('/user');
        }

    }

    public function profile()
    {
        // dd("check");
        // return view('home');
        $user = Auth::user();
        // dd($user->role);

        if($user->role == "admin"){

            return redirect('/admin');

        }elseif($user->role == "rec"){

            return redirect('/recruiter/details');

        }elseif($user->role == "company"){

            return redirect('/company/details');

        }elseif($user->role == "user"){

            return redirect('/user/details');
        }

    }

    public function dashboard()
    {
        $user = Auth::user();
        // dd($user);
        if($user->role == "admin"){

            return view('adminpanel.pages.index');

        }
        elseif($user->role == "rec")
        {
            if (isset(auth()->user()->recruiter->avatar) AND isset(auth()->user()->recruiter->name)) 
            {
                return view('recruterpanel.pages.index');
            }
            else{
                return redirect()->route('recruiter.details');
            }
        }
        elseif($user->role == "company")
        {
            if (isset(auth()->user()->company->logo) AND isset(auth()->user()->company->name)) 
            {
                return view('companypanel.pages.index');
            }
            else
            {
                return redirect()->route('company.details');
            }

        }
        elseif($user->role == "user")
        {
            // dd($user);

            if($user->avatar != NULL && $user->candidate != NULL && $user->candidateEdu != NULL && $user->candidatePro != NULL)
            {
                return view('candidatepanel.pages.index');
            }
            else
            {
                return redirect()->route('candidates.details');
            }
        }

    }
}
