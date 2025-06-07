<h2>Editar Usuario</h2>
<form method="post" action="/admin/users/update/<?= $user['id'] ?>">
    <label>Rol:</label>
    <select name="role">
        <option value="viewer" <?= $user['role'] === 'viewer' ? 'selected' : '' ?>>Viewer</option>
        <option value="editor" <?= $user['role'] === 'editor' ? 'selected' : '' ?>>Editor</option>
        <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
    </select><br><br>
    <input type="submit" value="Actualizar">
</form>