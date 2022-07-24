<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employment_partner extends Model
{
    use SoftDeletes;
    protected $guarded = 
    [
    'name',
     'logo', 
     'addresss',
     'website',
     'added_by',
     'extra',
     'deleted_at'
     
    ];   
}
