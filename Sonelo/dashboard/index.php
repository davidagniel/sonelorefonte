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
     background-color: #f0f0f0;
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
   .btmenu{
    background-color:#D9D9D9;
   }
  </style>
</head>
<body>

<nav class="navbar navbar-secondary bg-secondary d-md-none">
    <div class="container-fluid">
      
      <button class="btn btn-light" id="toggleSidebar">
        ☰
      </button>
  
      <span class="navbar-brand mb-1 h1 ms-auto"> <img src="image/AlerteCertif-accueil.png" width="150" height="50" alt="logo"/></span>
      <div class="row align-items-center">
  <!-- Premier span centré -->
  <div class="col-6 text-center">
    <span class="navbar-brand mb-0 h1">
      <img src="image/image_societe.png" width="150" height="70" alt="societe">
    </span>
  </div>

  <!-- Deuxième span à droite -->
  <div class="col-6 d-flex justify-content-end align-items-center">
  
    <a href="#">
      <img src="image/image_profil.png" width="50" height="50" alt="profil">
    </a>
  
</div>
</div>
    </div>
  </nav>

  <div class="wrapper">
  <!-- Sidebar -->
  <nav id="sidebar" class="d-md-block bg-secondary text-dark p-3">
 
    <div class="accordion" id="accordionExample">

<!-- accueil -->

        <div class="accordion-item">
             <h2 class="accordion-header" id="heading">
         
            <a class="nav-link accordion-button collapsed text-dark btmenu"  href="dashboard.php?page=accueil"><span data-feather="tablet"></span>accueil</a>
         
            </h2>
      
     
         </div>
 <!-- Profil Section -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed btmenu" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span data-feather="user"></span> <span style="color:#c90e0e;"> Profil</span>
                            </button>
                        </h2>
                        
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="background-color:#c90e0e;color:white;">
                                <ul class="list-unstyled">
                                    <li><a class="nav-link active" href="<?=$_SESSION['url']?>modif_profil&style=c90e0e">Modifier Profil</a></li>
                                  </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Certification Section -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button  class="accordion-button collapsed btmenu" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span data-feather="layers"></span> <span style="color:#6ce364;">Mes certifications<br>Habilitations</span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="background-color:#6ce364;color:white;">
                                <ul class="list-unstyled">
                                <li><a class="nav-link active" href="<?=$_SESSION['url']?>view_certif2&style=6ce364">Voir mes Certifications<br>Habilitations</a></li>
                                 
                                <li><a class="nav-link active" href="<?=$_SESSION['url']?>ajout_certif&style=6ce364">Ajouter Certification<br>habilitation</a></li>
                                 </ul>
                            </div>
                        </div>
                    </div>
                   
                    <!-- Coffre-fort Section -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed btmenu" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span data-feather="archive"></span> <span style="color:#e08b3a;">Mon coffre-fort </span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="background-color:#e08b3a;color:white;">
                                <ul class="list-unstyled">
                                    <li><a class="nav-link active" href="<?=$_SESSION['url']?>voir_pdf&style=e08b3a">Voir mes attestations</a></li>
                                    <li><a class="nav-link active" href="<?=$_SESSION['url']?>ajout_pdf&style=e08b3a">Ajouter mes attestations</a></li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                     <!-- salarie Section -->
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed btmenu" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                <span data-feather="users"></span> <span style="color:#679bf0;">Mes salariés</span>
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="background-color:#679bf0;color:white;">
                                <ul class="list-unstyled">
                                <li><a class="nav-link active" href="<?=$_SESSION['url']?>view_salarie&style=679bf0">Voir les salariés</a></li>
                                 
                                <li><a class="nav-link active" href="<?=$_SESSION['url']?>ajout_salarie&style=679bf0">Ajouter salariés</a></li>
                                       
                            </ul>
                            </div>
                        </div>
                    </div>
                    <!-- contact Section -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading">
                           
                              <a class="nav-link text-dark accordion-button collapsed"  href="<?=$_SESSION['url']?>contact"><span data-feather="phone"></span>Contact</a>
                           
                        </h2>
                        
                       
                    </div>

                     <!-- formation Section -->
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed btmenu" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                <span data-feather="book"></span> <span style="">Formations</span>
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-warning text-warning" >
                                <ul class="list-unstyled">
                                <li><a class="nav-link active" href="<?=$_SESSION['url']?>view_formation_initiale">Formation initiale</a></li>
                                 
                                <li><a class="nav-link active" href="<?=$_SESSION['url']?>view_formation_continue">Formation continue/e-larning</a></li>
                                       
                            </ul>
                            </div>
                        </div>
                    </div>
                    <a href="deconnexion.php">Déconnexion</a>
                
            </div>

  </nav>

  <!-- Main content -->
  <main class="flex-grow-1 p-4">
<div class="d-none d-lg-block bg-secondary ">
<div class="row align-items-center">

<div class="col-lg-4">
<img src="image/AlerteCertif-accueil.png" width="250" height="100" alt="logo"/>
  </div>

  <div class="col-lg-4">
<img src="image/image_societe.png" width="200" height="100" alt="logo"/>
  </div>

  <div class="col-lg-4 ms-auto">
<a href="#"><img src="image/image_profil.png" width="50" height="50" alt="logo"/></a>
  </div>
  </div>

<div class="row">

<h1 class="text-white text-center">Bienvenue sur votre plateforme de suivi de certification</h1>
  </div>
  </div>

  <?php
  include('acceuil.php');
  ?>


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
