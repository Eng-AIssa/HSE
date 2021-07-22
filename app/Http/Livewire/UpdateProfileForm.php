<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UpdateProfileForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $informationSuccess;
    public $user;



    protected function rules()
    {
        return [
            'name' => ['required','min:3','max:255'],
            'email' => ['required', 'email', 'min:3', 'max:255', 'unique:users,email,'. auth()->user()->id],
            'phone' => [ 'min:10', 'unique:users,phone,' . auth()->user()->id],
        ];
    }


    public function mount($user)
    {
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->user = $user;
    }


    public function updated($property)
    {
        $this->validateOnly($property);
    }


    public function saveUpdate()
    {
        $this->user->update($this->validate());
        $this->informationSuccess = 'Profile Information Saved Successfully';
    }

    public function render()
    {
        return view('livewire.update-profile-form', ['user' => auth()->user()]);
    }
}
