<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $table = 'candidates_details';

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'gender',
        'nationality',
        'address',
        'email',
        'country_code',
        'number',
        'terms',
        'head_line',
        'dob',
        'religion',
        'marital_status',
        'driving_license',
        'languages',
        'visa_status',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
