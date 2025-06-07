<?php

class NewsController {
    private $pdo;
    public function __construct() {
        require __DIR__ . '/../../../core/database.php';
        global $pdo;
        $this->pdo = $pdo;
    }

    public function index() {
        $news = $this->pdo->query("SELECT * FROM news ORDER BY created_at DESC")->fetchAll();
        $title = 'Noticias';
        ob_start();
        include __DIR__ . '/../views/index.php';
        $content = ob_get_clean();
        include __DIR__ . '/../../../themes/default/layout.php';
    }

    public function view($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM news WHERE id = ?");
        $stmt->execute([$id]);
        $article = $stmt->fetch();
        $comments = $this->pdo->prepare("SELECT c.*, u.username FROM comments c JOIN users u ON u.id = c.user_id WHERE news_id = ? ORDER BY c.created_at DESC");
        $comments->execute([$id]);
        $comments = $comments->fetchAll();
        $title = $article['title'];
        ob_start();
        include __DIR__ . '/../views/view.php';
        $content = ob_get_clean();
        include __DIR__ . '/../../../themes/default/layout.php';
    }
}