<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
# $routes->get('/', 'Home::index');

// $routes->get('/', 'Home::index');   // ← desactivar esta
$routes->get('/', static function () {
    // (opcional) conteos reales; si no querés DB, ponelos en 0
    $db = \Config\Database::connect();
    return view('dashboard', [
        'alumnosCount'      => $db->table('alumno')->countAllResults(),
        'carrerasCount'     => $db->table('carrera')->countAllResults(),
        'cursosCount'       => $db->table('curso')->countAllResults(),
        'profesoresCount'   => $db->table('profesor')->countAllResults(),
        'inscripcionesCount'=> $db->table('inscripcion')->countAllResults(),
    ]);
});

$routes->get('alumnos', 'Alumnos::index');
$routes->post('alumnos', 'Alumnos::store'); // crear
$routes->put('alumnos/(:num)', 'Alumnos::update/$1');  // actualizar (method spoofing)
$routes->delete('alumnos/(:num)', 'Alumnos::delete/$1'); // eliminar (method spoofing)
