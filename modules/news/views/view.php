<article>
    <h2><?= htmlspecialchars($article['title']) ?></h2>
    <p><?= nl2br(htmlspecialchars($article['content'])) ?></p>
</article>
<div>
    <a href="#" onclick="alert('Compartido en Facebook');return false;">Compartir</a> |
    <a href="/news/like/<?= $article['id'] ?>">👍</a> |
    <a href="/news/dislike/<?= $article['id'] ?>">👎</a> |
    <a href="/news/favorite/<?= $article['id'] ?>">⭐ Guardar</a>
</div>
<hr>
<h3>Comentarios</h3>
<?php foreach ($comments as $c): ?>
<p><strong><?= htmlspecialchars($c['username']) ?>:</strong> <?= nl2br(htmlspecialchars($c['comment'])) ?></p>
<?php endforeach; ?>
<?php if (isset($_SESSION['user'])): ?>
<form method="post" action="/news/comment/<?= $article['id'] ?>">
    <textarea name="comment" rows="3" required></textarea><br>
    <input type="submit" value="Comentar">
</form>
<?php else: ?>
<p><a href="/login">Inicia sesión</a> para comentar.</p>
<?php endif; ?>