<?php
function render_view(\$view_path, \$data = [], \$theme = null) {
    extract(\$data);
    ob_start();
    include \$view_path;
    \$content = ob_get_clean();
    \$theme_config = include __DIR__ . '/../config/theme.php';
    \$active_theme = \$theme ?? \$theme_config['active'];
    include __DIR__ . '/../themes/' . \$active_theme . '/layout.php';
}