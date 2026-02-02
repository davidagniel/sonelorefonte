<?php
header("Content-Type: application/json");
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["status" => "error", "message" => "Méthode invalide"]);
    exit;
}

function clean($data) {
    return trim(htmlspecialchars($data));
}



if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{12,}$/', $password)) {
    echo json_encode(["status"=>"error","message"=>"Mot de passe trop faible"]);
    exit;
}

// Confirmation
if ($_POST["password_confirm"] !== $password) {
    echo json_encode(["status"=>"error","message"=>"Mots de passe différents"]);
    exit;
}

// Telephone
if ($telephone && !preg_match('/^(06|07)[0-9]{8}$/', $telephone)) {
    echo json_encode(["status"=>"error","message"=>"Téléphone invalide"]);
    exit;
}






$prenom     = clean($_POST["prenom"] ?? "");
$nom        = clean($_POST["nom"] ?? "");
$email      = clean($_POST["email"] ?? "");
$telephone  = clean($_POST["telephone"] ?? "");
$password   = $_POST["password"] ?? "";
$adresse    = clean($_POST["adresse"] ?? "");
$cp         = clean($_POST["cp"] ?? "");
$ville      = clean($_POST["ville"] ?? "");
$societe    = clean($_POST["societe"] ?? "");
$sms        = isset($_POST["sms"]) ? 1 : 0;

if (!$prenom || !$nom || !$email || strlen($password) < 6) {
    echo json_encode(["status" => "error", "message" => "Champs obligatoires manquants"]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["status" => "error", "message" => "Email invalide"]);
    exit;
}

$stmt = $pdo->prepare("SELECT id FROM compte WHERE email = ?");
$stmt->execute([$email]);
if ($stmt->fetch()) {
    echo json_encode(["status" => "error", "message" => "Email déjà utilisé"]);
    exit;
}

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

/* === UPLOADS === */
function uploadImage($file, $folder) {
    if (!isset($file) || $file["error"] !== 0) return null;

    $ext = pathinfo($file["name"], PATHINFO_EXTENSION);
    $allowed = ["jpg", "jpeg", "png", "webp"];

    if (!in_array(strtolower($ext), $allowed)) return null;

    $name = uniqid() . "." . $ext;
    $path = "../uploads/$folder/" . $name;
    move_uploaded_file($file["tmp_name"], $path);
    return $name;
}

$avatar  = uploadImage($_FILES["avatar"] ?? null, "avatars");
$company = uploadImage($_FILES["company"] ?? null, "companies");

/* === INSERT === */
$sql = "INSERT INTO compte 
(prenom, nom, email, telephone, password, adresse, cp, ville, societe, avatar, company_logo, sms)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $prenom,
    $nom,
    $email,
    $telephone,
    $passwordHash,
    $adresse,
    $cp,
    $ville,
    $societe,
    $avatar,
    $company,
    $sms
]);

echo json_encode(["status" => "success", "message" => "Compte créé avec succès"]);
