<?php



function addNote($pdo, $title, $content) {
    $stmt = $pdo->prepare("INSERT INTO notes (title, content) VALUES (?, ?)");
    $stmt->execute([$title, $content]);
}

function deleteNote($pdo, $id) {
    $stmt = $pdo->prepare("DELETE FROM notes WHERE id = ?");
    $stmt->execute([$id]);
}
function getNotes($pdo, $search = null) {
    if ($search) {
        $stmt = $pdo->prepare("SELECT * FROM notes WHERE title LIKE ? OR content LIKE ? ORDER BY created_at DESC");
        $stmt->execute(['%' . $search . '%', '%' . $search . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        return $pdo->query("SELECT * FROM notes ORDER BY created_at DESC")->fetchAll();
    }
}
