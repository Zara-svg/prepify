<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {   
        $data = [
            'title' => 'Beranda | Prepify.id'
        ];
        return view('welcome_message', $data);
    }
}
