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
                               onchange