<?php

class ThemeController {
    public function index() {
        require_role('admin');
        \$themes = array_filter(scandir(__DIR__ . '/../../../themes'), fn(\$d) => !in_array(\$d, ['.', '..']));
        \$title = 'Seleccionar Tema';
        ob_start();
        include __DIR__ . '/../views/themes.php';
        \$content = ob_get_clean();
        include __DIR__ . '/../../../themes/default/layout.php';
    }

    public function setTheme() {
        require_role('admin');
        \$selected = $_POST['theme'] ?? 'default';
        file_put_contents(__DIR__ . '/../../../config/theme.php', "<?php return ['active' => '\$selected'];");
        header('Location: /admin/themes');
    }
}