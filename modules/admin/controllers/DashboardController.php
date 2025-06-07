<?php

class DashboardController {
    public function index() {
        if (!isset($_SESSION['admin'])) {
            header('Location: /login');
            exit;
        }
        $title = 'Panel de Administración';
        ob_start();
        require_once __DIR__ . '/../views/dashboard.php';
        $content = ob_get_clean();
        require_once __DIR__ . '/../../../themes/default/layout.php';
    }
}