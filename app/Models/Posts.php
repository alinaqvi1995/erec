<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recruiter;
use App\Models\Company;
use App\Models\PostSkill;
use App\Models\JobApplications;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'post';

    protected $fillable = [
        'post',
        'job_type',
        'experience',
        'location',
        'description',
        'banner',
        'rec_id',
        'comp_id',
    ];

    public function recruiter()
    {
        return $this->belongsTo(Recruiter::class, 'rec_id','id');
    }
    public function company()
    {
        return $this->belongsTo(Company::class,'comp_id','id');
    }
    public function skills()
    {
        return $this->belongsToMany(
            Skills::class,
            PostSkill::class,
            'post_id',
            'skill_id',
        );
    }
    // public function jobApp()
    // {
    //     return $this->belongsTo(JobApplications::class,'post_id','id');
    // }
}
