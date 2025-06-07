<?php

class HomeController {
    public function index() {
        $title = 'Inicio';
        ob_start();
        include __DIR__ . '/../views/home.php';
        $content = ob_get_clean();
        include __DIR__ . '/../../../themes/default/layout.php';
    }
}