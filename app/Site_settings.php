<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site_settings extends Model
{
    protected $table = 'site_settings';
    protected $fillable = ['address1','address2','support_email','info_email','hr_email','logo','lat','lang','contact','facebook_link','linkedin_link','pinterest_link','twitter_link','googleplus_link','skype_link','github_link'];
}
