<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
  'driver'    => 'mysql',
  'host'      => '127.0.0.1',
  'database'  => 'javierDiez',
  'username'  => 'marisak',
  'password'  => 'password',
  'charset'   => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix'    => '',
]);

$capsule->bootEloquent();

// Verificar la conexión
try {
  $capsule->getConnection()->getPdo();
  echo "Conexión exitosa";
} catch (\Exception $e) {
  die("Error al conectar a la base de datos: " . $e->getMessage());
}





