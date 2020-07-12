<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use App\Certificate;
use App\Experience;
use App\Skill;

class TestController extends Controller
{
    public function index($text)
    {
        $information = Information::with("Skills")->find(1);

        $skillFromInformation = $information->Skills->first();

        $nameSkill = $skillFromInformation->Title;

        $skill = Skill::where("Information_ID", 1)->first();

        // dd($nameSkill);
        return "nama saya adalah $information->Name, skill saya $nameSkill, $text";
    }

    public function dev()
    {
        $information = Information::With(
            [
                "Certificates",
                "Experiences",
                "Skills"
            ])->find(1);
        
        $name = $information->Name;
        $countCertificate = $information->Certificates->count();

        $skill = $information->Skills;
        $skill1 = $skill[0]->Title;

        $skillInit = Skill::find(1);
        $objectInformationFromSkill = $skillInit->Informations()->first();

        dd($objectInformationFromSkill->Name);    
        return "Nama Saya $name, saya memiliki Sertifikat sebanyak $countCertificate, saya memiliki Skill $skill1";
    }
}
