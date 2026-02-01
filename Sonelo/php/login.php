<?php
session_start();
header("Content-Type: application/json");

require_once "db.php";

$email = trim($_POST["email"] ?? "");
$password = $_POST["password"] ?? "";
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

if (!$email || !$password) {
    echo json_encode([
        "success" => false,
        "message" => "Champs manquants"
    ]);
    exit;
}

// Récupération utilisateur
$stmt = $pdo->prepare("SELECT id, password, prenom FROM compte WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if (!$user || !password_verify($password, $user["password"])) {
    echo json_encode([
        "success" => false,
        "message" => "Email ou mot de passe incorrect"
    ]);
    exit;
}

// OK
$_SESSION["user_id"] = $user["id"];
$_SESSION["prenom"] = $user["prenom"];

echo json_encode([
    "success" => true,
    "redirect" => "/dashboard/index.php"
]);
