<?php

class ProfileController {
    private $pdo;
    public function __construct() {
        require __DIR__ . '/../../../core/database.php';
        global $pdo;
        $this->pdo = $pdo;
    }

    public function view() {
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        $id = $_SESSION['user']['id'];
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch();
        $title = 'Mi Perfil';
        ob_start();
        include __DIR__ . '/../views/profile.php';
        $content = ob_get_clean();
        include __DIR__ . '/../../../themes/default/layout.php';
    }
}