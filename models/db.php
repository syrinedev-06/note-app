<?php
// models/db.php
date_default_timezone_set('Europe/Paris');
try {
    $pdo = new PDO('sqlite:' . __DIR__ . '/../database.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
 // Crée la table si elle n'existe pas
    $pdo->exec("CREATE TABLE IF NOT EXISTS notes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT NOT NULL,
        content TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )");
} catch (Exception $e) {
    die('Erreur DB : ' . $e->getMessage());
}
