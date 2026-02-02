<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <title>Nouveau mot de passe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100">

<div class="card p-4" style="max-width: 400px;">
    <h4 class="mb-3 text-center">Nouveau mot de passe</h4>

    <form id="resetForm">
        <input type="hidden" id="token" value="<?= $_GET['token'] ?? '' ?>">
        <div class="mb-3">
            <label>Nouveau mot de passe</label>
            <input type="password" id="password" class="form-control" required>
        </div>

        <button class="btn btn-primary w-100">Modifier</button>
    </form>

    <div id="message" class="mt-3 text-center"></div>
</div>

<script>
$("#resetForm").on("submit", function (e) {
    e.preventDefault();

    $.post("php/reset_password.php", {
        token: $("#token").val(),
        password: $("#password").val()
    }, function (res) {
        $("#message").text(res.message);
    }, "json");
});
</script>

</body>
</html>
