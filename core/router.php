<?php

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

switch ($uri) {
    case '':
        require_once __DIR__ . '/../modules/pages/controllers/HomeController.php';
        (new HomeController())->index();
        break;

    default:
        http_response_code(404);
        echo "Página no encontrada.";
}