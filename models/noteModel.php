<?php
function addNote($pdo, $title, $content) {
    $stmt = $pdo->prepare("INSERT INTO notes (title, content) VALUES (?, ?)");
    $stmt->execute([$title, $content]);
}

function deleteNote($pdo, $id) {
    $stmt = $pdo->prepare("DELETE FROM notes WHERE id = ?");
    $stmt->execute([$id]);
}

function getNotes($pdo, $search = null, $sort = 'date_desc', $filter = 'all') {
    // Déterminer l'ordre
    switch ($sort) {
        case 'date_asc': $order = "created_at ASC"; break;
        case 'title_asc': $order = "title ASC"; break;
        case 'title_desc': $order = "title DESC"; break;
        default: $order = "created_at DESC"; break; // date_desc
    }

    if ($search) {
        switch ($filter) {
            case 'title':
                $stmt = $pdo->prepare("SELECT * FROM notes WHERE title LIKE ? ORDER BY $order");
                $stmt->execute(["%$search%"]);
                break;
            case 'content':
                $stmt = $pdo->prepare("SELECT * FROM notes WHERE content LIKE ? ORDER BY $order");
                $stmt->execute(["%$search%"]);
                break;
            default: // all
                $stmt = $pdo->prepare("SELECT * FROM notes WHERE title LIKE ? OR content LIKE ? ORDER BY $order");
                $stmt->execute(["%$search%", "%$search%"]);
                break;
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        return $pdo->query("SELECT * FROM notes ORDER BY $order")->fetchAll(PDO::FETCH_ASSOC);
    }
}
