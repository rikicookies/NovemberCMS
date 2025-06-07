<?php

class BlogController {
    private $pdo;

    public function __construct() {
        require __DIR__ . '/../../../core/database.php';
        global $pdo;
        $this->pdo = $pdo;
    }

    public function index() {
        $stmt = $this->pdo->query("SELECT * FROM posts ORDER BY id DESC");
        $posts = $stmt->fetchAll();
        $title = 'Entradas del Blog';
        ob_start();
        include __DIR__ . '/../views/index.php';
        $content = ob_get_clean();
        include __DIR__ . '/../../../themes/default/layout.php';
    }

    public function create() {
        $title = 'Crear Entrada';
        ob_start();
        include __DIR__ . '/../views/create.php';
        $content = ob_get_clean();
        include __DIR__ . '/../../../themes/default/layout.php';
    }

    public function store() {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $stmt = $this->pdo->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
        $stmt->execute([$title, $content]);
        header('Location: /blog');
    }
}