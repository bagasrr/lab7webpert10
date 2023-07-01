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
    }
}