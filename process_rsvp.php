<?php
require_once 'config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $message = $_POST['message'] ?? '';
    $attendance = $_POST['attendance'] ?? '';

    try {
        $stmt = $pdo->prepare("INSERT INTO rsvp_messages (name, message, attendance, created_at) VALUES (?, ?, ?, NOW())");
        $stmt->execute([$name, $message, $attendance]);
        
        echo json_encode(['status' => 'success', 'message' => 'RSVP berhasil disimpan']);
    } catch(PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => 'Terjadi kesalahan: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?> 