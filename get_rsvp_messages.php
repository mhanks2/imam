<?php
require_once 'config/database.php';

try {
    $stmt = $pdo->query("SELECT * FROM rsvp_messages ORDER BY created_at DESC");
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode(['status' => 'success', 'data' => $messages]);
} catch(PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Error fetching messages: ' . $e->getMessage()]);
}
?> 