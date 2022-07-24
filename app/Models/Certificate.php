<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'course_id',
        'reference_no',
        'name',
        'duration',
        'added_by',
        'extra'
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
