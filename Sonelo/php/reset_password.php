<?php
require_once "db.php";
header("Content-Type: application/json");

$token = $_POST["token"] ?? "";
$password = $_POST["password"] ?? "";

if (!$token || strlen($password) < 6) {
    echo json_encode(["message" => "Données invalides"]);
    exit;
}

$stmt = $pdo->prepare("
    SELECT id FROM compte 
    WHERE token = ? AND expire > NOW()
");
$stmt->execute([$token]);
$user = $stmt->fetch();

if (!$user) {
    echo json_encode(["message" => "Lien invalide ou expiré"]);
    exit;
}

$hash = password_hash($password, PASSWORD_DEFAULT);

$pdo->prepare("
    UPDATE compte 
    SET password = ?, token = NULL, expire = NULL
    WHERE id = ?
")->execute([$hash, $user["id"]]);

echo json_encode(["message" => "Mot de passe modifié avec succès"]);
