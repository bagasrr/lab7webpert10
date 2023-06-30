<?php

namespace App\Controllers;

use App\Models\DataMobilModel;

class Pages extends BaseController
{
    protected $dataMobilModel;

    public function __construct()
    {
        $this->dataMobilModel = new DataMobilModel();
    }

    public function admin()
    {
        $dataSewa = $this->dataMobilModel->findAll();
        $data = [
            'title' => 'Admin Page',
            'dataSewa' => $dataSewa
        ];

        return view('pages/admin', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Insert Data'
        ];
        return view('pages/create', $data);
    }
}