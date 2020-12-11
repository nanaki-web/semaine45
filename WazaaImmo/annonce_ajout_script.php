<?php
require('connexion_bdd.php');
// require('annexes\original\redimensionner.php');
$db = connexionBase();
// declaration des variables
$typeOffre = $_POST["typeOffre"];
$nbreP = $_POST["nbreP"];
$reference = $_POST["reference"];
$titre = $_POST["titre"];
$description = $_POST["description"];
$localisation = $_POST["localisation"];
$surfaceHabitable = $_POST["surfaceHabitable"];
$surfaceTotal = $_POST["surfaceTotal"];
$prix = $_POST["prix"];
$diagnosticBouton = $_POST["diagnosticBouton"];
$photo = $_POST["photo"];
$dateAjout = $_POST["dateAjout"];

// var_dump($_POST);
var_dump($nbreP);
?>

<!-- ********************************* requête 1********************************************************************************************* -->
<!-- une entrée pour la table annonce -->
<?php
// preparation de la requete d'insertion sans injection sql
$pdoStat = $db -> prepare('INSERT INTO (an_offre,an_type,an_pieces,an_ref,an_titre,an_description,an_local,an_surf_hab,an_surf_tot,an_prix,an_diagnostic,an_d_ajout) annonces VALUES(NULL, :typeOffre, :nbreP; :reference, :titre, :descriptions , :localisation,  :surfaceHabitable, :surfaceTotale, :prix, :diagnosticBouton, :photo, :dateAjout)');

// on lie chaque marqueur à une valeur
$pdoStat ->bindvalue(' :typeOffre', $typeOffre, PDO::PARAM_STR);
$pdoStat ->bindvalue(' :nbreP', $nbreP, PDO::PARAM_STR );
$pdoStat ->bindvalue(' :reference', $reference, PDO::PARAM_STR);
$pdoStat ->bindvalue(' :titre', $titre, PDO::PARAM_STR);
$pdoStat ->bindvalue(' :descriptions', $description, PDO::PARAM_STR);
$pdoStat ->bindvalue(' :localisation', $localisation, PDO::PARAM_STR);
$pdoStat ->bindvalue(' :surfaceHabitable', $surfaceHabitable, PDO::PARAM_INT);
$pdoStat ->bindvalue(' :surfaceTotale', $surfaceTotal, PDO::PARAM_INT);
$pdoStat ->bindvalue(' :prix', $prix, PDO::PARAM_INT);
$pdoStat ->bindvalue(' :diagnosticBouton', $diagnosticBouton, PDO::PARAM_STR);
$pdoStat ->bindvalue(' :photo', $photo, PDO::PARAM_STR);
$pdoStat ->bindvalue(' :dateAjout', $dateAjout, PDO::PARAM_STR);

var_dump($db);
var_dump($_POST);
// éxécuter une requête préparée 

$insertIsOk = $pdoStat->execute();
// var_dump($pdoStat);
if($insertIsOk)
{
    $message = "le formulaire a été envoyé";
}
else
{
    $message = "échec de l'envoi ";
}

// var_dump($insertIsOk);
?>

<p><?php echo $message ?></p>