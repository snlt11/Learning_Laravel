<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        dd("good to see you");
    }
    public function store(UserRequest $request)
    {
        echo "good to see you";
    }
}
