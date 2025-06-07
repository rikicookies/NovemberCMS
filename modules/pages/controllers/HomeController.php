<?php

class HomeController {
    public function index() {
        $title = "Inicio";
        ob_start();
        require_once __DIR__ . '/../views/home.php';
        $content = ob_get_clean();
        require_once __DIR__ . '/../../../themes/default/layout.php';
    }
}