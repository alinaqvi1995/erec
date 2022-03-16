<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CandidateDocs;
use App\Models\Candidate;
use App\Models\CandidateProfessionalExp;
use App\Models\Skills;
use App\Models\CandidateSkills;
use App\Models\CandidateEdu;
use App\Models\User;

class CandidateDashboardController extends Controller
{
    //
    public function cvList()
    {
        $docs = CandidateDocs::where('user_id',auth()->user()->id)->get();
        return view('candidatepanel.pages.cvList',compact('docs'));
    }
    public function visibility($id)
    {
        // dd($id);
        $can = Candidate::find(auth()->user()->candidate->id);
        $can->status  = $id;
        $can->save();
        return response()->json(['message','success']);
    }
    public function candidatesProfile()
    {
        $user = User::with('candidate')->where('id', auth()->user()->id)->first();
        // dd($user->toArray());
        return view('candidatepanel.pages.detail', compact('user'));
    }

    public function candidatesEducation()
    {
        $user = User::with('candidateEdu')->where('id', auth()->user()->id)->first();
        // dd($user->candidateEdu->toArray());
        return view('candidatepanel.pages.education', compact('user'));
    }

    public function newEducation()
    {
        return view('candidatepanel.pages.newEducation');
    }

    public function candidatesProfession()
    {
        $user = User::with('candidatePro')->where('id', auth()->user()->id)->first();
        // dd($user->toArray());
        return view('candidatepanel.pages.profession', compact('user'));
    }

    public function newProfession()
    {
        return view('candidatepanel.pages.newProfession');
    }

    public function profileUpdate(Request $request)
    {
        // dd($request->toArray());
        $cand = Candidate::where('user_id', auth()->user()->id)->first();
        // dd($request->first_name);
        try{
            DB::beginTransaction();
            if ($request->has('first_name'))
            {
                $cand->first_name = $request->first_name;
                // dd($cand->first_name);
            }
            if ($request->has('last_name'))
            {
                $cand->last_name = $request->last_name;
            }
            if ($request->has('gender'))
            {
                $cand->gender = $request->gender;
            }
            if ($request->has('nationality'))
            {
                $cand->nationality = $request->nationality;
            }
            if ($request->has('address'))
            {
                $cand->address = $request->address;
            }
            if ($request->has('email'))
            {
                $cand->email = $request->email;
            }
            if ($request->has('country_code'))
            {
                $cand->country_code = $request->country_code;
            }
            if ($request->has('number'))
            {
                $cand->number = $request->number;
            }
            if ($request->terms == 1)
            {
                $cand->terms = 1;
            }
            else{
                $cand->terms = 0;
            }
            if($request->has('head_line'))
            {
                $cand->head_line = $request->head_line;
            }
            if($request->has('dob'))
            {
                $cand->dob  = $request->dob;
            }
            if($request->has('languages'))
            {
                $cand->languages = $request->languages;
            }
            if($request->has('religion'))
            {
                $cand->religion  = $request->religion;
            }
            if($request->has('marital_status'))
            {
                $cand->marital_status   = $request->marital_status;
            }
            if($request->has('driving_license'))
            {
                $cand->driving_license  = $request->driving_license;
            }
            if($request->has('visa_status'))
            {
                $cand->visa_status  = $request->visa_status;
            }
            $cand->save();
            // dd($cand->toArray());

            if($request->hasFile('avatar'))
            {
                $img = $request->avatar;
                $number = rand(1,999);
                $numb = $number / 7 ;
                $extension      = $img->extension();
                $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
                $filenamepath   = 'candidateAvatar'.'/'.'img/'.$filenamenew;
                $filename       = $img->move(public_path('storage/candidateAvatar'.'/'.'img'),$filenamenew);
                $user = User::find(auth()->user()->id);
                if(file_exists($user->avatar))
                {
                    File::delete($user->avatar);
                }
                $user->avatar = $filenamepath;
                $user->save();
            }

        DB::commit();

            return back()->with('success', 'Updated Successfully!');
        }
        catch (\Throwable $e)
        {
            DB::rollback();

            return back()->with('error', $e->getMessage());
        }
        return back()->with('error', 'Error in Update!');
    }

    public function educationUpdate(Request $request)
    {
        // dd($request->toArray());
        // $cand = Candidate::where('user_id', auth()->user()->id)->first();
        try{
            DB::beginTransaction();

            if($request->has('edu_id'))
            {
                $ed = CandidateEdu::where('id', $request->edu_id)->first();
                if($request->has('education'))
                {
                    $ed->education = $request->education;
                }
                if($request->has('course'))
                {
                    $ed->course = $request->course;
                }
                if($request->has('institute'))
                {
                    $ed->institute = $request->institute;
                }
                if($request->has('institute_loc'))
                {
                    $ed->institute_loc = $request->institute_loc;
                }
                if($request->has('passing_year'))
                {
                    $ed->passing_year = $request->passing_year;
                }
                $ed->save();
            }
            elseif($request->has('passing_year'))
            {
                // dd($request->passing_year);
                foreach($request->education as $key => $edu)
                {
                    $ed = new CandidateEdu;
                    $ed->user_id        = auth()->user()->id;
                    $ed->education      = $request->education[$key];
                    $ed->course         = $request->course[$key];
                    $ed->institute      = $request->institute[$key];
                    $ed->institute_loc  = $request->institute_loc[$key];
                    $ed->passing_year   = $request->passing_year[$key];
                    $ed->save();
                }
            }

            if($request->hasFile('document'))
            {
                foreach($request->document as $key => $do)
                {
                    $doc = new CandidateDocs;
                    $img = $do;
                    $number = rand(1,999);
                    $numb = $number / 7 ;
                    $extension      = $img->extension();
                    $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
                    $filenamepath   = 'candidateDoc'.'/'.'doc/'.$filenamenew;
                    $filename       = $img->move(public_path('candidateDoc'.'/'.'doc'),$filenamenew);
                    $doc->user_id = auth()->user()->id;
                    $doc->document = $filenamenew;
                    $doc->save();
                }
            }
        DB::commit();

            return redirect()->route('candidates.education.view')->with('success', 'Updated Successfully!');
        }
        catch (\Throwable $e)
        {
            DB::rollback();

            return back()->with('error', $e->getMessage());
        }
        return back()->with('error', 'Error in Update!');
    }

    public function professionUpdate(Request $request)
    {
        // dd($request->toArray());
        try{
            DB::beginTransaction();
            if($request->has('pro_id'))
            {
                $proExp = CandidateProfessionalExp::where('id', $request->pro_id)->first();
                if ($request->has('year_exp'))
                {
                    $proExp->year_exp = $request->year_exp;
                }
                if($request->has('month_exp'))
                {
                    $proExp->month_exp = $request->month_exp;
                }
                if($request->has('designation'))
                {
                    $proExp->designation = $request->designation;
                }
                if($request->has('company_name'))
                {
                    $proExp->company_name = $request->company_name;
                }
                if($request->has('comp_loc'))
                {
                    $proExp->comp_loc = $request->comp_loc;
                }
                if($request->has('currency'))
                {
                    $proExp->currency = $request->currency;
                }
                if($request->has('salary'))
                {
                    $proExp->salary = $request->salary;
                }
                $proExp->save();
            }
            elseif($request->has('year_exp'))
            {
                foreach($request->year_exp as $key => $pro)
                {
                    $proExp = CandidateProfessionalExp::create([
                        "user_id"       => auth()->user()->id,
                        "year_exp"      => $request->year_exp[$key],
                        "month_exp"     => $request->month_exp[$key],
                        "designation"   => $request->designation[$key],
                        "company_name"  => $request->company_name[$key],
                        "comp_loc"      => $request->comp_loc[$key],
                        "currency"      => $request->currency[$key],
                        "salary"        => $request->salary[$key],
                    ]);
                }
            }

            if ($request->has('skills'))
            {
                $skillcand = CandidateSkills::where('user_id', auth()->user()->id)->get();
                // dd($skillcand->toArray());
                $skillcand->each->delete();
                foreach($request->skills as $key => $skill)
                {
                    $skillss = new CandidateSkills;
                    $skillss->user_id    = auth()->user()->id;
                    $skillss->skill_id   = $skill;
                    $skillss->save();
                }
            }
            DB::commit();

            return redirect()->route('candidates.profession.view')->with('success', 'Updated Successfully!');
        }
        catch (\Throwable $e)
        {
            DB::rollback();

            return back()->with('error', $e->getMessage());
        }

        return back()->with('error', 'Error in Update!');
    }
    public function professionDelete($id)
    {
        $canPro = CandidateProfessionalExp::where('id', $id)->first();
        // dd($canPro->toArray());
        $canPro->delete = 1;
        $canPro->save();
        return back();
    }
    public function educationDelete($id)
    {
        $canEdu = CandidateEdu::where('id', $id)->first();
        // dd($canEdu->toArray());
        $canEdu->delete = 1;
        $canEdu->save();
        return back();
    }
}
