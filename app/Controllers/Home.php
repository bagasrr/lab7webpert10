<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Rental Mobil'
        ];

        return view('index', $data);
    }
}