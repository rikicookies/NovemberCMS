<?php

class UserController {
    private $pdo;

    public function __construct() {
        require __DIR__ . '/../../../core/database.php';
        global $pdo;
        $this->pdo = $pdo;
    }

    public function index() {
        require_role('admin');
        $users = $this->pdo->query("SELECT * FROM users")->fetchAll();
        $title = 'Usuarios';
        ob_start();
        include __DIR__ . '/../views/users.php';
        $content = ob_get_clean();
        include __DIR__ . '/../../../themes/default/layout.php';
    }

    public function delete($id) {
        require_role('admin');
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$id]);
        header('Location: /admin/users');
    }

    public function edit($id) {
        require_role('admin');
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch();
        $title = 'Editar Usuario';
        ob_start();
        include __DIR__ . '/../views/edit_user.php';
        $content = ob_get_clean();
        include __DIR__ . '/../../../themes/default/layout.php';
    }

    public function update($id) {
        require_role('admin');
        $role = $_POST['role'];
        $stmt = $this->pdo->prepare("UPDATE users SET role = ? WHERE id = ?");
        $stmt->execute([$role, $id]);
        header('Location: /admin/users');
    }
}