<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = "Informations";
    protected $primaryKey = 'InformationID';
    
    public function User()
    {
        return $this->belongsTo('App\User', 'User_ID', 'UserID');
    }
    
    public function Certificates()
    {
        return $this->hasMany("App\Certificate", "Information_ID", "InformationID");
    }
    
    public function Experiences()
    {
        return $this->hasMany("App\Experience", "Information_ID", "InformationID");
    }
    
    public function Skills()
    {
        return $this->hasMany("App\Skill", "Information_ID", "InformationID");
    }
}
