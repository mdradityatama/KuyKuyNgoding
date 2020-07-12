<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Information;

class Certificate extends Model
{
    protected $table = "Certificates";
    protected $primaryKey = 'CertificatesID';

    public function Informations()
    {
        return $this->belongsTo("App\Information", "InformationID", "Information_ID");
    }
}
