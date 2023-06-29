<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function admin()
    {
        $data = [
            'title' => 'Portal Admin'
        ];
        return view('pages/home', $data);
    }
}