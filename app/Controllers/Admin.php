<?php

namespace App\Controllers;


use App\Models\DataMobilModel;

class Admin extends BaseController
{
    protected $dataMobilModel;

    public function __construct()
    {
        $this->dataMobilModel = new DataMobilModel();
    }

    public function index()
    {
        $dataSewa = $this->dataMobilModel->findAll();
        $data = [
            'title' => 'Admin Page',
            'dataSewa' => $dataSewa
        ];

        return view('pages/admin', $data);
    }
    

    public function add()
    {
        $data = [
            'title' => 'Insert Data'
        ];
        return view('pages/create', $data);
    }

    public function save()
    {
        dd($this->request->getVar());
    }
}