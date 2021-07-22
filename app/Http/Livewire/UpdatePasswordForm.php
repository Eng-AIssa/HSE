<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UpdatePasswordForm extends Component
{
    public $passwordSuccess;
    public $current_password;
    public $password;
    public $password_confirmation;
    public $user;
    public $passwordFailed;


    protected $rules = [
        'current_password' => ['required', 'min:3', 'max:255'],
        'password' => ['required', 'min:3', 'max:255'],
        'password_confirmation' => ['required', 'min:3', 'max:255'],
    ];


    public function mount($user)
    {
        $this->user = $user;
    }


    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function cleanFields(){
        $this->current_password = '';
        $this->password = '';
        $this->password_confirmation= '';
    }


    public function saveUpdate()
    {
        if (Hash::check($this->current_password, auth()->user()->password) && $this->password == $this->password_confirmation) {
            $this->user->update($this->validate());

            auth()->user()->fill([
                'password' => Hash::make($this->password)
            ])->save();

            $this->passwordSuccess = 'Password have Successfully Updated';
        }else {
            $this->passwordFailed = 'Something went wrong plz try again';
        }
        $this->cleanFields();
    }

    public function render()
    {
        return view('livewire.update-password-form');
    }
}
