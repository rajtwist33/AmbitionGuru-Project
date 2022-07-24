<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'short_desc',
        'cover_pic',
        'status',
        'duration_hrs',
        'shift',
        'syllabus',
        'added_by',
        'extra'
    ];

    public function certificate(): HasOne
    {
        return $this->hasOne(Certificate::class);
    }
}
