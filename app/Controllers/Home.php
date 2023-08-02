<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'welcome!!'; 
        return view('Home/IndexView', $data);
    }
}
?>