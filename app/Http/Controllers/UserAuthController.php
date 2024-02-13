<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate(
            [
                "name" => "required|min:4|max:15",
                "email" => "required|min:14|max:25",
                "phone" => "required|min:4|max:12",
                "password" => "confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\W]).{8,}$/",
                "password_confirmation" => "required"

            ],
            [
                "password.regex" => "Password must has <br> 1. One Small letter <br> 2. One Capital letter <br> 3.  One Number <br> 4. One Special Character <br> 5. must have at least 8 characters"
            ]
        );
        $password = Hash::make($request->password);
        if ($validated) {
            // $user = User::create([
            //     "name" => $request->name,
            //     "email" => $request->email,
            //     "phone" => $request->phone,
            //     "password" => $password
            // ]);
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = $password;
            $result = $user->save();

            if ($result) {
                return redirect()->route('user.login')->with('success', "Register Successfully Please Login");
            }
            return redirect()->back();
        } else return redirect()->back();

        // @Aa12345
    }

    public function login(Request $request)
    {
        $validated = $request->validate(
            [
                "phone" => "required|min:4|max:12",
                "password" => "regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\W]).{8,}$/",
            ],
            [
                "password.regex" => "Password must has <br> 1. One Small letter <br> 2. One Capital letter <br> 3.  One Number <br> 4. One Special Character <br> 5. must have at least 8 characters"
            ]
        );

        if ($validated) {

            $credential = [
                "phone" => $request->phone,
                "password" => $request->password,
            ];
            if (Auth::attempt($credential)) {
                return redirect()->route('user.home')->with('success', "Welcome Back");
            }
        } else return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
