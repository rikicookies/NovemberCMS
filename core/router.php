<?php

session_start();
require_once __DIR__ . '/lang.php';
\$uri = trim(parse_url(\$_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

switch (\$uri) {
    case '':
        require_once __DIR__ . '/../modules/pages/controllers/HomeController.php';
        (new HomeController())->index();
        break;
    case 'news':
        require_once __DIR__ . '/../modules/news/controllers/NewsController.php';
        (new NewsController())->index();
        break;
    case (preg_match('#^news/view/(\d+)$#', \$uri, \$m) ? true : false):
        require_once __DIR__ . '/../modules/news/controllers/NewsController.php';
        (new NewsController())->view(\$m[1]);
        break;
    case 'blog':
        echo '<h2>Sección Blog no implementada en esta demo</h2>';
        break;
    case 'perfil':
        echo '<h2>Página de perfil (vista simplificada)</h2>';
        break;
    case 'admin':
        echo '<h2>Panel de Administración (vista simplificada)</h2>';
        break;
    case 'login':
        echo '<h2>Página de login (simulada)</h2>';
        break;
    case 'register':
        echo '<h2>Página de registro (simulada)</h2>';
        break;
    default:
        http_response_code(404);
        echo 'Página no encontrada';
        break;
}