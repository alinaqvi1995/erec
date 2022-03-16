<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Recruiter;

class RecruiterController extends Controller
{
    // public function index()
    // {
    //     return view('employers.index');
    // }

    public function store(Request $request)
    {
        // dd($request->toArray());
        $rec = Recruiter::where('user_id', auth()->user()->id)->first();
        // dd($rec);
        try{
            DB::beginTransaction();
            if ($rec != null) 
            {
                $rec = Recruiter::where('user_id', auth()->user()->id)->first();
                if ($request->has('name')) {
                    $rec->name = $request->name;
                }
                // dd($rec->toArray());
                if ($request->has('country_code')) {
                    $rec->country_code = $request->country_code;
                }
                if ($request->has('phone')) {
                    $rec->phone = $request->phone;
                }
                if ($request->has('abn')) {
                    $rec->abn = $request->abn;
                }
                if ($request->has('description')) {
                    $rec->description = $request->description;
                }
                if ($request->terms == 1) {
                    $rec->terms = $request->terms;
                }
                else{
                    $rec->terms = 0;
                }

                if ($request->hasFile('avatar')) 
                {
                    $img = $request->avatar;
                    
                    $number = rand(1,999);
                    
                    $numb = $number / 7 ;
                    
                    $extension      = $img->extension();
                    $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
                    $filenamepath   = 'recruiterAvatar'.'/'.'img/'.$filenamenew;
                    $filename       = $img->move(public_path('storage/recruiterAvatar'.'/'.'img'),$filenamenew);
                    $rec->avatar = $filenamepath;
                    // dd($rec->toArray());
                }
                $rec->save();
            }
            else{
                $rec = new Recruiter;
                $rec->user_id       = auth()->user()->id;
                $rec->name          = $request->name;
                $rec->country_code  = $request->country_code;
                $rec->phone         = $request->phone;
                $rec->abn           = $request->abn;
                $rec->description   = $request->description;
                if ($request->terms == 1) {
                    $rec->terms = $request->terms;
                }
                else{
                    $rec->terms = 0;
                }

                if ($request->hasFile('avatar')) 
                {
                    $img = $request->avatar;
                    
                    $number = rand(1,999);
                    
                    $numb = $number / 7 ;
                    
                    $extension      = $img->extension();
                    $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
                    $filenamepath   = 'recruiterAvatar'.'/'.'img/'.$filenamenew;
                    $filename       = $img->move(public_path('storage/recruiterAvatar'.'/'.'img'),$filenamenew);
                    $rec->avatar = $filenamepath;
                    // dd($rec->toArray());
                }
                $rec->save();
            }
        DB::commit();
            return redirect()->route('dashboard')->with('success', 'Profile Updated Successfully!');
        }
        catch (\Throwable $e)
        {
            DB::rollback();

            return back()->with('error', $e->getMessage());
        }
        return back()->with('error', 'Error in Update!');
    }
}
