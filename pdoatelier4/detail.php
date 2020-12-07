<!DOCTYPE html>
<html lang="fr">
<head>
 <!-- Required meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Atelier PHP N°4 - page de détail</title>
<?php   
  require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions

  $db = connexionBase(); // Appel de la fonction de connexion
  $pro_id = $_GET["pro_id"];
  $requete = "SELECT * FROM produits WHERE pro_id=".$pro_id;

  $result = $db->query($requete);

// Renvoi de l'enregistrement sous forme d'un objet
  $produit = $result->fetch(PDO::FETCH_OBJ);
?>

</head>
<body>
 <!--navigation  -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Jarditou.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tableau.php">Mon compte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>                    
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
  </div>
</nav>

<!-- reference / pour info disabled -->
<div class="form-group">
  <label for="reference">Référence :</label>                  
   <input type="text" name="reference" class="form-control" id="nom" disabled placeholder="<?php echo $produit->pro_ref ?>" >           
</div>
<!-- catégorie -->
<div class="form-group">
  <label for="reference">Catégorie :</label>                  
  <input type="text" name="categorie" class="form-control" id="nom" disabled placeholder="<?php echo $categorie->cat_nom."manu" ?>" >           
</div>
<!-- libéllé -->
<div class="form-group">
    <label for="reference">Libellé :</label>                  
    <input type="text" name="libelle" class="form-control" id="nom"  disabled placeholder="<?php echo $produit->pro_libelle ?>" >           
</div>
<!-- description -->
<div class="form-group"></div>
  <label for="sujet">Description:</label>
  <textarea class="form-control" id="sujet" rows="2" disabled placeholder="<?php echo $produit->pro_description ?>" ></textarea>
</div>
<?php

// echo '<div class="row">';
 echo '<div class=" col-12" >';
?>
<!-- prix -->
<div class="form-group">
  <label for="reference">Prix :</label>                  
  <input type="text" name="prix" class="form-control" id="nom"  disabled placeholder="<?php echo $produit->pro_prix ?>" >          
</div>
<!-- stock -->
<div class="form-group">
  <label for="reference">stock :</label>                  
  <input type="text" name="stock" class="form-control" id="nom"  disabled placeholder="<?php echo $produit->pro_stock ?>" >           
</div>
<!-- couleur -->
<div class="form-group">
  <label for="reference">Couleur :</label>                  
  <input type="text" name="couleur" class="form-control" id="nom" disabled placeholder="<?php echo $produit->pro_couleur ?>" >           
</div>
<!--  -->
<div class="form-group">
<p>Produit bloqué :</p>
<fieldset class="form-group">
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="produit_bloque"  disabled id="produit_bloque" value="oui" <?php  if ($produit->pro_bloque==1){ echo "checked";} ?> >

    <label class="form-check-label" for="inlineRadio1">Oui </label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="produit_bloque"  disabled id="produit_bloque" value="non" <?php  if ($produit->pro_bloque==null){ echo "checked";} ?> >
    <label class="form-check-label" for="inlineRadio2">Non</label>      
  </div>
<!-- date d'ajout -->
<div class="form-group">
  <label for="reference">Date d'ajout :</label>                  
  <input type="text" name="Date_d_ajout" class="form-control" id="date"  disabled placeholder="<?php echo $produit->pro_d_ajout ?>" >           
</div>
<!-- date de modification -->
<div class="form-group">
  <label for="reference">Date de modification :</label>                  
  <input type="text" name="Date_de_modification" class="form-control" id="date"  disabled placeholder="<?php echo $produit->pro_d_modif ?>" >           
</div>




 


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
   </body>
 </html>