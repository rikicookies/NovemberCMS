<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/database.php';
require_once __DIR__ . '/auth_helper.php';
require_once __DIR__ . '/theme_loader.php';
require_once __DIR__ . '/module_loader.php';
load_modules();
require_once __DIR__ . '/router.php';