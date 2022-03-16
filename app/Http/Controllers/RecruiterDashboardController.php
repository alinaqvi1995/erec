<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use App\Models\CompanyCategory;
use App\Models\CompanyFeatures;
use App\Models\Recruiter;
use App\Models\CompanyRecRelation;
use App\Models\Candidate;
use App\Models\CandidateProfessionalExp;
use App\Models\CandidateSkills;
use App\Models\CandidateDocs;
use App\Models\CandidateEdu;
use App\Models\User;
use App\Models\Posts;
use App\Models\Skills;
use App\Models\PostSkill;
use App\Models\JobApplications;
use App\Models\RecruiterFeatures;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Validator;


class RecruiterDashboardController extends Controller
{
    public function profileSetup()
    {
        // $user = Recruiter::with('recruiter')->get();
        $user = User::with('recruiter')->where('id', auth()->user()->id)->first();
        $category = CompanyCategory::all();
        // dd($user->toArray());
        return view('recruterpanel.pages.profileSetup', compact('user', 'category'));
    }
    public function profileUpdate(Request $request)
    {
        // dd($request->toArray());
        try{
            DB::beginTransaction();
            $user = User::with('recruiter')->where('id', auth()->user()->id)->first();
            // dd($user->toArray());
            if ($request->has('name')) {
                $user->recruiter->name = $request->name;
            }
            // dd($rec->toArray());
            if ($request->has('country_code')) {
                $user->recruiter->country_code = $request->country_code;
            }
            if ($request->has('phone')) {
                $user->recruiter->phone = $request->phone;
            }
            if ($request->has('abn')) {
                $user->recruiter->abn = $request->abn;
            }
            if ($request->has('description')) {
                $user->recruiter->description = $request->description;
            }
            if ($request->terms == 1) {
                $user->recruiter->terms = $request->terms;
            }
            else{
                $user->recruiter->terms = 0;
            }
            if($request->has('category'))
            {
                $features = RecruiterFeatures::where('rec_id', $user->recruiter->id)->get();
                $features->each->delete();
                // dd($request->category);
                foreach($request->category as $row)
                {
                    $fea = new RecruiterFeatures;
                    $fea->cat_id = $row;
                    $fea->rec_id = $user->recruiter->id;
                    $fea->save();
                }
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
                $user->recruiter->avatar = $filenamepath;
                // dd($rec->toArray());
            }
            $user->recruiter->save();
        DB::commit();
            return back()->with('success', 'Profile Updated Successfully!');
        }
        catch (\Throwable $e)
        {
            DB::rollback();

            return back()->with('error', $e->getMessage());
        }
        return back()->with('error', 'Error in Update!');

    }
    public function companyIndex()
    {
        $comp = CompanyRecRelation::with('recruiter','company')->where('rec_id',auth()->user()->recruiter->id)->get();
        // dd($comp->toArray());
        return view('recruterpanel.pages.company.index', compact('comp'));
    }
    public function AcceptRequest($id)
    {
        $comp = CompanyRecRelation::find($id);
        $comp->status = 1;
        $comp->save();
        return redirect()->back();
    }
    public function candidateIndex()
    {
        $can = Candidate::with('user')->get();
        // dd($can->toArray());
        return view('recruterpanel.pages.candidate.index', compact('can'));
    }
    public function companyDetails($id)
    {
        $comp = Company::with('user')->where('id', $id)->first();
        // dd($comp->toArray());
        return view('recruterpanel.pages.company.detail', compact('comp'));
    }
    public function candidateDetails($id)
    {
        $can = Candidate::with('user')->where('id', $id)->first();
        // dd($can->toArray());
        return view('recruterpanel.pages.candidate.detail', compact('can'));
    }
    public function jobs()
    {
        $post = Posts::where('rec_id',auth()->user()->recruiter->id)->get();
        // dd($post->toArray());
        return view('recruterpanel.pages.jobs.index',compact('post'));
    }
    public function createJobs()
    {
        $recruiter = CompanyRecRelation::where('rec_id',auth()->user()->recruiter->id)->where('status',1)->get();
        // dd($recruiter->toArray());
        $skill = Skills::all();
        return view('recruterpanel.pages.jobs.create',compact('recruiter','skill'));
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
            'company'  => ['required']
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
            $post->rec_id = auth()->user()->recruiter->id;
            $post->comp_id = $data['company'];
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
            return redirect()->route('recruiter.jobs')->withStatus("Job Post has been Created Successfully...");
        }
        else
        {
            return redirect()->back()->withError($valid->errors()->first());
        }
    }
    public function jobApplications()
    {
        // $user = User::with('recruiter')->where('id', auth()->user()->id)->first();
        // $post = Posts::where('comp_id', $user->recruiter->id)->get();
        // $jobApp = JobApplications::with('post', 'candidate', 'candidateDocs')->get();
        $value = auth()->user()->recruiter->id;
        $jobApp = JobApplications::where('status', '!=', 2)->with(['post' => function($q) use($value) {
            // Query the name field in status table
            $q->where('rec_id', '=', $value); // '=' is optional
        }])->get();
        // dd($jobApp->toArray());
        return view('recruterpanel.pages.jobs.jobApplications', compact('jobApp'));
    }
    public function jobAppStatus($id)
    {
        $jobApp = JobApplications::find($id);
        // dd($jobApp->toArray());
        if ($jobApp->status == 0) 
        {
            $jobApp->status = 1;
        }
        $jobApp->save();
        return back();
    }

    function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }

    public function importCsv(Request $request)
    {
        $file = $request->csv_file;
        
        $customerArr = $this->csvToArray($file);
        // dd($customerArr);
        
        foreach($customerArr as $key => $pro)
        {
            try {
                DB::beginTransaction();
                
                $post = Posts::create([
                    'post' => $customerArr[$key]['post'],
                    'job_type' => $customerArr[$key]['job_type'],
                    'experience' => $customerArr[$key]['experience'],
                    'gender' => $customerArr[$key]['gender'],
                    'offer_salary' => $customerArr[$key]['offer_salary'],
                    'qualification' => $customerArr[$key]['qualification'],
                    'location' => $customerArr[$key]['location'],
                    'expiry_date' => $customerArr[$key]['expiry_date'],
                    'key_responsibility' => $customerArr[$key]['key_responsibility'],
                    'skill_exp' => $customerArr[$key]['skill_exp'],
                    'description' => $customerArr[$key]['description'],
                    'banner' => $customerArr[$key]['banner'],
                    'comp_id' => $customerArr[$key]['comp_id'],
                    'rec_id' => auth()->user()->recruiter->id,
                ]);
                $post->status = 0;
                $post->save();
                // $post->status = 0;
                // $post->rec_id = auth()->user()->recruiter->id;
            
                DB::commit();

            } catch (\Throwable $e)  {
                // throw $th;
                DB::rollBack();
                return back()->with('error', $e->getMessage());
            }
        }

        return 'Jobi done or what ever';    
    }

}
