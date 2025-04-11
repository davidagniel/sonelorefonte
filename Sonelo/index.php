<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <!-- Lien vers le CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="image/Favicon128x128.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
 
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .form-container img {
            width: 370px;
            margin-bottom: 5px;
        }

        .form-container h2 {
            margin-bottom: 20px;
        }

        .form-container .btn {
            width: 100%;
            margin-top: 10px;
        }

        .forgot-password {
            margin-top: 10px;
            font-size: 14px;
        }

        .forgot-password a {
            color: #007bff;
            text-decoration: none;
        }

        .input-group {
        max-width: 300px; /* Largeur totale du champ + bouton */
        margin: auto;     /* Centrer dans le conteneur */
    }
    #password {
        flex-grow: 1;     /* Permet à l'input de prendre l'espace disponible */
    }

    .input-group .btn {
        flex-shrink: 0; /* Empêche le bouton de se réduire */
    }
    </style>
</head>

<body>
    <div class="form-container mt-5">
        <img src="dashboard/image/PNG/Logo-PNG.png" alt="Logo" >
        <h2>Connexion</h2>
        <form id="loginForm">
            <div class="mb-3">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
            <label for="password" class="form-label visually-hidden">Mot de passe</label>
            <div class="input-group" style="max-width: 300px; margin: auto;">
        <input 
            type="password" 
            id="password" 
            name="password" 
            class="form-control" 
            placeholder="Mot de passe" 
            style="max-width:250px;"
            required>
        <button 
            type="button" 
            class="btn btn-outline-secondary" 
            id="toggle-password" 
            style="border-top-left-radius: 0; border-bottom-left-radius: 0;max-width:50px;">

            <i class="bi bi-eye-slash" id="password-icon"></i>
        </button>
    </div>
        </div>
            <div class="forgot-password">
                <a href="mdp_oublie.php">Mot de passe oublié ?</a>
            </div>
            <button type="submit" class="btn btn-success">Connecter</button>
        </form>
        <button class="btn btn-secondary mt-2" onclick="window.location.href='create_compte.php'">Créer un compte</button>
        <button class="btn btn-warning mt-2" onclick="window.location.href='reseau/index.php'">Tête de réseaux/Franchise</button>
    </div>

    <!-- Lien vers le JavaScript de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>

$(document).ready(function () {
      $('#toggle-password').on('mousedown', function () {
        $('#password').attr('type', 'text');
        $('#password-icon').removeClass('bi-eye-slash').addClass('bi-eye');
      });

      $('#toggle-password').on('mouseup mouseleave', function () {
        $('#password').attr('type', 'password');
        $('#password-icon').removeClass('bi-eye').addClass('bi-eye-slash');
      });
    });


  </script>
  </body>
  </html>