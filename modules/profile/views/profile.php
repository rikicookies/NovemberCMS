<h2>Perfil de Usuario</h2>
<p><strong>Usuario:</strong> <?= htmlspecialchars($user['username']) ?></p>
<p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
<p><strong>Rol:</strong> <?= htmlspecialchars($user['role']) ?></p>
<p><strong>Confirmado:</strong> <?= $user['confirmed'] ? 'Sí' : 'No' ?></p>