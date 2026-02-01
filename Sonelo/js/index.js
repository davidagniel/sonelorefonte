$(document).ready(function () {

    /* ===== THEME SWITCH ===== */
    const $html = $("html");
    const $themeIcon = $("#themeIcon");

    let savedTheme = localStorage.getItem("theme") || "dark";
    $html.attr("data-bs-theme", savedTheme);
    $themeIcon
        .removeClass()
        .addClass(savedTheme === "dark" ? "bi bi-moon-fill" : "bi bi-sun-fill");

    $("#themeToggle").on("click", function () {
        let currentTheme = $html.attr("data-bs-theme");
        let newTheme = currentTheme === "dark" ? "light" : "dark";

        $html.attr("data-bs-theme", newTheme);
        localStorage.setItem("theme", newTheme);

        $themeIcon
            .removeClass()
            .addClass(newTheme === "dark" ? "bi bi-moon-fill" : "bi bi-sun-fill");
    });

    /* ===== PASSWORD TOGGLE ===== */
    $("#togglePassword").on("click", function () {
        let $password = $("#password");
        let type = $password.attr("type") === "password" ? "text" : "password";
        $password.attr("type", type);

        $(this).html(
            type === "password"
                ? '<i class="bi bi-eye"></i>'
                : '<i class="bi bi-eye-slash"></i>'
        );
    });

    /* ===== FORM VALIDATION ===== */
 $("#loginForm").on("submit", function (e) {
        e.preventDefault();

        let email = $("#email").val().trim();
        let password = $("#password").val();

        if (!email || !password) {
            alert("Veuillez remplir tous les champs");
            return;
        }

        $.ajax({
            url: "php/login.php",
            type: "POST",
            dataType: "json",
            data: {
                email: email,
                password: password
            },
            beforeSend: function () {
                $("button[type=submit]").prop("disabled", true).text("Connexion...");
            },
            success: function (response) {
                if (response.success) {
                    window.location.href = response.redirect;
                } else {
                    alert(response.message);
                }
            },
            error: function () {
                alert("Erreur serveur");
            },
            complete: function () {
                $("button[type=submit]").prop("disabled", false).text("Se connecter");
            }
        });
    });



});