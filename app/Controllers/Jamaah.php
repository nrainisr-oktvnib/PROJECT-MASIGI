<?php

namespace App\Controllers;

class Jamaah extends BaseController
{
    public function index(): string
    {
        return view('/auth/Beranda/beranda');
    }
}
