<h2>Liste des notes</h2>
<ul>
<?php foreach ($notes as $note): ?>
    <li class="note">
        <strong><?= htmlspecialchars($note['title']) ?></strong><br><br>

        <p><?= nl2br(htmlspecialchars($note['content'])) ?><br><br></p>

        <div class="note-footer">
            <div class="note-datetime">
                <small class="note-date"><?= date('d/m/Y', strtotime($note['created_at'])) ?></small>
                <small class="note-time"><?= date('H:i:s', strtotime($note['created_at'] . ' +2 hours')) ?></small>
            </div>
            <a class="delete-link" href="index.php?route=notes.delete&id=<?= $note['id'] ?>">❌ Supprimer</a>
        </div>
    </li>
<?php endforeach; ?>
</ul>
