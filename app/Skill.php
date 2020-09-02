<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = "Skills";
    protected $primaryKey = 'SkillID';

    protected $fillable = ["Title", "Information_ID"];

    public function Informations()
    {
        return $this->belongsTo("App\Information", "Information_ID", "InformationID");
    }
}
