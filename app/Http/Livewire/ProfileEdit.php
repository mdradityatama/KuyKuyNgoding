<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
use Illuminate\Support\Facades\Hash;

class ProfileEdit extends Component
{
    public $data;

    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function mount()
    {
        $this->data = User::where("id", \Auth::user()->id)->first();
        $this->name = $this->data->name;
        $this->email = $this->data->email;
    }

    public function render()
    {
        return view('livewire.profile-edit');
    }

    public function update()
    {
        $this->data->update([
            'name' => $this->name,
            'email' => $this->email
        ]);

        session()->flash("message", "Berhasil Update User!");
    }

    public function changePassword()
    {
        $this->validate([
            'password' => 'min:6|confirmed',
        ]);
        
        $this->data->update([
            'password' => Hash::make($this->password)
        ]);

        $this->resetInput();

        session()->flash("messageChangePassword", "Berhasil Menganti Password!");
    }

    public function resetInput()
    {
        $this->password = null;
        $this->password_confirmation = null;
    }
}