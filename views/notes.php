<ul>
<?php foreach ($notes as $note): ?>
    <li class="note">
        <strong><?= htmlspecialchars($note['title']) ?></strong>
        <p><?= nl2br(htmlspecialchars($note['content'])) ?></p>
        <div class="note-datetime">
            <small class="note-date"><?= date('d/m/Y', strtotime($note['created_at'])) ?></small>
            <small class="note-time"><?= date('H:i:s', strtotime($note['created_at'])) ?></small>
        </div>
        <a href="index.php?delete=<?= $note['id'] ?>">❌ Supprimer</a>
    </li>
<?php endforeach; ?>
</ul>
