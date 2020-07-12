<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = "Experiences";
    protected $primaryKey = 'ExperiencesID';

    public function Informations()
    {
        return $this->belongsTo("App\Information", "InformationID", "Information_ID");
    }
}
