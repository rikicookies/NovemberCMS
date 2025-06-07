<?php

function __(\$key) {
    static \$lang = null;
    if (\$lang === null) {
        \$locale = $_SESSION['locale'] ?? 'es';
        \$langFile = __DIR__ . '/../lang/' . \$locale . '.php';
        \$lang = file_exists(\$langFile) ? include \$langFile : [];
    }
    return \$lang[\$key] ?? \$key;
}