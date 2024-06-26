<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        return view('/auth/Admin/layout1');
    }

    public function dashboard(): string
    {
        return view('/auth/Admin/dashboard1');
    }

    public function registrasi(): string
    {
        return view('/auth/Admin/registrasi');
    }

    public function dataTakmir(): string
    {
        return view('/auth/Admin/dataTakmir');
    }
}
