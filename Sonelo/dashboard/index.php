<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Page avec Sidebar</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
    }

    .wrapper {
      display: flex;
      min-height: 100vh;
    }

    #sidebar {
      width: 250px;
      background-color: #343a40;
      color: white;
      padding: 1rem;
    }

    #sidebar .nav-link {
      color: white;
    }

    #main-content {
      flex-grow: 1;
      padding: 2rem;
    }

    /* Mobile styles */
    @media (max-width: 768px) {
      #sidebar {
        position: fixed;
        top: 56px; /* height of navbar */
        left: -250px;
        height: 100%;
        z-index: 1030;
        transition: left 0.3s ease;
      }

      #sidebar.show {
        left: 0;
      }

      #main-content {
        padding: 1rem;
      }
    }
  
  </style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark d-md-none">
    <div class="container-fluid">
      <button class="btn btn-outline-light" id="toggleSidebar">
        ☰
      </button>
      <span class="navbar-brand mb-0 h1"> <img src="image/PNG/Logo-sans-slogan.png" width="100" height="100" alt="logo"/></span>
    </div>
  </nav>

  <div class="wrapper">
  <!-- Sidebar -->
  <nav id="sidebar" class="d-md-block bg-secondary text-dark p-3">
 
    <h4>Menu</h4>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a href="#" class="nav-link text-dark">Accueil</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark">Profil</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark">Paramètres</a>
      </li>
    </ul>

  </nav>

  <!-- Main content -->
  <main class="flex-grow-1 p-4">
    <h1>Bienvenue</h1>
    <p>Ceci est le contenu principal de la page.</p>
    <button id="testBtn" class="btn btn-primary">Clique-moi</button>
  </main>
</div>


  <!-- jQuery + Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#toggleSidebar').click(function () {
        $('#sidebar').toggleClass('show');
      });

      $('#testBtn').click(function () {
        alert("Bouton cliqué !");
      });
    });
  </script>

</body>
</html>
