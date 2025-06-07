<?php

session_start();
require_once __DIR__ . '/lang.php';
\$uri = trim(parse_url(\$_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if (\$uri === 'set-lang' && isset(\$_POST['lang'])) {
    \$_SESSION['locale'] = \$_POST['lang'];
    header('Location: /');
    exit;
}

if (preg_match('#^confirm/([a-f0-9]+)$#', \$uri, \$matches)) {
    require_once __DIR__ . '/../modules/auth/controllers/RegisterController.php';
    (new RegisterController())->confirm(\$matches[1]);
    exit;
}

switch (\$uri) {
    case 'register':
        require_once __DIR__ . '/../modules/auth/controllers/RegisterController.php';
        if (\$_SERVER['REQUEST_METHOD'] === 'POST') {
            (new RegisterController())->register();
        } else {
            (new RegisterController())->form();
        }
        break;
    default:
        http_response_code(404);
        echo "Página no encontrada.";
}