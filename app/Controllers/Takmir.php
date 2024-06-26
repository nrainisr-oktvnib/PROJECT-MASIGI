<?php

namespace App\Controllers;

class Takmir extends BaseController
{
    public function index(): string
    {
        return view('/auth/Takmir/layout2');
    }

    public function dashboard(): string
    {
        return view('/auth/Takmir/dashboard2');
    }

    public function registrasi(): string
    {
        return view('/auth/Takmir/registrasi');
    }

    public function dataTakmir(): string
    {
        return view('/auth/Takmir/dataTakmir');
    }
}
