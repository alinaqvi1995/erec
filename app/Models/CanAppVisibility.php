<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\CandidateDocs;

class CanAppVisibility extends Model
{
    use HasFactory;
    protected $table = 'candidates_application_visibility';

    protected $fillable = [
        'user_id',
        'title',
        'job_type',
        'experience',
        'location',
        'resume_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
    public function resume()
    {
        return $this->belongsTo(CandidateDocs::class, 'resume_id','id');
    }

}
