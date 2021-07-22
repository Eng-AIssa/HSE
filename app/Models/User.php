<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function ValidatePersonalInformation(Request $request){
         $this->update($request->validate([
           'name' => 'required|min:3|max:255',
           'email' => ['required', 'email', 'min:3', 'max:255', 'unique:users,email,' . $this->id],
           'phone' => [ 'min:10','unique:users,phone,' . $this->id]
       ]));
    }


    public function ValidatePasswordInformation(Request $request){
         $this->update($request->validate([
            'current_password' => ['required', 'min:3', 'max:255'],
            'password' => ['required', 'min:3', 'max:255'],
            'password_confirmation' => ['required', 'min:3', 'max:255'],
        ]));

    }
}
