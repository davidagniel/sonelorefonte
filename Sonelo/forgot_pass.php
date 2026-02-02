<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <title>Mot de passe oublié</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100">

<div class="card p-4" style="max-width: 400px; width: 100%;">
    <h4 class="mb-3 text-center">Mot de passe oublié</h4>

    <form id="forgotForm">
        <div class="mb-3">
            <label>Email</label>
            <input type="email" id="email" class="form-control" required>
        </div>

        <button class="btn btn-primary w-100">Envoyer</button>
    </form>

    <div id="message" class="mt-3 text-center"></div>
</div>

<script>
$("#forgotForm").on("submit", function (e) {
    e.preventDefault();

    $.post("php/forgot_password.php", {
        email: $("#email").val()
    }, function (res) {
        $("#message").text(res.message);
    }, "json");
});
</script>

</body>
</html>
