<h2>Ajouter une note</h2>
<form method="POST" action="index.php?route=notes.store">
    <label for="title">Titre :</label><br>
    <input type="text" name="title" required><br><br>

    <label for="content">Contenu :</label><br>
    <textarea name="content" required></textarea><br><br>

    <button type="submit">Enregistrer</button>
</form>
