<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
        }

        .sidebar {
            width: 250px;
            transition: all 0.3s;
        }

        .sidebar.collapsed {
            margin-left: -250px;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: absolute;
                height: 100vh;
                z-index: 1050;
            }
        }

        .avatar-preview {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--bs-border-color);
        }

        .company-preview {
            max-height: 120px;
            object-fit: contain;
        }
    </style>
</head>

<body>

<!-- HEADER -->
<nav class="navbar navbar-expand navbar-dark bg-body border-bottom px-3">
    <button class="btn btn-outline-secondary me-3" id="toggleSidebar">
        <i class="bi bi-list"></i>
    </button>

    <span class="navbar-brand fw-bold">🚀 MonSite</span>

    <div class="ms-auto d-flex align-items-center gap-2">
        <button id="themeToggle" class="btn btn-outline-secondary">
            <i id="themeIcon" class="bi bi-moon-fill"></i>
        </button>

        <button class="btn btn-outline-secondary">
            <i class="bi bi-person-circle"></i>
        </button>
    </div>
</nav>

<div class="d-flex">

    <!-- SIDEBAR -->
    <aside class="sidebar bg-body-tertiary border-end p-3" id="sidebar">
        <ul class="nav flex-column gap-2">
            <li class="nav-item">
                <a class="nav-link" href="index.html"><i class="bi bi-house"></i> Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#"><i class="bi bi-person"></i> Profil</a>
            </li>
        </ul>
    </aside>

    <!-- CONTENT -->
    <main class="flex-grow-1 p-4">
        <div class="container" style="max-width: 900px;">

            <h3 class="mb-4">Mon profil</h3>

            <form>

                <!-- AVATAR -->
                <div class="mb-4 text-center">
                    <img id="avatarPreview" src="https://via.placeholder.com/120"
                         class="avatar-preview mb-2">
                    <div>
                        <input type="file" class="form-control" accept="image/*"
                               onchange="previewImage(event, 'avatarPreview')">
                    </div>
                </div>

                <!-- INFOS -->
                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">Prénom</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Téléphone</label>
                        <input type="tel" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Adresse</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Code postal</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-8">
                        <label class="form-label">Ville</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Société</label>
                        <input type="text" class="form-control">
                    </div>

                    <!-- LOGO SOCIETE -->
                    <div class="col-12">
                        <label class="form-label">Logo société</label>
                        <input type="file" class="form-control" accept="image/*"
                               onchange="previewImage(event, 'companyPreview')">
                        <img id="companyPreview" class="company-preview mt-2">
                    </div>

                    <!-- SWITCH SMS -->
                    <div class="col-12">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="smsSwitch">
                            <label class="form-check-label" for="smsSwitch">
                                Recevoir des SMS
                            </label>
                        </div>
                    </div>

                </div>

                <div class="mt-4">
                    <button class="btn btn-primary">Enregistrer</button>
                </div>

            </form>

        </div>
    </main>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Sidebar
    const sidebar = document.getElementById("sidebar");
    const toggleSidebar = document.getElementById("toggleSidebar");

    if (window.innerWidth < 768) sidebar.classList.add("collapsed");

    toggleSidebar.addEventListener("click", () => {
        sidebar.classList.toggle("collapsed");
    });

    // Theme
    const html = document.documentElement;
    const themeToggle = document.getElementById("themeToggle");
    const themeIcon = document.getElementById("themeIcon");

    const savedTheme = localStorage.getItem("theme") || "dark";
    html.setAttribute("data-bs-theme", savedTheme);
    themeIcon.className = savedTheme === "dark"
        ? "bi bi-moon-fill"
        : "bi bi-sun-fill";

    themeToggle.addEventListener("click", () => {
        const theme = html.getAttribute("data-bs-theme") === "dark" ? "light" : "dark";
        html.setAttribute("data-bs-theme", theme);
        localStorage.setItem("theme", theme);
        themeIcon.className = theme === "dark"
            ? "bi bi-moon-fill"
            : "bi bi-sun-fill";
    });

    // Preview images
    function previewImage(event, id) {
        const reader = new FileReader();
        reader.onload = () => document.getElementById(id).src = reader.result;
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

</body>
</html>