<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'career_contacts';
    protected $fillable = ['name','email','phone','address','objective','qualification','grade','position','employeement','gender'];
}
