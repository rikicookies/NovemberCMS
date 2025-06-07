<?php

class AuthController {
    public function login() {
        $title = 'Login';
        ob_start();
        require_once __DIR__ . '/../views/login.php';
        $content = ob_get_clean();
        require_once __DIR__ . '/../../../themes/default/layout.php';
    }

    public function doLogin() {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        if ($username === 'admin' && $password === 'admin') {
            $_SESSION['admin'] = true;
            header('Location: /admin');
        } else {
            echo 'Credenciales inválidas';
        }
    }

    public function logout() {
        unset($_SESSION['admin']);
        header('Location: /login');
    }
}