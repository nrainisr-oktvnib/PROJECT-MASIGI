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

    public function takmirMasjid(): string
    {
        return view('/auth/Takmir/takmirMasjid');
    }

    public function sholatJumat(): string
    {
        return view('/auth/Takmir/sholatJumat');
    }

    public function laporanKeuangan(): string
    {
        return view('/auth/Takmir/laporanKeuangan');
    }

    public function donasi(): string
    {
        return view('/auth/Takmir/donasi');
    }

    public function zakat(): string
    {
        return view('/auth/Takmir/zakat');
    }

    public function qurban(): string
    {
        return view('/auth/Takmir/qurban');
    }
}
