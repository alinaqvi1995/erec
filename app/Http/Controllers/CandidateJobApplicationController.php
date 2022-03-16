<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CanAppVisibility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\CandidateDocs;

class CandidateJobApplicationController extends Controller
{
    //
    public function index()
    {
        $apps = CanAppVisibility::where('user_id',auth()->user()->id)->get();
        return view('candidatepanel.pages.jobApplications.index',compact('apps'));
    }
    public function create()
    {
        $user = User::find(auth()->user()->id);
        return view('candidatepanel.pages.jobApplications.create',compact('user'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $valid = Validator::make($data, [
            'title' => ['required', 'string', 'max:255'],
            'job_type' => ['required', 'string'],
            'experience' => ['required', 'string'],
            'location' => ['required', 'string'],
            'resume_id' => ['required', 'numeric'],
        ]);
        if($valid)
        {
            $data['user_id'] = auth()->user()->id;
            CanAppVisibility::create($data);
            return redirect()->route('candidates.job.index')->withStatus("Job Application has been Created Successfully...");
        }
        else
        {
            return redirect()->back()->withError($valid->errors()->first());
        }
    }
    public function visibilityindex()
    {
        $apps = CanAppVisibility::where('user_id',auth()->user()->id)->get();
        return view('candidatepanel.pages.visibility.index',compact('apps'));
    }
    public function visibility(Request $request,$id)
    {
        $app = CanAppVisibility::find($id);
        $app->status = $request->status;
        $app->save();
        return redirect()->back();
    }
    public function cvUpload()
    {
        return view('candidatepanel.pages.newCv');
    }
    public function storeCv(Request $request)
    {
        // dd($request->all());
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
                $doc->user_id   = auth()->user()->id;
                $doc->document = $filenamenew;
                $doc->save();
            }
        }
        return redirect()->route("candidates.cvList");
    }
}
