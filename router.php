<?php
// Activer l’affichage des erreurs
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Charger le contrôleur
require_once __DIR__ . '/controllers/noteController.php';

// Route par défaut
$route = $_GET['route'] ?? 'notes.index';

switch ($route) {
    case 'notes.index':
        indexNotes();
        break;
    case 'notes.create':
        createNote();
        break;
    case 'notes.store':
        storeNote();
        break;
    case 'notes.delete':
        deleteNoteRoute();
        break;
        case 'notes.search':   // 👈 nouvelle route
        searchNotes();
        break;
    case 'notes.api':      // 👈 bonus JSON
        apiNotes();
        break;
    default:
        echo "404 - Page not found";
}
