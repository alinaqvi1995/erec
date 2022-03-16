<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruiter;
use App\Models\CompanyRecRelation;

class RequestController extends Controller
{
    //
    public function recruiter()
    {
        // dd(auth()->user()->company->rec);
        $rec = Recruiter::get();
        // dd($rec->toArray());
        return view('companypanel.pages.request.index',compact('rec'));
    }
    public function sendRequest($id)
    {
        CompanyRecRelation::create([
            'com_id'=> auth()->user()->company->id,
            'rec_id'=> $id,
        ]);
        return redirect()->back();
    }

}
