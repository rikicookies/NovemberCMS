<?php

session_start();
\$uri = trim(parse_url(\$_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

switch (\$uri) {
    case 'admin/themes':
        require_once __DIR__ . '/../modules/admin/controllers/ThemeController.php';
        (new ThemeController())->index();
        break;
    case 'admin/themes/set':
        require_once __DIR__ . '/../modules/admin/controllers/ThemeController.php';
        (new ThemeController())->setTheme();
        break;
    default:
        http_response_code(404);
        echo "Página no encontrada.";
}