<?php

session_start();
require_once __DIR__ . '/lang.php';
\$uri = trim(parse_url(\$_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if (preg_match('#^admin/users/delete/(\d+)$#', \$uri, \$m)) {
    require_once __DIR__ . '/../modules/admin/controllers/UserController.php';
    (new UserController())->delete(\$m[1]); exit;
}
if (preg_match('#^admin/users/edit/(\d+)$#', \$uri, \$m)) {
    require_once __DIR__ . '/../modules/admin/controllers/UserController.php';
    (new UserController())->edit(\$m[1]); exit;
}
if (preg_match('#^admin/users/update/(\d+)$#', \$uri, \$m)) {
    require_once __DIR__ . '/../modules/admin/controllers/UserController.php';
    (new UserController())->update(\$m[1]); exit;
}
switch (\$uri) {
    case 'admin/users':
        require_once __DIR__ . '/../modules/admin/controllers/UserController.php';
        (new UserController())->index(); break;
    case 'perfil':
        require_once __DIR__ . '/../modules/profile/controllers/ProfileController.php';
        (new ProfileController())->view(); break;
    default:
        http_response_code(404);
        echo "Página no encontrada.";
}