<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Admin;
use App\Controllers\Takmir;
use App\Controllers\Jamaah;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Jamaah::index');
<<<<<<< HEAD

=======
<<<<<<< HEAD
$routes->get('/', 'Jamaah::beranda');
=======
>>>>>>> 9eb40b63034610efdca84f008dfb75c7fcac0dd8
>>>>>>> f4203c474970d634e64ad414c1bd0703111730c8
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
