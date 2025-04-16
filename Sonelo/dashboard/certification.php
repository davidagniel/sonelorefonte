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
              <td>Date d'obtention</td> <td>10/10/2021</td> <td><button class="btn btn-dark">modifier</button></td>
</tr>
<tr>
              <td>Obligation de formation</td> <td class="text-white" style="background-color:#fd7e14;">10/10/2025</td>  <td><a href="#" class="text-dark"><span data-feather="search"></span></a><button class="btn btn-success">ok</button></td>
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
<tr>
              <td>Date d'obtention</td> <td>10/10/2020</td> <td></td>
</tr>
<tr>
              <td>Obligation de formation</td> <td class="text-white bg-danger" >10/10/2024</td>  <td><button class="btn btn-success">ok</button></td>
</tr>
<tr>
              <td>Fin de cycle</td>               <td colspan=2>09/10/2027</td>

              
            </tr>
          <tr>
                         <td colspan=3><a href="#" class="text-dark"><span data-feather="layers"></span></a></td>
          
        </tr>
<tr>
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