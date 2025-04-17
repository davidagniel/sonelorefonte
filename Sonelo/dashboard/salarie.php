<div class="row">

<div class="card">
                    <div class="card-header">
                    <h3 class="card-title" style="display:flex;"> Voir mes salariés  </h3> </div>
                    <div class="card-body">
                    <table class='table table-striped table-responsive fixed-table' id="tablesalarieview" style="text-align:center;">
                        <thead>
                            <tr>
                                <th>prénom</th>
                                <th>nom</th>
                                <th>date d'embauche</th>
                                <th>email</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                              
                            </tr>
                        </thead> 
                            <tbody>
                                                                    <tr>
                                        <td><input type="hidden" id="type" value =""><input type="hidden" id="societe" value ="archos"><input type="hidden" id="nom" value ="agniel"> <input type="hidden" id="prenom" value ="Elise"><input type="hidden" id="email" value ="eliseagniel@gmail.com"><input type="hidden" id="id_salarie" value ="29">Elise</td>
                                        <td>agniel</td>
                                        <td>2020-10-10</td>
                                        <td>eliseagniel@gmail.com</td>
                                        <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#29">ajouter Certification<br>habilitation</button>
                
                <!-- Modale -->
                <div class="modal fade" id="29" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajout Certification<br>habilitation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
 
       <div id="ajout_certif_salarie_29">
<div class="mb-3">
    <input type="hidden" id="id_compte_salarie_29" value ="29">
<label for="certification_29" class="form-label">Certification/habilitation</label>
<select class="form-select" id="certification_29" name="certification"  onchange="certification(29)" required>
   <option value="">Sélectionnez une certification/habilitation</option>
     
   <option value="Diagnostic DPE sans mention" >Diagnostic DPE sans mention</option>
    
   <option value="Diagnostic DPE avec mention" >Diagnostic DPE avec mention</option>
    
   <option value="Diagnostic Gaz" >Diagnostic Gaz</option>
    
   <option value="Diagnostic Electricité" >Diagnostic Electricité</option>
    
   <option value="Diagnostic Termites" >Diagnostic Termites</option>
    
   <option value="Diagnostic Amiante sans mention" >Diagnostic Amiante sans mention</option>
    
   <option value="Diagnostic Amiante avec mention" >Diagnostic Amiante avec mention</option>
    
   <option value="Diagnostic Plomb" >Diagnostic Plomb</option>
    
   <option value="Habilitation Electricité" >Habilitation Electricité</option>
    
   <option value="PCR (Personne Compétente en Radioprotection)" >PCR (Personne Compétente en Radioprotection)</option>
    
   <option value="Risque Amiante Sous-Section IV" >Risque Amiante Sous-Section IV</option>
    
   <option value="Audit Energitique" >Audit Energitique</option>
 </select>
</div>

<div class="mb-3" id='typecertif_29' style="display:none;" >
<label class="form-label">type</label>
<input type="radio"  id="type1_29" name="type" class="type" onclick="typedpe(29)" > Initiale
<input type="radio"  id="type2_29" name="type" class="type"  onclick="typedpe(29)"> Renouvellement
</div>
<div class="mb-3">
<label for="dateObtention_29" class="form-label">Date d'obtention</label>
<input type="date" class="form-control" id="dateObtention_29" name="dateObtention"  onchange="dateobt(29)"required>
</div>
<button type="button" class="btn btn-primary"  id="soumettre_29" onclick="insert(29)">Soumettre</button>
  </div>
  </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                       
                      </div>
                    </div>
                  </div>
                </div></td>
                                        <td><a class="btn btn-success" href="dashboard_standard.php?page=view_certif_salarie&id=29">voir Certification<br>habilitation</a></td>
                                      <td>

                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#att29">ajouter attestation</button>
                
                <!-- Modale -->
                <div class="modal fade" id="att29" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajout Certification</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
 

                      
<div >
   
        <div class="card">
<div class="card-header">
<h3 class="card-title" style="display:flex;"> <div style="width:10%;"><img src="image/Logo-S-rouge-png.png" width="100" height="100"></div><div style="width:90%;display:flex;align-items: center; justify-content: center;">Ajouter mes attestations de formation </div> </h3>       </div>
        <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
                <label for="certif" class="form-label">Choisissez la certification concernée</label>
                <select id="certif" name="certif" class="form-select"  required>
                    <option value="">Sélectionner une certification</option>
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
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                       
                      </div>
                    </div>
                  </div>
                </div>


                                      </td>
                                          <td>
                                            
                                          <button class="btn btn-light" id="mail">envoi du mail</button>

                                                                                    </td>
                                        <td><button class="btn btn-danger" id="supprim" data-ligne="Elise agniel">supprimer</button></td>
                                    </tr>


                                                                </tboby>
                
                
                    </table>
                    </div>
                </div>
</div>                            </div>

