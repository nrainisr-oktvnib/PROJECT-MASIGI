<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('/auth/Beranda/beranda');
    }
}
