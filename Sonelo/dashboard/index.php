<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            transition: all 0.3s;
        }

        .sidebar.collapsed {
            margin-left: -250px;
        }

        /* Mobile */
        @media (max-width: 768px) {
            .sidebar {
                position: absolute;
                height: 100vh;
                z-index: 1050;
            }
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

        <!-- SWITCH THEME -->
        <button id="themeToggle" class="btn btn-outline-secondary">
            <i id="themeIcon" class="bi bi-moon-fill"></i>
        </button>

        <!-- AVATAR -->
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
                <a class="nav-link active" href="#"><i class="bi bi-house"></i> Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-person"></i> Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-gear"></i> Paramètres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="#"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
            </li>
        </ul>
    </aside>

    <!-- CONTENT -->
    <main class="flex-grow-1 p-4">

        <div class="row g-4">

            <!-- CARD 1 -->
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <span>Cadre 1</span>
                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="collapse" data-bs-target="#card1">
                            <i class="bi bi-chevron-down"></i>
                        </button>
                    </div>
                    <div id="card1" class="collapse show">
                        <div class="card-body">
                            Contenu du cadre 1
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <span>Cadre 2</span>
                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="collapse" data-bs-target="#card2">
                            <i class="bi bi-chevron-down"></i>
                        </button>
                    </div>
                    <div id="card2" class="collapse show">
                        <div class="card-body">
                            Contenu du cadre 2
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <span>Cadre 3</span>
                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="collapse" data-bs-target="#card3">
                            <i class="bi bi-chevron-down"></i>
                        </button>
                    </div>
                    <div id="card3" class="collapse show">
                        <div class="card-body">
                            Contenu du cadre 3
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // ===== SIDEBAR =====
    const sidebar = document.getElementById("sidebar");
    const toggleSidebar = document.getElementById("toggleSidebar");

    if (window.innerWidth < 768) {
        sidebar.classList.add("collapsed");
    }

    toggleSidebar.addEventListener("click", () => {
        sidebar.classList.toggle("collapsed");
    });

    // ===== THEME SWITCH =====
    const themeToggle = document.getElementById("themeToggle");
    const themeIcon = document.getElementById("themeIcon");
    const html = document.documentElement;

    const savedTheme = localStorage.getItem("theme") || "dark";
    html.setAttribute("data-bs-theme", savedTheme);
    themeIcon.className = savedTheme === "dark"
        ? "bi bi-moon-fill"
        : "bi bi-sun-fill";

    themeToggle.addEventListener("click", () => {
        const currentTheme = html.getAttribute("data-bs-theme");
        const newTheme = currentTheme === "dark" ? "light" : "dark";

        html.setAttribute("data-bs-theme", newTheme);
        localStorage.setItem("theme", newTheme);

        themeIcon.className = newTheme === "dark"
            ? "bi bi-moon-fill"
            : "bi bi-sun-fill";
    });
</script>

</body>
</html>