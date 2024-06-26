<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Admin;
use App\Controllers\Takmir;
use App\Controllers\Jamaah;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Jamaah::index');
$routes->get('Jamaah/beranda', 'Jamaah::beranda');
$routes->get('Jamaah/takmirmasjid', 'Jamaah::takmirmasjid');
$routes->get('Jamaah/jadwal', 'Jamaah::jadwal');
$routes->get('Jamaah/lapkeuangan', 'Jamaah::lapkeuangan');
$routes->get('Jamaah/zakat2', 'Jamaah::zakat');
$routes->get('Jamaah/qurban', 'Jamaah::qurban');
$routes->get('Jamaah/donasi', 'Jamaah::donasi');
$routes->get('Jamaah/tutor', 'Jamaah::tutor');
$routes->get('Jamaah/tentang', 'Jamaah::tentang');

$routes->get('admin', 'Admin::index');
$routes->get('admin/dashboard', 'Admin::dashboard');
$routes->get('admin/registrasi', 'Admin::registrasi');
$routes->get('admin/dataTakmir', 'Admin::dataTakmir');

$routes->get('Takmir', 'Takmir::index');
$routes->get('Takmir/dashboard', 'Takmir::dashboard');
$routes->get('Takmir/takmirMasjid', 'Takmir::takmirMasjid');
$routes->get('Takmir/sholatJumat', 'Takmir::sholatJumat');
$routes->get('Takmir/laporanKeuangan', 'Takmir::laporanKeuangan');
$routes->get('Takmir/donasi', 'Takmir::donasi');
$routes->get('Takmir/zakat', 'Takmir::zakat');
$routes->get('Takmir/qurban', 'Takmir::qurban');
