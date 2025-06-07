<?php

function is_admin() {
    return isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin';
}

function is_editor() {
    return isset($_SESSION['user']) && in_array($_SESSION['user']['role'], ['admin', 'editor']);
}

function require_role($role) {
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== $role) {
        http_response_code(403);
        echo "Acceso denegado.";
        exit;
    }
}