<?php
require_once "db.php";
header("Content-Type: application/json");

$email = trim($_POST["email"] ?? "");

if (!$email) {
    echo json_encode(["message" => "Email requis"]);
    exit;
}

$stmt = $pdo->prepare("SELECT id FROM compte WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user) {
    $token = bin2hex(random_bytes(32));
    $expire = date("Y-m-d H:i:s", strtotime("+1 hour"));

    $pdo->prepare("
        UPDATE compte 
        SET token = ?, expire = ?
        WHERE id = ?
    ")->execute([$token, $expire, $user["id"]]);

    // 👉 ici envoi mail (PHPMailer recommandé)
    $link = "http://darude012-maker.fr:12000/reset-password.html?token=$token";
}

echo json_encode([
    "message" => "Si l’email existe, un lien a été envoyé."
]);
