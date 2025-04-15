<div class="row">
<div class="card p-4">
                    <div class="card-header">
                    <h2 class="card-title justify-content-start d-flex"> Profil Utilisateur  </h2>    </div>
                    
                    <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                    
                            <div>photo de profil</div>
                            <div><img src="<?=$result['photo'] != null || $result['photo'] != '' ? $result['photo'] : "image/image_profil.png" ?>" width="50" height="50"></div>
                             <div>photo de la societe</div>
                            <div ><img  class="mini-img" src="<?=$result['photo_societe'] != null || $result['photo_societe'] != '' ? $result['photo_societe'] : "image/image_societe.png" ?>" width="200" height="100"></div>
                            
                        </div>
                            
                        <div class="col-8" id="compte">
                    <form  method="post" action="" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nom" class="form-label">nom</label>
                                <input type="text" class="form-control" id="nom" value="<?=$result['nom']?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="prenom" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="prenom" value="<?=$result['prenom']?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="tel" class="form-label">téléphone</label>
                                <input type="text" class="form-control" id="tel" name="tel" value="<?=$result['tel']?>" >
                            </div>
                            <div class="mb-3">
                                <label for="societe" class="form-label">Société</label>
                                <input type="text" class="form-control" id="societe" value="<?=$result['societe']?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="adresse" class="form-label">Adresse</label>
                                <input type="text" class="form-control" id="adresse" name="adresse" value="<?=$result['adresse']?>" >
                            </div>
                            <div class="mb-3">
                                <label for="cp" class="form-label">Code Postal</label>
                                <input type="text" class="form-control" id="cp" name="cp" value="<?=$result['cp']?>" >
                            </div>
                            <div class="mb-3">
                                <label for="ville" class="form-label">Ville</label>
                                <input type="text" class="form-control" id="ville" name="ville" value="<?=$result['ville']?>" >
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?=$result['email']?>" >
                            </div>
                                    
<div class="form-check form-switch mb-3">
            <label class="form-check-label" for="smsalerte">voulez vous être alerté par sms </label>
  <input class="form-check-input" type="checkbox" role="switch" id="smsalerte" value="ok" name="smsalerte" <?= $result['alertesms']=='1' ? 'checked' : '' ?>>
  
</div>
                            <div class="mb-3">
                                <label for="profil" class="form-label">photo de profil (50px X 50px)</label>
                                <input type="file" class="form-control" id="profil" name="profil">
                            </div>
                            <div class="mb-3">
                                <label for="photo_societe" class="form-label">photo de la société (200px X 100px)</label>
                                <input type="file" class="form-control" id="photo_societe" name="photo_societe" >
                            </div>
                            <div class="d-grid">
                            <button type="submit" class="btn btn-primary" name="submit" >modifier le compte</button>
                        </div>
                           
                        </form>
                        <div class="d-grid">
                            <button type="button" class="btn btn-danger" id="supprimcompte">supprimer le compte</button>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
     