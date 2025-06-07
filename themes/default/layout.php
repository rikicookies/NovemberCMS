<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= \$title ?? 'Mi CMS' ?></title>
</head>
<body>
    <form method="post" action="/set-lang">
        <label><?= __('select_language') ?>:</label>
        <select name="lang" onchange="this.form.submit()">
            <option value="es">Español</option>
            <option value="en">English</option>
        </select>
    </form>
    <hr>
    <?= \$content ?>
</body>
</html>