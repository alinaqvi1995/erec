<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posts;
use App\Models\Candidate;
use App\Models\CandidateDocs;

class JobApplications extends Model
{
    use HasFactory;

    protected $table = 'job_applications';

    protected $fillable = [
        'post_id',
        'candidate_id',
        'candidate_doc_Id ',
    ];

    public function post()
    {
        return $this->belongsTo(Posts::class,'post_id','id');
    }
    public function candidate()
    {
        return $this->belongsTo(Candidate::class,'candidate_id','id');
    }
    public function candidateDocument()
    {
        return $this->belongsTo(CandidateDocs::class,'candidate_doc_Id','id');
    }
}
