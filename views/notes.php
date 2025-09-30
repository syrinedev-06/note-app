<h2>Liste des notes</h2>
<ul>
<?php foreach ($notes as $note): ?>
    <li>
        <strong><?= htmlspecialchars($note['title']) ?></strong><br>
        <?= nl2br(htmlspecialchars($note['content'])) ?><br>
        <small><?= $note['created_at'] ?></small> |
        <a href="index.php?route=notes.delete&id=<?= $note['id'] ?>">❌ Supprimer</a>
    </li>
<?php endforeach; ?>
</ul>
