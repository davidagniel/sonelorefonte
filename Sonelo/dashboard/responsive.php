<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exemple Responsive Bootstrap</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MonSite</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
              data-bs-target="#navbarNav" aria-controls="navbarNav" 
              aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Accueil</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Section principale -->
  <div class="container my-5">
    <div class="row">
      <!-- Colonne gauche -->
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card shadow-sm h-100">
          <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Image">
          <div class="card-body">
            <h5 class="card-title">Carte 1</h5>
            <p class="card-text">Texte descriptif pour la première carte. Sur mobile, elle prend toute la largeur.</p>
          </div>
        </div>
      </div>

      <!-- Colonne milieu -->
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card shadow-sm h-100">
          <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Image">
          <div class="card-body">
            <h5 class="card-title">Carte 2</h5>
            <p class="card-text">Sur tablette, 2 colonnes s’affichent côte à côte. Sur PC, 3 colonnes.</p>
          </div>
        </div>
      </div>

      <!-- Colonne droite -->
      <div class="col-12 col-md-12 col-lg-4 mb-4">
        <div class="card shadow-sm h-100">
          <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Image">
          <div class="card-body">
            <h5 class="card-title">Carte 3</h5>
            <p class="card-text">Exemple de disposition responsive avec Bootstrap.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pied de page -->
  <footer class="bg-dark text-white text-center p-3">
    <p>&copy; 2025 - MonSite. Tous droits réservés.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>