<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Notes App</title>
</head>
<body>
    <h1>📒 Gestion de Notes</h1>
    
    <!-- Lien vers la liste des notes -->
    <a href="index.php?route=notes.index">Accueil</a> | 
    <a href="index.php?route=notes.create">➕ Nouvelle note</a> | 
    <a href="index.php?route=notes.api" target="_blank">📡 API JSON</a>

    <!-- 🔍 Formulaire de recherche -->
    <form action="index.php" method="get" style="margin-top:10px;">
        <input type="hidden" name="route" value="notes.search">
        <input type="text" name="search" placeholder="Rechercher une note...">
        <button type="submit">Rechercher</button>
    </form>

    <hr>
