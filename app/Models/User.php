<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Recruiter;
use App\Models\Company;
use App\Models\CandidateDocs;
use App\Models\CandidateSkills;
use App\Models\Skills;
use App\Models\Candidate;
use App\Models\CandidateEdu;
use App\Models\CandidateProfessionalExp;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'user';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'id', 'user_id');
    }
    public function candidateEdu()
    {
        return $this->hasMany(CandidateEdu::class, 'user_id', 'id')->where('delete', 0);
    }
    public function candidatePro()
    {
        return $this->hasMany(CandidateProfessionalExp::class, 'user_id', 'id')->where('delete', 0);
    }
    public function recruiter()
    {
        return $this->belongsTo(Recruiter::class, 'id', 'user_id');
    }
    public function company()
    {
        return $this->belongsTo(Company::class,'id', 'user_id');
    }
    public function resume()
    {
        return $this->hasMany(CandidateDocs::class, 'user_id' ,'id');
    }
    public function skills()
    {
        return $this->belongsToMany(
            Skills::class,
            CandidateSkills::class,
            'user_id',
            'skill_id',
        );
    }
}
