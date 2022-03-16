<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\CompanyCategory;
use App\Models\RecruiterFeatures;

class Recruiter extends Model
{
    use HasFactory;

    protected $table = 'recruiter';

    protected $fillable = [
        'name',
        'country_code',
        'phone',
        'abn',
        'terms',
        'description',
        'avatar',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function recRelation()
    {
        return $this->hasMany(CompanyRecRelation::class,'rec_id','id');
    }
    public function features()
    {
        return $this->belongsToMany(
            CompanyCategory::class,
            RecruiterFeatures::class,
            'rec_id',
            'cat_id',
        );
    }
}
