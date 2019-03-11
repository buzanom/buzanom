<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $fillable = ['email','password','name','username','mobile','department_id','post_id','type','career_id','offer_id','joining_id','profile_id'];
}
