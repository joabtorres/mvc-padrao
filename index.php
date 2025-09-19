<?php
// Habilita o autoload e inicia a aplicação
require_once __DIR__ . "/config.php";
require_once __DIR__ . '/app/core/App.php';
require_once __DIR__ . '/app/core/Controller.php';
require_once __DIR__ . '/app/core/Model.php';
$ap = new App();