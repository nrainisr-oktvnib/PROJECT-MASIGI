<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Admin;
use App\Controllers\Takmir;
use App\Controllers\Jamaah;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Jamaah::index');
$routes->get('admin', 'Admin::index');
$routes->get('admin/dashboard', 'Admin::dashboard');
$routes->get('admin/registrasi', 'Admin::registrasi');
$routes->get('admin/dataTakmir', 'Admin::dataTakmir');
$routes->get('takmir/dashboard', 'takmir::dashboard');
$routes->get('takmir/takmirMasjid', 'takmir::takmirMasjid');
$routes->get('takmir/sholatJumat', 'takmir::sholatJumat');
$routes->get('takmir/laporanKeuangan', 'takmir::laporanKeuangan');
$routes->get('takmir/donasi', 'takmir::donasi');
$routes->get('takmir/zakat', 'takmir::zakat');
$routes->get('takmir/qurban', 'takmir::qurban');
