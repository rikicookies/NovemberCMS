<?php

function load_modules() {
    $modules_path = __DIR__ . '/../modules';
    foreach (scandir($modules_path) as $module) {
        if ($module === '.' || $module === '..') continue;
        $module_bootstrap = "$modules_path/$module/module.php";
        if (file_exists($module_bootstrap)) {
            include_once $module_bootstrap;
        }
    }
}