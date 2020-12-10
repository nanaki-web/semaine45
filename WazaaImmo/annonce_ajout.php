<?php
require('connexion_bdd.php');
// require('annexes\original\redimensionner.php');
$db = connexionBase();
include ("entete.php");
?>

<div class="row shadow mt-3 mb-3 mx-0 p-3 rounded bg-dark">
  <div class="col-md-2 text white-50 text-right"></div>
  <div class="col-md-8 h2 text-white-50 text-center">Ajouter une annonce</div>
</div>

<div class="form-group">
<!-- bouton radio achat/location/verger-->
    <div class="form-check form-check-inline">
        <label class="form-check-label" for="typeOffre">Achat </label>
        <input class="form-check-input" type="radio" name="typeOffre" id="typeOffre" value="1" >
    </div>
<!-- bouton radio produit bloqué/non /valeur=Null-->
    <div class="form-check form-check-inline">
        <label class="form-check-label" for="typeOffre" >Location</label>
        <input class="form-check-input" type="typeOffre" name="typeOffre" id="bloque" value="Null" checked  >
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label" for="typeOffre" >Location</label>
        <input class="form-check-input" type="typeOffre" name="typeOffre" id="bloque" value="Null" checked  >
    </div>
</div>