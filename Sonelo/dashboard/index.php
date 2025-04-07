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
      min-height: 100vh;
      display: flex;
    }
    #sidebar {
      min-width: 200px;
      max-width: 250px;
    }
    @media (max-width: 768px) {
      body {
        flex-direction: column;
      }
      #sidebar {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <nav id="sidebar" class="bg-secondary text-dark p-3">
    <img src="image/Logo-fond-Gris-100" width="50" height="50" alt="logo"/>
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

  <!-- jQuery + Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#testBtn').click(function() {
        alert("Bouton cliqué !");
      });
    });
  </script>

</body>
</html>
