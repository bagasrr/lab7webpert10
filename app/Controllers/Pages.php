<?php

namespace App\Controllers;

class Pages extends BaseController
{
    
    public function soon()
    {
        $data = ['title' => 'Soon'];
        return view ('pages/soon', $data);
    }
    
    public function catalog()
    {
        $data = ['title' => 'Catalog'];
        return view ('pages/catalog', $data);
    }

    public function learnmore()
    {
        $data = ['title' => 'Info'];
        return view ('pages/learnmore', $data);
    }

}