<div class="row">
<div class="d-none d-lg-block d-flex flex-row">
    <div class="row">
<div class="col-lg-3">
<select>
    <option value="">Certification</option>
    <option value="">DPE</option>
    <option value="">Amiante</option>
    <option value="">Plomb</option>

</select>
</div>
<div class="col-lg-3">
<select>
<option>Initiale</option>

<option>Renouvellement</option>
</select>
</div>
<div class="col-lg-3">
<input type="date">
</div>

<div class=" col-lg-3">

<button class="btn btn-primary">rechercher</button>
</div>
</div>
</div>




<!-- md-blok-->
<div class="d-md-none d-flex flex-row">
    <div class="row">
<div class="col-sm-6">
<select>
    <option value="">Certification</option>
    <option value="">DPE</option>
    <option value="">Amiante</option>
    <option value="">Plomb</option>

</select>
</div>
<div class="col-sm-6">
<select>
<option>Initiale</option>

<option>Renouvellement</option>
</select>
</div>
</div>
<div class="row">
<div class="col-sm-6">
    

<input type="date" value="<?= date("Y-m-d")?>">
</div>

<div class=" col-sm-6 p-2">

<button class="btn btn-primary">rechercher</button>
</div>
</div>

</div>

</div>






<div class="row">
<?php

if($_GET['id_certif']==''){?>
    <div class="col-lg-6">
        <?php } else{
            ?>
 <div class="col-lg-12">

       <?php  } ?>
    <div class="card p-4 ">

    <div class="card-header">
      <h2 class="card-title d-flex justify-content-start">Mes certifications</h2>
    </div>

    <div class="card-body">

       <div class="table-responsive ">
        <table class="table table-sm table-striped text-center">
          
            <tr>
              <td colspan=3><img src="image/ss4.svg" width="50" height="50" alt="ss4"></td>
            </tr>
<tr>
              <td>Certification</td><td colspan=2>Sous amiante 4</td>
</tr>
<tr>
              <td>Type</td><td colspan=2>initiale</td>
</tr>
<tr>
              <td>Date d'obtention</td> <td class="date-obtention" >10/10/2021</td> <td><button class="btn btn-dark btn-modifier">modifier</button></td>
</tr>
<tr>
              <td>Obligation de formation</td> <td   class="obligation bg-orange text-white" >10/10/2025</td>  <td><a href="#" class="text-dark search"><span data-feather="search"></span></a><button class="btn btn-success btn-ok">ok</button></td>
</tr>
<tr>
              <td>Fin de cycle</td>               <td colspan=2>09/10/2028</td>

              
            </tr>
          <tr>
                         <td colspan=3><a href="#" class="text-dark"><span data-feather="layers"></span></a></td>
            
        </tr>
<tr>
    <td colspan=3 >
        <button class="btn btn-danger">supprimer</button>
    </td>
</tr>

        </table>
      </div>
    </div> 
</div>
</div>
<?php

if($_GET['id_certif']==''){?>
<div class="col-lg-6">
    <div class="card p-4 ">

    <div class="card-header">
      <h2 class="card-title d-flex justify-content-start">Mes certifications</h2>
    </div>

    <div class="card-body">

       <div class="table-responsive ">
        <table class="table table-sm table-striped text-center">
         
        <tr>
              <td colspan=3><img src="image/ss4.svg" width="50" height="50" alt="ss4"></td>
            </tr>
<tr>
              <td>Certification</td><td colspan=2>Sous amiante 4</td>
</tr>
<tr>
              <td>Type</td><td colspan=2>initiale</td>
</tr>
<tr style="height:48.4px;">
              <td>Date d'obtention</td> <td>10/10/2020</td> <td></td>
</tr>
<tr>
              <td>Obligation de formation</td> <td class=" bg-danger text-white obligation" >10/10/2024</td>  <td><button class="btn btn-success btn-ok">ok</button></td>
</tr>
<tr>
              <td>Fin de cycle</td>               <td colspan=2>09/10/2027</td>

              
            </tr>
          <tr>
                         <td colspan=3><a href="#" class="text-dark"><span data-feather="layers"></span></a></td>
          
        </tr>
<tr style="height:48.4px;">
    <td colspan=3 >
       
    </td>
</tr>

        </table>
      </div>
    </div> 
</div>
</div>
<?php } ?>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
  // Pour le bouton modifier
  document.querySelectorAll(".btn-modifier").forEach(function (btn) {
    btn.addEventListener("click", function () {
      const td = btn.closest("tr").querySelector(".date-obtention");
      const oldText = td.textContent.trim();
      let defaultDate = "2025-01-01";

      // Essaye de convertir l'ancien texte en date
      const parts = oldText.split("/");
      if (parts.length === 3) {
        defaultDate = `${parts[2]}-${parts[1].padStart(2, '0')}-${parts[0].padStart(2, '0')}`;
      }
    
      td.innerHTML = `<input type="date" class="form-control" value="${defaultDate}">`;
    });
  });

  // Pour le bouton OK
  document.querySelectorAll(".btn-ok").forEach(function (btn) {
    btn.addEventListener("click", function () {
      const td = btn.closest("tr").querySelector(".obligation");
      td.classList.remove("bg-danger","bg-orange");
      td.classList.add("bg-primary", "text-white");
      btn.style.display = "none";
      const lien = td.querySelector("a");
    if (lien) {
      lien.style.display = "none";
    }
    });
  });
});
</script>