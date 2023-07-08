<?php

namespace App\Controllers;

class Pages extends BaseController
{
    
    public function soon()
    {
        $data = ['title' => 'soon'];
        return view ('pages/soon', $data);
    }
}