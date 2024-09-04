<?php

    require 'funciones.php';
    require 'config/database.php';
    require __DIR__ . '/../vendor/autoload.php';

    // Conectar bd
    $db = conectarDB();

    use Model\ActiveRecord;

    ActiveRecord::setDB($db);