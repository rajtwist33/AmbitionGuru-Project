<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mentor extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = 
    [
    'name',
     'email', 
     'mobile_number',
     'position',
     'photo',
     'date_of_join',
     'extra'
    ];   

    

    
}
