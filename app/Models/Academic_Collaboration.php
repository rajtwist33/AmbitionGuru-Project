<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Academic_Collaboration extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'academic_collaborations';
    protected $fillable = [
        'academy_name',
        'website_url',
        'logo',
        'added_by',
        'extra'
    ];

   
}
