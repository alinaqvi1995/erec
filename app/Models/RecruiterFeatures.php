<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruiterFeatures extends Model
{
    use HasFactory;

    protected $table = 'rec_features';

    protected $fillable = [
        'rec_id',
        'cat_id',
    ];
}
