<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use App\Models\CompanyCategory;
use App\Models\CompanyFeatures;

class CompanyController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->toArray());
        $comp = Company::where('user_id', auth()->user()->id)->first();
        if ($comp != null) {
            $compFea = CompanyFeatures::where('com_id', $comp->id)->get();
        }
        // dd($comp['features'][1]->toArray());
        try{
            DB::beginTransaction();
            if ($comp != null) 
            {
                // dd($compFea->toArray());
                $comp = Company::where('user_id', auth()->user()->id)->first();
                if ($request->has('name')) {
                    $comp->name = $request->name;
                }
                if ($request->has('country_code')) {
                    $comp->country_code = $request->country_code;
                }
                if ($request->has('phone')) {
                    $comp->phone = $request->phone;
                }
                if ($request->has('abn')) {
                    $comp->abn = $request->abn;
                }
                if ($request->has('description')) {
                    $comp->description = $request->description;
                }
                if ($request->terms == 1) {
                    $comp->terms = $request->terms;
                }
                else{
                    $comp->terms = 0;
                }
                if ($request->hasFile('logo')) 
                {
                    $img = $request->logo;
                    $number = rand(1,999);
                    $numb = $number / 7 ;
                    $extension      = $img->extension();
                    $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
                    $filenamepath   = 'companyLogo'.'/'.'img/'.$filenamenew;
                    $filename       = $img->move(public_path('storage/companyLogo'.'/'.'img'),$filenamenew);
                    $comp->logo = $filenamepath;
                }
                // dd($comp);
                $comp->save();
                if($request->has('category'))
                {
                    // dd($request->category);
                    $fea = CompanyFeatures::where('com_id', $comp->id)->get();
                    $fea->each->delete();
                    foreach($request->category as $key => $pro)
                    {
                        $proExp = CompanyFeatures::create([
                            "com_id"        => $comp->id,
                            "comp_cat_id"   => $pro,
                        ]);
                    }
                }
                $comp->save();
            }
            else{
                $comp = new Company;
                $comp->user_id      = auth()->user()->id;
                $comp->name         = $request->name;
                $comp->country_code = $request->country_code;
                $rec->phone         = $request->phone;
                $rec->abn           = $request->abn;
                $comp->description  = $request->description;
                $comp->terms        = $request->terms;

                if ($request->hasFile('logo')) 
                {
                    $img = $request->logo;
                    $number = rand(1,999);
                    $numb = $number / 7 ;
                    $extension      = $img->extension();
                    $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
                    $filenamepath   = 'companyLogo'.'/'.'img/'.$filenamenew;
                    $filename       = $img->move(public_path('storage/companyLogo'.'/'.'img'),$filenamenew);
                    $comp->logo     = $filenamepath;
                }
                $comp->save();
                // $compFea =new CompanyFeatures;
                if($request->has('category'))
                {
                    // dd($request->year_exp);
                    foreach($request->category as $key => $pro)
                    {
                        $proExp = CompanyFeatures::create([
                            "com_id"        => $comp->id,
                            "comp_cat_id"   => $pro,
                        ]);
                        // dd($proExp);
                    }
                }
                $comp->save();
            }
        DB::commit();

            return redirect()->route('company.dashboard')->with('success', 'Profile Updated Successfully!');
        }
        catch (\Throwable $e) 
        {
            DB::rollback();

            return back()->with('error', $e->getMessage());
        }
        return back()->with('error', 'Error in Update!');
    }
}
