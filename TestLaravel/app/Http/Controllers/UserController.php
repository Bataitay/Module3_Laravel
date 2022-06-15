<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getlogin()
    {
        return 'this is controller';
    }
    public function getregister()
    {
        return redirect()->route('login');
    }
    public function ValidationEmail(request $request)
    {
        $email = $request->email;
        $isEmail = True;

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $isEmail = False;
        }
        return view('checkemail', compact('isEmail'));
    }
}
