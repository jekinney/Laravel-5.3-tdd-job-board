<?php

namespace App\Http\Controllers\Auth;

use App\Users\Models\User;
use App\Users\Models\Role;
use App\Http\Requests\Auth\Register;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     */
    protected function create()
    {
        return view('auth.register');
    }

    public function store(Register $request, User $user)
    {
        $user->addNew($request);
        if($request->type === 'developer') {
            return redirect()->route('developer.profile.create');
        } 
        return redirect()->route('employer.profile.create');
    }
}
