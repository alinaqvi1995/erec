<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateDocs extends Model
{
    use HasFactory;

    protected $table = 'candidates_doc';

    protected $fillable = [
        'user_id',
        'document',
    ];
}
