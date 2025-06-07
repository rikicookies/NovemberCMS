<?php

class UserController {
    private $pdo;

    public function __construct() {
        require __DIR__ . '/../../../core/database.php';
        global $pdo;
        $this->pdo = $pdo;
    }

    public function index() {
        if (!isset($_SESSION['admin'])) {
            header('Location: /login');
            exit;
        }
        $stmt = $this->pdo->query("SELECT * FROM users");
        $users = $stmt->fetchAll();
        $title = 'Usuarios';
        ob_start();
        include __DIR__ . '/../views/users.php';
        $content = ob_get_clean();
        include __DIR__ . '/../../../themes/default/layout.php';
    }
}