<?php
require '../vendor/autoload.php';
require '../config/database.php';

$user = Src\Entities\Usuarios::get();
include "../resources/views/login.php";
