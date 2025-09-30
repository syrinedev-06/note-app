<?php
require_once __DIR__ . '/../models/db.php';
require_once __DIR__ . '/../models/noteModel.php';

// Ajouter une note
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['title']) && !empty($_POST['content'])) {
        addNote($pdo, $_POST['title'], $_POST['content']);
    }
    header("Location: index.php");
    exit;
}

// Supprimer une note
if (isset($_GET['delete'])) {
    deleteNote($pdo, $_GET['delete']);
    header("Location: index.php");
    exit;
}

// Récupérer les notes (filtrées ou non)
$search = $_GET['search'] ?? null;
$sort = $_GET['sort'] ?? 'date_desc';
$filter = $_GET['filter'] ?? 'all';
$notes = getNotes($pdo, $search);
