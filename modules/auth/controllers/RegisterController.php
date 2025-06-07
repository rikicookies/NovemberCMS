<?php

class RegisterController {
    private $pdo;

    public function __construct() {
        require __DIR__ . '/../../../core/database.php';
        global $pdo;
        $this->pdo = $pdo;
    }

    public function form() {
        \$title = 'Registro de Usuario';
        ob_start();
        include __DIR__ . '/../views/register.php';
        \$content = ob_get_clean();
        include __DIR__ . '/../../../themes/default/layout.php';
    }

    public function register() {
        \$username = trim(\$_POST['username']);
        \$email = trim(\$_POST['email']);
        \$password = password_hash(\$_POST['password'], PASSWORD_DEFAULT);
        \$token = bin2hex(random_bytes(16));

        \$stmt = \$this->pdo->prepare("INSERT INTO users (username, email, password, token, role, confirmed) VALUES (?, ?, ?, ?, 'viewer', 0)");
        \$stmt->execute([\$username, \$email, \$password, \$token]);

        // Simular envío de correo
        echo "<p>Correo de confirmación enviado a \$email</p>";
        echo "<p><a href='/confirm/\$token'>Haz clic aquí para confirmar tu cuenta</a></p>";
    }

    public function confirm(\$token) {
        \$stmt = \$this->pdo->prepare("UPDATE users SET confirmed = 1 WHERE token = ?");
        \$stmt->execute([\$token]);
        echo "<p>Cuenta confirmada. Ahora puedes iniciar sesión.</p>";
    }
}