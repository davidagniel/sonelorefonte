<div class="row">

<div class="card p-4">
                    <div class="card-header">
                    <h2 class="card-title" style="display:flex;"> Ajouter mes certifications/mes habilitations  </h2> </div>
                    <div class="card-body">
                    <div id="ajout_certif">
        <div class="mb-3">
            <label for="certification" class="form-label">Certification/Habilitation</label>
            <select class="form-select" id="certification" name="certification" required>
           
    <option value="">DPE</option>
    <option value="">Amiante</option>
    <option value="">Plomb</option>
    <option><hr></option>
   
    <option value="">electricite</option>
    <option value="">audit</option>

            </select>
        </div>
        
        <div class="mb-3" id="typecertif" style="<?=$style?>">
            <label class="form-label">type</label>
            <input type="radio"  id="type1" name="type" class="type" <?=$_GET['type']=='Initiale'? "checked value='Initiale'":'checked' ?> <?= $_GET['type']=='Renouvellement' && $_GET['idcertif']=='Audit Energitique'? "checked value='Initiale'":'checked' ?>> Initiale
            <input type="radio"  id="type2" name="type" class="type" <?=$_GET['type']=='Renouvellement' && $_GET['idcertif']!='Audit Energitique'? "checked value='Renouvellement'":'' ?> > Renouvellement
        </div>
        <div class="mb-3" id="dateob" >
            <label for="dateObtention" class="form-label">Date d'obtention</label>
            <input type="date" class="form-control" id="dateObtention" name="dateObtention" required>
        </div>
        <button  class="btn btn-primary"  id="verif">valider</button>
        <button  class="btn btn-primary"  id="insert" style="display:none;">soumettre</button>
               </div>
                    </div>
                </div>
               </div>