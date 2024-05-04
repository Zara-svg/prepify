<?php

namespace App\Controllers;

class Page extends BaseController
{
    
    public function ulasan()
    {
        $data = [
            'title' => 'Ulasan | Prepify.id'
        ];
        return view('ulasan.php', $data);

    }
}