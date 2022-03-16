<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Skills;
use App\Models\Candidate;
use App\Models\CandidateProfessionalExp;
use App\Models\CandidateSkills;
use App\Models\CandidateDocs;
use App\Models\CandidateEdu;
use App\Models\User;
use App\Models\CanAppVisibility;
use App\Models\Company;
use App\Models\Recruiter;
use App\Models\CompanyCategory;
use App\Models\CompanyFeatures;
use App\Models\Posts;
use App\Models\JobApplications;

class FrontendController extends Controller
{
    public function recruiter()
    {
        return view('recruiter.index');
    }
    public function employer()
    {
        return view('company.index');
    }
    public function candidates()
    {
        $cand = Candidate::with('user')->where('status', 1)->get();
        // dd($cand->toArray());
        return view('candidates.index', compact('cand'));
    }
    public function recruiterDetails()
    {
        $name="";
        $avatar="";
        $country_code ="";
        $phone ="";
        $abn ="";
        $description ="";
        $terms ="";
        $rec = Recruiter::where('user_id', auth()->user()->id)->first();
        // dd($comp);
        if(isset($rec))
        {
            $name           =   $rec->name;
            $country_code   =   $rec->country_code;
            $phone          =   $rec->phone;
            $abn            =   $rec->abn;
            $avatar         =   $rec->avatar;
            $description    =   $rec->description ;
            $terms          =   $rec->terms ;
        }
        return view('recruiter.detail', compact('name','avatar','description', 'terms', 'rec', 'phone', 'abn', 'country_code'));
    }
    public function companyDetails()
    {
        $name="";
        $logo="";
        $country_code ="";
        $phone ="";
        $abn ="";
        $description ="";
        $category ="";
        $terms ="";
        $comp = Company::with('features')->where('user_id', auth()->user()->id)->first();
        $category = CompanyFeatures::where('com_id', auth()->user()->id)->first();
        $cat = CompanyCategory::get();
        // dd($comp->toArray());
        if(isset($comp))
        {
            $name           =   $comp->name;
            $country_code   =   $comp->country_code;
            $phone          =   $comp->phone;
            $abn            =   $comp->abn;
            $logo           =   $comp->logo;
            $description    =   $comp->description ;
            $terms          =   $comp->terms ;
        }
        if(isset($category))
        {
            $category       =   $category->category;
        }
        return view('company.detail', compact('name','logo','description', 'terms', 'comp', 'cat', 'category', 'phone', 'abn', 'country_code'));
    }
    public function candidatesDetails()
    {
        $first_name="";
        $last_name="";
        $gender ="";
        $nationality="";
        $address="";
        $email="";
        $country_code="";
        $number="";
        $terms="";
        $cand = Candidate::where('user_id', auth()->user()->id)->first();
        
        if(isset($cand))
        {
            $first_name     = $cand->first_name;
            $last_name      = $cand->last_name;
            $gender         = $cand->gender ;
            $nationality    = $cand->nationality;
            $address        = $cand->address;
            $email          = $cand->email;
            $country_code   = $cand->country_code;
            $number         = $cand->number;
            $terms          = $cand->terms;
        }
        
        return view('candidates.detail', compact('first_name','last_name','gender','nationality','address','email','country_code', 'number','terms'));
    }
    public function candidatesNext()
    {
        $month_exp = array();
        $year_exp = array();
        $designation = array();
        $company_name = array();
        $comp_loc = array();
        $currency = array();
        $salary = array();
        $skill_id = array();
        $pro_id = array();

        $skill = Skills::get();
        $pro = CandidateProfessionalExp::where('user_id', auth()->user()->id)->get();
        $candSkills = CandidateSkills::where('user_id', auth()->user()->id)->get();
        if(isset($pro))
        {
            foreach($pro as $key => $proo)
            {
                $month_exp[$key]      = $proo->month_exp;
                $year_exp[$key]       = $proo->year_exp;
                $designation[$key]    = $proo->designation;
                $company_name[$key]   = $proo->company_name;
                $comp_loc[$key]       = $proo->comp_loc;
                $currency[$key]       = $proo->currency;
                $salary[$key]         = $proo->salary;
                $pro_id[$key]         = $proo->id;
            }
            // dd($pro_id);
        }
        if(isset($candSkills))
        {
            foreach($candSkills as $key => $sk)
            {
                $skill_id[$key] = $sk->skill_id;
            }
            // dd($skill_id);
        }

        return view('candidates.professional', compact('skill', 'pro_id','month_exp', 'year_exp', 'designation', 'company_name', 'comp_loc', 'currency', 'salary', 'skill_id', 'candSkills'));
    }
    public function candidatesProfile()
    {
        $candDocs = CandidateDocs::where('user_id', auth()->user()->id)->get();
        // dd($candDocs->toArray());
        $education = array();
        $course = array();
        $institute = array();
        $institute_loc = array();
        $passing_year = array();
        $edu_id = array();
        $head_line = "";
        $visa_status = "";
        $dob = "";
        $languages = "";
        $religion = "";
        $marital_status = "";
        $driving_license = "";
        $avatar = "";

        $cand = Candidate::where('user_id', auth()->user()->id)->first();
        $edu = CandidateEdu::where('user_id', auth()->user()->id)->get();
        $user = User::where('id', auth()->user()->id)->first();

        // dd($cand->toArray());

        if(isset($user))
        {
            $avatar = $user->avatar;
        }
        // dd(storage_path().$avatar);

        if(isset($cand))
        {
            $head_line          = $cand->head_line;
            $visa_status        = $cand->visa_status;
            $dob                = $cand->dob;
            $languages          = $cand->languages;
            $religion           = $cand->religion;
            $marital_status     = $cand->marital_status;
            $driving_license    = $cand->driving_license;
        }
        // dd($head_line);

        if(isset($edu))
        {
            foreach($edu as $key => $ed)
            {
                $education[$key]      = $ed->education;
                $course[$key]         = $ed->course;
                $institute[$key]      = $ed->institute;
                $institute_loc[$key]  = $ed->institute_loc;
                $passing_year[$key]   = $ed->passing_year;
                $edu_id[$key]         = $ed->id;
            }
            // dd($edu_id);
        }
        return view('candidates.profile', compact('head_line', 'edu_id', 'education', 'course', 'institute', 'institute_loc', 'passing_year', 'head_line', 'visa_status','dob' ,'languages', 'religion', 'marital_status', 'driving_license', 'avatar', 'candDocs', 'user', 'cand', 'edu'));
    }
    public function job()
    {
        $app = CanAppVisibility::orderBy('id', 'DESC')->where('status',1)->paginate(10);
        // dd($app->toArray());
        return view('job.index',compact('app'));
    }
    public function jobPost(Request $request)
    {
        $shareButtons = \Share::page(
            'https://www.itsolutionstuff.com',
            'Your share text comes here',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();
        // dd($request->toArray());
        if ($request->has('search'))
        {
            $app = Posts::with('skills')->where('location', $request->search_location)->get();
            // dd($app->toArray());
        }
        else
        {
            $app = Posts::orderBy('id', 'DESC')->where('status',1)->paginate(10);
            // dd($app->all());
        }
        return view('company.jobpost',compact('app', 'shareButtons'));
    }
    public function jobDetails($id)
    {
        $comp = Company::with('features')->find($id);
        foreach($comp->features as $row)
        {
            $data['similar'] = CompanyFeatures::with('company')->where('comp_cat_id',$row->id)->get();
        }
        return view('job.details', compact('comp','data'));
    }
    public function cv(Request $request)
    {
        // phpinfo();
        dd($request);
    }
    public function jobListingDetails($id)
    {
        $app = Posts::with('skills')->where('id', $id)->first();
        // dd($app->id);
        return view('job.jobListingDetails', compact('app'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        return view('pages.services');
    }
    public function jobApplications(Request $request)
    {
        dd($request->toArray());
        $job = new JobApplications;
    }
    public function candidatesList()
    {
        $cand = Candidate::with('user')->where('status', 1)->paginate(10);
        $count = $cand->count();
        return view('candidates.candidateList',compact('cand', 'count'));
    }
    public function candidatesDetail($id)
    {
        $cand = Candidate::find($id);
        return view('candidates.show',compact('cand'));
    }
    public function employerList()
    {
        $comp = Company::with('features')->paginate(10);
        $count = $comp->count();
        return view('company.companyList', compact('comp', 'count'));
    }
    public function recruiterList()
    {
        $rec = Recruiter::paginate(10);
        $count = $rec->count();
        return view('recruiter.list', compact('rec', 'count'));
    }
    public function recruiterShow($id)
    {
        $rec = Recruiter::find($id);
        return view('recruiter.show', compact('rec'));
    }
}
