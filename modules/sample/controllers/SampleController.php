<?php

class SampleController {
    public function index() {
        $title = 'Módulo de ejemplo';
        ob_start();
        include __DIR__ . '/../views/index.php';
        $content = ob_get_clean();
        include __DIR__ . '/../../../themes/default/layout.php';
    }
}