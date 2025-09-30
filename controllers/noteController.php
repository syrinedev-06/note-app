<?php
require_once __DIR__ . '/../models/noteModel.php';

function indexNotes() {
    $notes = getNotes();
    include __DIR__ . '/../views/header.php';
    include __DIR__ . '/../views/notes.php';
    include __DIR__ . '/../views/footer.php';
}

function createNote() {
    include __DIR__ . '/../views/header.php';
    include __DIR__ . '/../views/form.php';
    include __DIR__ . '/../views/footer.php';
}

function storeNote() {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!empty($_POST['title']) && !empty($_POST['content'])) {
            addNote($_POST['title'], $_POST['content']);
        }
    }
    header("Location: index.php?route=notes.index");
    exit;
}

function deleteNoteRoute() {
    if (isset($_GET['id'])) {
        deleteNoteById($_GET['id']);
    }
    header("Location: index.php?route=notes.index");
    exit;
}
// ✅ Rechercher une note
function searchNotes() {
    global $pdo;
    $search = $_GET['search'] ?? '';
    $notes = getNotes($pdo, $search); 
    include __DIR__ . '/../views/header.php';
    include __DIR__ . '/../views/notes.php';
    include __DIR__ . '/../views/footer.php';
}

// ✅ Bonus : API JSON
function apiNotes() {
    global $pdo;
    $notes = getNotes($pdo);
    header('Content-Type: application/json');
    echo json_encode($notes);
     exit;
}