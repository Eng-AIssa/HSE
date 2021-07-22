<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Contracts\View\View
     */
    public function show(User $user)
    {
        return view('profile', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        //validate and update Personal information
        if ($request->has('name')) {

            $user->ValidatePersonalInformation($request);
            return redirect()->back()->with(['personal_success' => 'Saved']);

        }

        //validate and update Password information
        if ($request->has('password')) {

            //check if the current password field match our database and password confirmation is matched
            if(Hash::check($request->current_password, auth()->user()->password) && $request->password == $request->password_confirmation) {

                $user->ValidatePasswordInformation($request);
                $request->user()->fill([
                    'password' => Hash::make($request->password)
                ])->save();

                $this->redirectWith('password_success','Saved');
            }
            return redirect("user/$user->id")->with('password_failed',"Something went wrong plz try again");

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }


    private function redirectWith($key, $message){
        return redirect()->back()->with($key,$message);
    }

}
