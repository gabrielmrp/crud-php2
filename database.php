<?php

use Illuminate\Database\Capsule\Manager;

$capsule = new Manager;

  
$is_development = @file_get_contents('development')!==false;

$database = !$is_development?'db_a71d65_sql1039':'phpcrud';
$username = !$is_development?'a71d65_sql1039':'root';
$password = !$is_development?'trinta30':'root';
$host =     !$is_development?'MYSQL5030.site4now.net':'db';

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => $host ,
    'database'  => $database,
    'username'  => $username,
    'password'  => $password,
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

