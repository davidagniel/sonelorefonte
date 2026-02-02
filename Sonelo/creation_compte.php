<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <title>Création de compte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
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

<div class="container px-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6">

            <div class="card p-4 shadow-sm">
                <h3 class="text-center mb-4">Créer un compte</h3>

                <form id="registerForm" enctype="multipart/form-data">

                    <!-- AVATAR -->
                    <div class="mb-4 text-center">
                        <img id="avatarPreview" src="https://via.placeholder.com/120"
                             class="avatar-preview mb-2">
                        <input type="file"
                               class="form-control"
                               name="avatar"
                               accept="image/*"
                               onchange="previewImage(event, 'avatarPreview')">
                    </div>

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label">Prénom *</label>
                            <input type="text" class="form-control" name="prenom" required>
                            <div class="invalid-feedback">Champ obligatoire</div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Nom *</label>
                            <input type="text" class="form-control" name="nom" required>
                            <div class="invalid-feedback">Champ obligatoire</div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Téléphone</label>
                            <input type="tel" class="form-control" name="telephone" id="telephone">
                            <div class="invalid-feedback">
                                Numéro invalide (06 ou 07 + 10 chiffres)
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email *</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                            <div class="invalid-feedback">
                                Cet email est déjà utilisé
                            </div>
                        </div>

                        <!-- MOT DE PASSE -->
                        <div class="col-md-6">
                            <label class="form-label">Mot de passe *</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" id="password" required>
                                <button class="btn btn-outline-secondary" type="button"
                                        onclick="togglePassword('password', this)">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <div class="invalid-feedback">
                                    12 caractères minimum, une majuscule, minuscule, chiffre et caractère spécial
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Confirmation *</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password_confirm" id="passwordConfirm" required>
                                <button class="btn btn-outline-secondary" type="button"
                                        onclick="togglePassword('passwordConfirm', this)">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <div class="invalid-feedback">
                                    Les mots de passe ne correspondent pas
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Adresse</label>
                            <input type="text" class="form-control" name="adresse">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Code postal</label>
                            <input type="text" class="form-control" name="cp">
                        </div>

                        <div class="col-md-8">
                            <label class="form-label">Ville</label>
                            <input type="text" class="form-control" name="ville">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Société</label>
                            <input type="text" class="form-control" name="societe">
                        </div>

                        <!-- LOGO SOCIETE -->
                        <div class="col-12">
                            <label class="form-label">Logo société</label>
                            <input type="file"
                                   class="form-control"
                                   name="company"
                                   accept="image/*"
                                   onchange="previewImage(event, 'companyPreview')">
                            <img id="companyPreview" class="company-preview mt-2">
                        </div>

                        <!-- SWITCH SMS -->
                        <div class="col-12">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sms" id="smsSwitch">
                                <label class="form-check-label" for="smsSwitch">
                                    Recevoir des SMS
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-success w-100">
                            Créer le compte
                        </button>
                    </div>

                    <div class="text-center mt-3">
                        <a href="login.php" class="link-secondary">
                            Déjà un compte ? Se connecter
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/inscription.js"></script>
<script>
    /* === IMAGE PREVIEW === */
    function previewImage(event, id) {
        const reader = new FileReader();
        reader.onload = () => document.getElementById(id).src = reader.result;
        reader.readAsDataURL(event.target.files[0]);
    }

    
</script>

</body>
</html>
