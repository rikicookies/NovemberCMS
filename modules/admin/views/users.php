<h2>Administrar Usuarios</h2>
<table border="1">
<tr><th>ID</th><th>Usuario</th><th>Rol</th><th>Acciones</th></tr>
<?php foreach ($users as $u): ?>
<tr>
    <td><?= $u['id'] ?></td>
    <td><?= htmlspecialchars($u['username']) ?></td>
    <td><?= htmlspecialchars($u['role']) ?></td>
    <td>
        <a href="/admin/users/edit/<?= $u['id'] ?>">Editar</a> |
        <a href="/admin/users/delete/<?= $u['id'] ?>" onclick="return confirm('¿Eliminar?')">Eliminar</a>
    </td>
</tr>
<?php endforeach; ?>
</table>