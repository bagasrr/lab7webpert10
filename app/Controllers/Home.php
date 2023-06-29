<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin Page'
        ];
        return view('pages/home', $data);
    }
    public function admin()
    {
        return view('admin');
    }
}