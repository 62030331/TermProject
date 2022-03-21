<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyModel extends Model
{
    protected $table="faculty";
    protected $fillable=[
        'fac_code', 
        'fac_name'
    ];
}