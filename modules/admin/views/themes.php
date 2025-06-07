<h2>Temas disponibles</h2>
<form method="post" action="/admin/themes/set">
    <?php foreach (\$themes as \$theme): ?>
        <input type="radio" name="theme" value="<?= \$theme ?>"> <?= ucfirst(\$theme) ?><br>
    <?php endforeach; ?>
    <br><input type="submit" value="Guardar Tema">
</form>