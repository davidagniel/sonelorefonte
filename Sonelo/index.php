<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background-color: var(--bs-body-bg);
        }

        .login-img {
            background-image: url("https://images.unsplash.com/photo-1519389950473-47ba0277781c");
            background-size: cover;
            background-position: center;
        }

        .card {
            border: none;
        }

        .theme-switch {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>

<body>

<!-- Switch Dark / Light -->
<div class="theme-switch">
    <button id="themeToggle" class="btn btn-outline-secondary">
        <i id="themeIcon" class="bi bi-moon-fill"></i>
    </button>
</div>

<div class="container-fluid">
    <div class="row min-vh-100">

        <!-- Image -->
        <div class="col-lg-6 d-none d-lg-block login-img"></div>

        <!-- Formulaire -->
        <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
            <div class="card p-4 w-100" style="max-width: 420px;">
                <h2 class="text-center mb-4">Connexion</h2>

                <form id="loginForm" novalidate>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" id="email" class="form-control">
                        <div class="invalid-feedback">
                            Email invalide
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mot de passe</label>
                        <div class="input-group">
                            <input type="password" id="password" class="form-control">
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                <i class="bi bi-eye"></i>
                            </button>
                            <div class="invalid-feedback">
                                Minimum 6 caractères
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Se connecter
                    </button>

                </form>
            </div>
        </div>

    </div>
</div>

<!-- JS -->
<script>
    // ===== THEME SWITCH =====
    const themeToggle = document.getElementById("themeToggle");
    const themeIcon = document.getElementById("themeIcon");
    const html = document.documentElement;

    const savedTheme = localStorage.getItem("theme") || "dark";
    html.setAttribute("data-bs-theme", savedTheme);
    themeIcon.className = savedTheme === "dark" ? "bi bi-moon-fill" : "bi bi-sun-fill";

    themeToggle.addEventListener("click", () => {
        const currentTheme = html.getAttribute("data-bs-theme");
        const newTheme = currentTheme === "dark" ? "light" : "dark";

        html.setAttribute("data-bs-theme", newTheme);
        localStorage.setItem("theme", newTheme);
        themeIcon.className = newTheme === "dark" ? "bi bi-moon-fill" : "bi bi-sun-fill";
    });

    // ===== PASSWORD TOGGLE =====
    const password = document.getElementById("password");
    const togglePassword = document.getElementById("togglePassword");

    togglePassword.addEventListener("click", () => {
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
        togglePassword.innerHTML = type === "password"
            ? '<i class="bi bi-eye"></i>'
            : '<i class="bi bi-eye-slash"></i>';
    });

    // ===== FORM VALIDATION =====
    const form = document.getElementById("loginForm");
    const email = document.getElementById("email");

    form.addEventListener("submit", function (e) {
        e.preventDefault();
        let valid = true;

        if (!email.value || !email.value.includes("@")) {
            email.classList.add("is-invalid");
            valid = false;
        } else {
            email.classList.remove("is-invalid");
            email.classList.add("is-valid");
        }

        if (!password.value || password.value.length < 6) {
            password.classList.add("is-invalid");
            valid = false;
        } else {
            password.classList.remove("is-invalid");
            password.classList.add("is-valid");
        }

        if (valid) {
            alert("Connexion validée ✔️");
            // form.submit();
        }
    });
</script>

</body>
</html>