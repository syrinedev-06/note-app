<!-- Formulaire pour ajouter une note -->
<form method="POST" action="index.php">
    <input type="text" name="title" placeholder="Titre" required>
    <textarea name="content" placeholder="Contenu" required></textarea>
    <button type="submit">Ajouter</button>
</form>

<hr>

<!-- Formulaire pour rechercher et trier les notes -->
<form method="GET" action="index.php" class="search-form">
    <input type="text" name="search" placeholder="Rechercher..." value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">

    <select name="filter">
        <option value="all" <?= ($_GET['filter'] ?? '') === 'all' ? 'selected' : '' ?>>Titre + Contenu</option>
        <option value="title" <?= ($_GET['filter'] ?? '') === 'title' ? 'selected' : '' ?>>Titre seulement</option>
        <option value="content" <?= ($_GET['filter'] ?? '') === 'content' ? 'selected' : '' ?>>Contenu seulement</option>
    </select>

    <select name="sort">
        <option value="date_desc" <?= ($_GET['sort'] ?? '') === 'date_desc' ? 'selected' : '' ?>>Date ↓</option>
        <option value="date_asc" <?= ($_GET['sort'] ?? '') === 'date_asc' ? 'selected' : '' ?>>Date ↑</option>
        <option value="title_asc" <?= ($_GET['sort'] ?? '') === 'title_asc' ? 'selected' : '' ?>>Titre A→Z</option>
        <option value="title_desc" <?= ($_GET['sort'] ?? '') === 'title_desc' ? 'selected' : '' ?>>Titre Z→A</option>
    </select>

    <button type="submit">Rechercher</button>
</form>
