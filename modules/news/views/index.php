<h2>Noticias Recientes</h2>
<?php foreach ($news as $n): ?>
    <h3><a href="/news/view/<?= $n['id'] ?>"><?= htmlspecialchars($n['title']) ?></a></h3>
    <p><?= nl2br(htmlspecialchars(substr($n['content'], 0, 150))) ?>...</p>
<?php endforeach; ?>