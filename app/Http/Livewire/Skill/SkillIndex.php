<?php

namespace App\Http\Livewire\Skill;

use App\Information;
use App\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class SkillIndex extends Component
{
    use WithPagination;

    public $information;

    public $data;

    public $statusUpdate = false;

    protected $listeners = [
        "skillStored" => "handleStore",
        "skillUpdate" => "handleUpdate"
    ];

    public function render()
    {
        $this->information = Information::where("User_ID", \Auth::user()->UserID)->first();

        // $this->data = Skill::where("Information_ID", $this->information->InformationID)->latest()->paginate(5);
        
        return view('livewire.skill.skill-index', [
            "skills" => Skill::where("Information_ID", $this->information->InformationID)->latest()->paginate(5)
        ]);
    }

    public function handleStore($skill)
    {
        session()->flash("Message", 'added new Skill ' . $skill['Title'] . '');
    }

    public function handleUpdate($skill)
    {
        $this->statusUpdate = false;
        session()->flash("Message", 'update Skill ' . $skill['Title'] . '');
    }

    public function getSkill($skillID)
    {
        $this->statusUpdate = true;
        $getSkill = Skill::find($skillID);
        $this->emit("getSkill", $getSkill);
    }

    public function delete($skillID)
    {
        if($skillID)
        {
            $skill = Skill::find($skillID);
            $skill->delete();
            session()->flash("Message", 'Skill was Delete!');
        }
    }
}
