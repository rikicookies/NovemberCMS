<h2>Gestión de Usuarios</h2>
<table border="1">
    <tr><th>ID</th><th>Usuario</th><th>Rol</th></tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= htmlspecialchars($user['username']) ?></td>
            <td><?= htmlspecialchars($user['role']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>