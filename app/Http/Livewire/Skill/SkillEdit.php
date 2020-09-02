<?php

namespace App\Http\Livewire\Skill;

use App\Skill;
use Livewire\Component;

class SkillEdit extends Component
{
    public $title;
    public $skillID;

    protected $listeners = [
        "getSkill" => "showSkill"
    ];
    
    public function render()
    {
        return view('livewire.skill.skill-edit');
    }

    public function showSkill($skill)
    {
        $this->title = $skill["Title"];
        $this->skillID = $skill["SkillID"];
    }

    public function update()
    {
        $this->validate([
            "title" => "required|min:3"
        ]);

        if($this->skillID) 
        {
            $skill = Skill::find($this->skillID);
            $skill->update([
                "Title" => $this->title,
            ]);

            $this->resetInput();
    
            $this->emit("skillUpdate", $skill);
        }
    }


    public function resetInput()
    {
        $this->title = null;
    }
}
