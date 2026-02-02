<?php
header("Content-Type: application/json");
require_once "db.php";

$email = $_POST["email"] ?? "";

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["exists" => false]);
    exit;
}

$stmt = $pdo->prepare("SELECT id FROM compte WHERE email = ?");
$stmt->execute([$email]);

echo json_encode([
    "exists" => $stmt->fetch() ? true : false
]);
?>