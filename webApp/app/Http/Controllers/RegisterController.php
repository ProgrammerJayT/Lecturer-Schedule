<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {

        request()->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:students|unique:lecturers',
            'password' => 'required|min:8|max:255',
            'role' => 'required',
        ]);

        $createUserAttempt = UserController::store(request());

        if ($createUserAttempt->getStatusCode() == 200) {
            $user = $createUserAttempt->original['user'];
            auth()->login($user);
            return redirect('/login');
        } else {
            return redirect()->back()->withErrors($createUserAttempt->original['message']);
        }
    }
}