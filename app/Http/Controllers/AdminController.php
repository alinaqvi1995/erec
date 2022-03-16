<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyCategory;
use App\Models\CompanyFeatures;
use App\Models\Recruiter;
use App\Models\Candidate;
use App\Models\CandidateProfessionalExp;
use App\Models\CandidateSkills;
use App\Models\CandidateDocs;
use App\Models\CandidateEdu;
use App\Models\Skills;
use App\Models\User;

class AdminController extends Controller
{
    public function companyIndex()
    {
        $comp = Company::with('user')->get();
        // dd($comp->toArray());
        return view('adminpanel.pages.company.index', compact('comp'));
    }
    public function recruiterIndex()
    {
        $rec = Recruiter::with('user')->get();
        // dd($rec->toArray());
        return view('adminpanel.pages.recruiter.index', compact('rec'));
    }
    public function candidateIndex()
    {
        $can = Candidate::with('user')->get();
        // dd($can->toArray());
        return view('adminpanel.pages.candidate.index', compact('can'));
    }
    public function companyDetails($id)
    {
        $comp = Company::with('user')->where('id', $id)->first();
        // dd($comp->toArray());
        return view('adminpanel.pages.company.detail', compact('comp'));
    }
    public function recruiterDetails($id)
    {
        $rec = Recruiter::with('user')->where('id', $id)->first();
        // dd($rec->toArray());
        return view('adminpanel.pages.recruiter.detail', compact('rec'));
    }
    public function candidateDetails($id)
    {
        $can = Candidate::with('user')->where('id', $id)->first();
        // dd($can->user->avatar);
        return view('adminpanel.pages.candidate.detail', compact('can'));
    }
    public function skills()
    {
        $skills = Skills::get();
        // dd($skills->toArray());
        return view('adminpanel.pages.skills.index', compact('skills'));
    }
    public function addSkill()
    {
        return view('adminpanel.pages.skills.create');
    }
    public function storeSkill(Request $request)
    {
        // dd($request->toArray());
        if($request->has('skill_id'))
        {
            $skills = Skills::where('id', $request->skill_id)->first();
            $skills->name = $request->name;
            $skills->description = $request->description;
        }
        else
        {
            $skills = new Skills;
            $skills->name = $request->name;
            $skills->description = $request->description;
        }
        $skills->save();

        return redirect()->route('admin.skills');
    }
    public function editSkill($id)
    {
        $skills = Skills::where('id', $id)->first();
        // dd($skills->toArray());
        return view('adminpanel.pages.skills.edit', compact('skills'));
    }
    public function destroySkill($id)
    {
        $skills = Skills::where('id', $id)->first();
        // dd($skills->toArray());
        $skills->delete();
        return redirect()->route('admin.skills');
    }
    // Category
    public function category()
    {
        $cat = CompanyCategory::get();
        // dd($cat->toArray());
        return view('adminpanel.pages.category.index', compact('cat'));
    }
    public function addCategory()
    {
        return view('adminpanel.pages.category.create');
    }
    public function storeCategory(Request $request)
    {
        // dd($request->toArray());
        if($request->has('cat_id'))
        {
            $cat = CompanyCategory::where('id', $request->cat_id)->first();
            $cat->name = $request->name;
            if($request->has('img'))
            {
                $img = $request->img;
                $number = rand(1,999);
                $numb = $number / 7 ;
                $extension      = $img->extension();
                $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
                $filenamepath   = 'category'.'/'.'img/'.$filenamenew;
                $filename       = $img->move(public_path('storage/category'.'/'.'img'),$filenamenew);
                $cat->img      = $filenamepath;
            }
            else
            {
                $cat->img = "";
            }
        }
        else
        {
            $cat = new CompanyCategory;
            $cat->name = $request->name;
            if($request->has('img'))
            {
                $img = $request->img;
                $number = rand(1,999);
                $numb = $number / 7 ;
                $extension      = $img->extension();
                $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
                $filenamepath   = 'category'.'/'.'img/'.$filenamenew;
                $filename       = $img->move(public_path('storage/category'.'/'.'img'),$filenamenew);
                $cat->img      = $filenamepath;
            }
            else
            {
                $cat->img = "";
            }
        }
        $cat->save();

        return redirect()->route('admin.category');
    }
    public function editCategory($id)
    {
        $cat = CompanyCategory::where('id', $id)->first();
        // dd($skills->toArray());
        return view('adminpanel.pages.category.edit', compact('cat'));
    }
    public function destroyCategory($id)
    {
        $cat = CompanyCategory::where('id', $id)->first();
        // dd($skills->toArray());
        $cat->delete();
        return redirect()->route('admin.category');
    }
    // User
    public function allUsers()
    {
        $user = User::where('role', '!=', 'admin')->get();
        // dd($user->toArray());
        return view('adminpanel.pages.user.index', compact('user'));
    }
    public function editUser($id)
    {
        $user = User::find($id);
        // dd($user->toArray());
        return view('adminpanel.pages.user.edit', compact('user'));
    }
    public function approveUser(Request $request)
    {
        // dd($request->toArray());
        $user = User::where('id', $request->user_id)->first();
        // dd($user->toArray());
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();
        return back();
    }
    
}
