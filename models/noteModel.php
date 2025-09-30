<?php
require_once __DIR__ . '/db.php';

function getNotes() {
    global $pdo;
    return $pdo->query("SELECT * FROM notes ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
}

function addNote($title, $content) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO notes (title, content) VALUES (?, ?)");
    $stmt->execute([$title, $content]);
}

function deleteNoteById($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM notes WHERE id = ?");
    $stmt->execute([$id]);
}
