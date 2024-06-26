<?php

namespace App\Controllers;

class Jamaah extends BaseController
{
    public function index(): string
    {
        return view('/auth/Beranda/layout3');
    }

    public function beranda(): string
    {
        return view('/auth/Beranda/beranda');
    }
}
