<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CandidateDocs;
use App\Models\JobApplications;

class JobApplicationController extends Controller
{
    public function applyNow(Request $request)
    {
        // dd($request->all());
        if($request->hasFile('new_doc'))
        {
            $doc = new CandidateDocs;
            $img = $request->new_doc;
            // dd($img);
            $number = rand(1,999);
            $numb = $number / 7 ;
            $extension      = $img->extension();
            $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
            $filenamepath   = 'candidateDoc'.'/'.'doc/'.$filenamenew;
            $filename       = $img->move(public_path('candidateDoc'.'/'.'doc'),$filenamenew);
            $doc->user_id = auth()->user()->id;
            $doc->document = $filenamenew;
            $doc->save();

            $jobApp = new JobApplications;
            $jobApp->post_id            = $request->post_id;
            $jobApp->candidate_id       = auth()->user()->candidate->id;
            $jobApp->candidate_doc_Id   = $doc->id;
            $jobApp->save();
        }
        elseif($request->has('cv_file'))
        {
            $jobApp = new JobApplications;
            $jobApp->post_id            = $request->post_id;
            $jobApp->candidate_id       = auth()->user()->candidate->id;
            $jobApp->candidate_doc_Id   = $request->cv_file;
            $jobApp->save();
        }

        return back();

    }
}
