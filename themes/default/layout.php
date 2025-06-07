<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title><?= \$title ?? 'CMS' ?></title>
  <style>body { font-family: sans-serif; margin: 40px; }</style>
</head>
<body>
<nav>
  <a href="/">Inicio</a> |
  <a href="/news">Noticias</a> |
  <a href="/blog">Blog</a> |
  <a href="/perfil">Perfil</a> |
  <a href="/admin">Admin</a>
</nav>
<hr>
<?= \$content ?>
</body>
</html>