<div class="row">
<div class="card p-4">
<div class="card-header">
<h3 class="card-title" style="display:flex;"> Ajouter mes attestations de formation  </h3>   
    </div>
        <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
                <label for="certif" class="form-label">Choisissez la certification concernée</label>
                <select id="certif" name="certif" class="form-select"  required>
                    <option value="">Sélectionner une certification</option>
                     
                          <option value="6">Diagnostic DPE sans mention - Initiale</option>

                                               <option value="8">Diagnostic Gaz</option>
                                                <option value="14">Habilitation Electricité</option>
                                        </select>
            </div>
            
           

            <div class="mb-3">
                <label for="dateobtention" class="form-label">Date de réalisation de formation</label>
                <input type="date" class="form-control" id="dateobtention" name="dateobtention" required>
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">choisissez votre attestation  ( en PDF et poids maximal 2Mo)</label>
                <input type="file" class="form-control" id="file" name="file">
            </div>
            <button type="submit" class="btn btn-primary">envoyer</button>
        </form>
                    </div>
    </div>
                    </div>
            </div>