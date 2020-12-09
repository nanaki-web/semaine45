<div class ="container">
<!-- ***************************************************************caroussel********************************************************************************* -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-50 image-fluid"  src="annexes/photos/annonce_1/1-1.jpg" alt="First slide">>
        
    </div>
    <div class="carousel-item">
      <img class="d-block w-50 image-fluid" src="annexes/photos/annonce_1/1-2.jpg" alt="Second slide">
        
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="col-12 col-md-12" >
<!-- ***********************************************requete******************************************************************************************** -->
<?php
require('connexion_bdd.php');
$bd = connecxionBase();
$requete = select * FROM annonces
?>
<!-- *****************************************************formulaire********************************************************* -->
<form action="" method="POST" id= "contact">
<!-- offre -->
<div class="form-group">
<div class="mb-3">
  <label for="offre" class="form-label">Offre</label>
  <input type="text" class="form-control" id="offre" name="offre" placeholder="">
</div>
</div>
<!-- type de bien -->
<div class="form-group">
<label for="type" class="form-label">Type de bien</label>
<input type="text" class="form-control" id="type" name="type" placeholder="">
</div>
<!--Nombre de pièces  -->
<div class="form-group">
<label for="piece" class="form-label">Nombre de pièces</label>
<input type="text" class="form-control" id="piece" name="piece" placeholder="">
</div>
<!--Référence  -->
<div class="form-group">
<label for="ref" class="form-label">Référence</label>
<input type="text" class="form-control" id="ref" name="ref" placeholder="">
</div>
<!--Titre  -->
<div class="form-group">
<label for="titre" class="form-label">Titre</label>
<input type="text" class="form-control" id="titre" name="titre" placeholder="">
</div>
<!--Description -->
<div class="form-group">
<label for="Descript" class="form-label">Description</label>
<input type="text" class="form-control" id="descript" name="descript" placeholder="">
</div>
<!--Localisation -->
<div class="form-group">
<label for="localisation" class="form-label">Localisation</label>
<input type="text" class="form-control" id="localisation" name="localisation" placeholder="">
</div>
<!--surface habitable -->
<div class="form-group">
<label for="habitable" class="form-label">Surface habitable</label>
<input type="text" class="form-control" id="habitable" name="habitable" placeholder="">
</div>
<!--Surface Total -->
<div class="form-group">
<label for="total" class="form-label">Surface Total</label>
<input type="text" class="form-control" id="total" name="total" placeholder="">
</div>
<!-- Prix -->
<div class="form-group">
<label for="prix" class="form-label">Prix</label>
<input type="text" class="form-control" id="prix" name="prix" placeholder="">
</div>
<!-- diagnotique -->
<div class="form-group">
<label for="diagnos" class="form-label">Diagnostique</label>
<input type="text" class="form-control" id="diagnos" name="diagnos" placeholder="">
</div>
<!-- Date d'ajout -->
<div class="form-group">
<label for="date_ajout" class="form-label">Date d'ajout</label>
<input type="text" class="form-control" id="date_ajout" name="date_ajout" placeholder="">
</div>



</div>
</div>
</form>