<?php

session_start();
$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

switch ($uri) {
    case '':
        require_once __DIR__ . '/../modules/pages/controllers/HomeController.php';
        (new HomeController())->index();
        break;
    case 'login':
        require_once __DIR__ . '/../modules/admin/controllers/AuthController.php';
        (new AuthController())->login();
        break;
    case 'do-login':
        require_once __DIR__ . '/../modules/admin/controllers/AuthController.php';
        (new AuthController())->doLogin();
        break;
    case 'logout':
        require_once __DIR__ . '/../modules/admin/controllers/AuthController.php';
        (new AuthController())->logout();
        break;
    case 'admin':
        require_once __DIR__ . '/../modules/admin/controllers/DashboardController.php';
        (new DashboardController())->index();
        break;
    case 'blog':
        require_once __DIR__ . '/../modules/blog/controllers/BlogController.php';
        (new BlogController())->index();
        break;
    case 'blog/create':
        require_once __DIR__ . '/../modules/blog/controllers/BlogController.php';
        (new BlogController())->create();
        break;
    case 'blog/store':
        require_once __DIR__ . '/../modules/blog/controllers/BlogController.php';
        (new BlogController())->store();
        break;
    case 'sample':
        require_once __DIR__ . '/../modules/sample/controllers/SampleController.php';
        (new SampleController())->index();
        break;
    default:
        http_response_code(404);
        echo "Página no encontrada.";
}