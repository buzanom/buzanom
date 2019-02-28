<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emp_Track extends Model
{
    protected $table = 'emp_track';
    protected $fillable = ['emp_id','date','starttime','endtime','faceloop','timeleft','status'];
}
