<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function login()
    {
        $data = [
            'title' => 'Login | Prepify.id'
        ];
        return view('auth/login', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Register | Prepify.id'
        ];
        return view('auth/register', $data);
    }
}
