<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\CompanyCategory;
use App\Models\CompanyFeatures;
use App\Models\Posts;
use App\Models\Recruiter;
use App\Models\CompanyRecRelation;
use App\Models\Skills;
use App\Models\PostSkill;
use App\Models\JobApplications;

class CompanyDashboardController extends Controller
{
    //
    public function profile()
    {
        $user = User::with('company')->find(auth()->user()->id);
        $category = CompanyCategory::all();
        // dd($user->toArray());
        return view('companypanel.pages.profileSetup',compact('user','category'));
    }
    public function profileUpdate(Request $request)
    {
        // dd($request->toArray());
        $user = User::with('company')->find(auth()->user()->id);
        if($request->has('name'))
        {
            $user->company->name = $request->name;
        }
        if($request->has('country_code'))
        {
            $user->company->country_code = $request->country_code;
        }
        if($request->has('phone'))
        {
            $user->company->phone = $request->phone;
        }
        if($request->has('abn'))
        {
            $user->company->abn = $request->abn;
        }
        if($request->has('description'))
        {
            $user->company->description = $request->description;
        }
        if($request->has('terms'))
        {
            $user->company->terms = $request->terms;
        }
        if($request->has('whatWeDo'))
        {
            $user->company->whatWeDo = $request->whatWeDo;
        }
        if($request->has('mission'))
        {
            $user->company->mission = $request->mission;
        }
        if($request->has('website'))
        {
            $user->company->website = $request->website;
        }
        if($request->has('industry'))
        {
            $user->company->industry = $request->industry;
        }
        if($request->has('cSizeFrom'))
        {
            $user->company->cSizeFrom = $request->cSizeFrom;
        }
        if($request->has('cSizeTo'))
        {
            $user->company->cSizeTo = $request->cSizeTo;
        }
        if($request->has('type'))
        {
            $user->company->type = $request->type;
        }
        if($request->has('founded'))
        {
            $user->company->founded = $request->founded;
        }
        if($request->has('specialties'))
        {
            $user->company->specialties = $request->specialties;
        }
        if($request->has('linkedIn'))
        {
            $user->company->linkedIn = $request->linkedIn;
        }
        if($request->has('twitter'))
        {
            $user->company->twitter = $request->twitter;
        }
        if($request->has('facebook'))
        {
            $user->company->facebook = $request->facebook;
        }
        if($request->has('headQuarter'))
        {
            $user->company->headQuarter = $request->headQuarter;
        }
        if($request->has('category'))
        {
            $features = CompanyFeatures::where('com_id',$user->company->id)->get();
            $features->each->delete();
            foreach($request->category as $row)
            {
                CompanyFeatures::create([
                    'comp_cat_id' => $row,
                    'com_id' => $user->company->id,
                ]);
            }
        }
        if($request->hasFile('logo'))
        {
            $img = $request->logo;
            $number = rand(1,999);
            $numb = $number / 7 ;
            $extension      = $img->extension();
            $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
            $filenamepath   = 'companyLogo'.'/'.'img/'.$filenamenew;
            $filename       = $img->move(public_path('storage/companyLogo'.'/'.'img'),$filenamenew);
            $user->company->logo = $filenamepath;
        }
        $user->company->save();

        return back()->withStatus("Your Information has successfully Updated..");
    }
    public function jobs()
    {
        $post = Posts::where('comp_id',auth()->user()->company->id)->get();
        return view('companypanel.pages.jobs.index',compact('post'));
    }
    public function createJobs()
    {
        $recruiter = CompanyRecRelation::where('com_id',auth()->user()->company->id)->where('status',1)->get();
        // dd($recruiter->toArray());
        $skill = Skills::all();
        return view('companypanel.pages.jobs.create',compact('recruiter','skill'));
    }
    public function StoreJob(Request $request)
    {
        $data = $request->all();
        $valid = Validator::make($data, [
            'post' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'job_type' => ['required', 'string'],
            'experience' => ['required', 'string'],
            'location' => ['required', 'string'],
            'skill' => ['required', 'numeric'],
            'banner' => ['required', 'mimes:jpg,jpeg,png,bmp,giff,svg'],
            'recruiter'  => ['required']
        ]);
        if($valid)
        {
            $post = new Posts;
            $post->post = $data['post'];
            $post->description = $data['description'];
            $post->job_type = $data['job_type'];
            $post->experience = $data['experience'];
            $post->gender = $data['gender'];
            $post->qualification = $data['qualification'];
            $post->expiry_date = $data['expiry_date'];
            $post->key_responsibility = $data['key_responsibility'];
            $post->skill_exp = $data['skill_exp'];
            $post->offer_salary = $data['offer_salary'];
            $post->location = $data['location'];
            $post->rec_id = $data['recruiter'];
            $post->comp_id = auth()->user()->company->id;
            $img = $data['banner'];
            $number = rand(1,999);
            $numb = $number / 7 ;
            $extension      = $img->extension();
            $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
            $filenamepath   = 'jobPosts'.'/'.'img/'.$filenamenew;
            $filename       = $img->move(public_path('storage/jobPosts'.'/'.'img'),$filenamenew);
            $post->banner = $filenamepath;
            $post->save();
            foreach($request->skill as $row)
            {
                PostSkill::create([
                    'post_id' => $post->id,
                    'skill_id' => $row,
                ]);
            }
            return redirect()->route('company.jobs')->withStatus("Job Post has been Created Successfully...");
        }
        else
        {
            return redirect()->back()->withError($valid->errors()->first());
        }
    }
    public function jobApplications()
    {
        $user = User::with('company')->where('id', auth()->user()->id)->first();
        $post = Posts::where('comp_id', $user->company->id)->get();
        // $jobApp = JobApplications::with('post', 'candidate', 'candidateDocs')->get();
        $value = auth()->user()->company->id;
        $jobApp = JobApplications::with('candidateDocument','candidate','post')->whereHas('post', function($q) use($value) {
            // Query the name field in status table
            $q->where('comp_id', '=', $value); // '=' is optional
        })->get();
        // dd($jobApp->toArray());
        return view('companypanel.pages.jobs.jobApplications', compact('jobApp'));
    }
    public function editPost($id)
    {
        $recruiter = CompanyRecRelation::where('com_id',auth()->user()->company->id)->where('status',1)->get();
        $post = Posts::where('id', $id)->first();
        $skill = Skills::all();
        $postSkills = PostSkill::where('post_id', $post->id)->get();
        return view('companypanel.pages.jobs.editPost', compact('post', 'skill', 'postSkills', 'recruiter'));
    }
    public function updateJob(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $valid = Validator::make($data, [
            'post' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'job_type' => ['required', 'string'],
            'experience' => ['required', 'string'],
            'location' => ['required', 'string'],
            'skill' => ['required', 'numeric'],
            'banner' => ['required', 'mimes:jpg,jpeg,png,bmp,giff,svg'],
            'recruiter'  => ['required']
        ]);
        if($valid)
        {
            $post = Posts::where('id', $request->post_id)->first();
            // dd($post->toArray());
            $post->post = $data['post'];
            $post->description = $data['description'];
            $post->job_type = $data['job_type'];
            $post->experience = $data['experience'];
            $post->gender = $data['gender'];
            $post->qualification = $data['qualification'];
            $post->expiry_date = $data['expiry_date'];
            $post->key_responsibility = $data['key_responsibility'];
            $post->skill_exp = $data['skill_exp'];
            $post->offer_salary = $data['offer_salary'];
            $post->location = $data['location'];
            $post->rec_id = $data['recruiter'];
            $post->comp_id = auth()->user()->company->id;
            $img = $data['banner'];
            $number = rand(1,999);
            $numb = $number / 7 ;
            $extension      = $img->extension();
            $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
            $filenamepath   = 'jobPosts'.'/'.'img/'.$filenamenew;
            $filename       = $img->move(public_path('storage/jobPosts'.'/'.'img'),$filenamenew);
            $post->banner = $filenamepath;
            $post->save();
            if ($request->has('skill')) {

                $PostSkills = PostSkill::where('post_id', $post->id);
                $PostSkills->delete();
                foreach($request->skill as $row)
                {
                    PostSkill::create([
                        'post_id' => $post->id,
                        'skill_id' => $row,
                    ]);
                }
            }
            return redirect()->route('company.jobs')->withStatus("Job Post has been Created Successfully...");
        }
        else
        {
            return redirect()->back()->withError($valid->errors()->first());
        }
    }
    public function jobAppStatus($id)
    {
        $jobApp = JobApplications::find($id);
        // dd($jobApp->toArray());
        if ($jobApp->status == 0 || $jobApp->status == 2) 
        {
            $jobApp->status = 1;
        }
        elseif ($jobApp->status == 1) 
        {
            $jobApp->status = 0;
        }
        $jobApp->save();
        return back();
    }
    public function jobAppStatus2($id)
    {
        $jobApp = JobApplications::find($id);
        // dd($jobApp->toArray());
        // $jobApp->status = 2;
        if ($jobApp->status == 0 || $jobApp->status == 1) 
        {
            $jobApp->status = 2;
        }
        elseif ($jobApp->status = 2) 
        {
            $jobApp->status = 0;
        }
        $jobApp->save();
        return back();
    }
}
