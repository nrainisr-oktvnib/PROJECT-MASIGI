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

    public function takmirmasjid(): string
    {
        return view('/auth/Beranda/takmirmasjid');
    }

    public function jadwal(): string
    {
        return view('/auth/Beranda/jadwal');
    }

    public function lapkeuangan(): string
    {
        return view('/auth/Beranda/lapkeuangan');
    }

    public function zakat(): string
    {
        return view('/auth/Beranda/zakat2');
    }

    public function qurban(): string
    {
        return view('/auth/Beranda/qurban');
    }

    public function donasi(): string
    {
        return view('/auth/Beranda/donasi');
    }

    public function tutor(): string
    {
        return view('/auth/Beranda/tutor');
    }

    public function tentang(): string
    {
        return view('/auth/Beranda/tentang');
    }
}
