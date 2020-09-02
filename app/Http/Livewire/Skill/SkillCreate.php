<?php

namespace App\Http\Livewire\Skill;

use App\Skill;
use Livewire\Component;

class SkillCreate extends Component
{
    public $information;

    public $title;

    public function mount($information)
    {
        $this->information = $information;
    }

    public function render()
    {
        return view('livewire.skill.skill-create',);
    }

    public function store()
    {
        $this->validate([
            "title" => "required|min:3"
        ]);

        $skill = Skill::create([
            "Title" => $this->title,
            "Information_ID" => $this->information->InformationID
        ]);

        $this->resetInput();

        $this->emit("skillStored", $skill);
    }

    public function resetInput()
    {
        $this->title = null;
    }
}
