<h2>Ajouter une note</h2>
<form method="POST" action="index.php?route=notes.store">
    <label for="title">Titre :</label><br>
    <input type="text" id="title" name="title" required><br><br>

    <label for="content">Contenu :</label><br>
    <textarea id="content" name="content" required></textarea><br><br>

    <button type="submit">➕ Ajouter</button>
</form>
