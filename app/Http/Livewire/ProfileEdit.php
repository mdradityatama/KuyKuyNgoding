<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
use Illuminate\Support\Facades\Hash;

class ProfileEdit extends Component
{
    public $data;

    public $name;
    public $username;
    public $email;
    public $phone;
    public $password;
    public $password_confirmation;

    public function mount()
    {
        $this->data = \Auth::user()->first();

        $this->name = $this->data->Name;
        $this->email = $this->data->Email;
        $this->username = $this->data->Username;
        $this->phone = $this->data->Phone;
    }

    public function render()
    {
        return view('livewire.profile-edit');
    }

    public function update()
    {
        $this->validate([
            'name' => 'min:3',
            'username' => 'min:3',
            'phone' => 'min:9|max:13'
        ]);

        $this->data->update([
            'name' => $this->name,
            'username' => $this->username,
            'phone' => $this->phone,
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