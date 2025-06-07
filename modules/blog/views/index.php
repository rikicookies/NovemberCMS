<h2>Entradas del Blog</h2>
<a href="/blog/create">Nueva entrada</a>
<ul>
<?php foreach ($posts as $post): ?>
    <li><strong><?= htmlspecialchars($post['title']) ?></strong><br><?= nl2br(htmlspecialchars($post['content'])) ?></li>
<?php endforeach; ?>
</ul>