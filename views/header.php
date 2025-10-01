<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Notes App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>📒 Gestion de Notes</h1>
    

<div class="navbar">
    <a href="index.php?route=notes.index">Accueil</a> | 
    <a href="index.php?route=notes.create">➕ Nouvelle note</a> | 
    <a href="index.php?route=notes.api" target="_blank">📡 API JSON</a>
</div>

<form method="get" action="index.php" style="margin-bottom:20px;">
    <input type="hidden" name="route" value="notes.search">
    <input type="text" name="search" placeholder="Rechercher...">
    <button type="submit">🔍 Rechercher</button>
</form>

<hr>

