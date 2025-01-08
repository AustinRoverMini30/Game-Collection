<?php

require_once __DIR__ . '/vendor/autoload.php'; // Charge les dépendances

use Dotenv\Dotenv;

// Charger le fichier .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

include 'controllers/controllerChoice.php';

?>