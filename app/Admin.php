<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $fillable = ['email','password','name','first_name','last_name','username','mobile','city','country','postal','address','about'];
}
