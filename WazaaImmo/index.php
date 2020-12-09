<?php
    include ("entete.php");
?>
<style>
    .flotte {
float:left;
}
</style>
<section>
<!-- ********annonce1 ********-->
<section>
<div class = "container">
    <div class="flotte">
        <img src = "annexes/redimensionner/1-1.jpg">
        <p localisation :></p>
    </div>
<?php
    require('connexion_bdd.php');
    $db = connexionBase();
    $requete = "select * FROM annonces ";
    $result = $db->query($requete);
echo "<div>";   
while($annonces = $result->fetch(PDO::FETCH_OBJ))   
{
    echo "Titre  :". $annonces ->an_titre."<br>";
    echo "Localisation :". $annonces ->an_local."<br>";
    echo "Prix :". $annonces ->an_prix."Euros"."<br>";
} 
echo "</div>";
?>
<section>
<!-- //    ********<annonce2>********** -->
<div class = "container">
    <div class = "flotte">
        <img src = "annexes/redimensionner/2-1.jpg">
    </div>
<?php
    
    $db = connexionBase();
    $requete = "select * FROM annonces ";
    $result = $db->query($requete);

echo "<div>";     
while($annonces = $result->fetch(PDO::FETCH_OBJ))   
{
    echo "Titre  :". $annonces ->an_titre."<br>";
    echo "Localisation :". $annonces ->an_local."<br>";
    echo "Prix :". $annonces ->an_prix."Euros"."<br>";
} 
echo "</div>";   
?>
<!-- ******* annonce3******** -->
<div class = "container">
    <div>
        <img src = "annexes/redimensionner/3-1.jpg">
        <p localisation :></p>
    </div>
<?php
    
    $db = connexionBase();
    $requete = "select * FROM annonces ";
    $result = $db->query($requete);
    echo "<div>";   
while($annonces = $result->fetch(PDO::FETCH_OBJ))   
{
    echo "Titre  :". $annonces ->an_titre."<br>";
    echo "Localisation :". $annonces ->an_local."<br>";
    echo "Prix :". $annonces ->an_prix."Euros"."<br>";
} 
echo "</div>"; 
?>
<!-- ******** annonce4 *********************************-->
<div class = "container">
    <div>
        <img src = "annexes/redimensionner/4-1.jpg">
        <p localisation :></p>
    </div>
<?php
    
    $db = connexionBase();
    $requete = "select * FROM annonces ";
    $result = $db->query($requete);
echo "<div>";    
while($annonces = $result->fetch(PDO::FETCH_OBJ))   
{
    echo "Titre  :". $annonces ->an_titre."<br>";
    echo "Localisation :". $annonces ->an_local."<br>";
    echo "Prix :". $annonces ->an_prix."Euros"."<br>";
} 
echo "<div>"; 
?>
<!-- ******** annonce5************************************* -->
<div class = "container">
    <div>
        <img src = "annexes/redimensionner/5-1.jpg">
        <p localisation :></p>
    </div>
<?php
    
    $db = connexionBase();
    $requete = "select * FROM annonces ";
    $result = $db->query($requete);
echo "<div>";  
while($annonces = $result->fetch(PDO::FETCH_OBJ))   
{
    echo "Titre  :". $annonces ->an_titre."<br>";
    echo "Localisation :". $annonces ->an_local."<br>";
    echo "Prix :". $annonces ->an_prix."Euros"."<br>";    
} 

?>
<!-- ******** annonce6************************************* -->
<div class = "container">
    <div>
        <img src = "annexes/redimensionner/6-1.jpg">
        <p localisation :></p>
    </div>
<?php
    
    $db = connexionBase();
    $requete = "select * FROM annonces ";
    $result = $db->query($requete);

echo "<div>";     
while($annonces = $result->fetch(PDO::FETCH_OBJ))   
{
    echo "Titre  :". $annonces ->an_titre."<br>";
    echo "Localisation :". $annonces ->an_local."<br>";
    echo "Prix :". $annonces ->an_prix."Euros"."<br>";
} 
echo "</div>";
?>

<!-- ******** annonce7************************************* -->
<div class = "container">
    <div>
        <img src = "annexes/redimensionner/7-1.jpg">
        <p localisation :></p>
    </div>
<?php
    
    $db = connexionBase();
    $requete = "select * FROM annonces ";
    $result = $db->query($requete);
echo "<div>";   
while($annonces = $result->fetch(PDO::FETCH_OBJ))   
{
    echo "Titre  :". $annonces ->an_titre."<br>";
    echo "Localisation :". $annonces ->an_local."<br>";
    echo "Prix :". $annonces ->an_prix."Euros"."<br>";
} 
echo "</div>"; 


?>
<!-- ******** annonce8************************************* -->
<div class = "container">
    <div>
        <img src = "annexes/redimensionner/8-1.jpg">
        <p localisation :></p>
    </div>
<?php
    
    $db = connexionBase();
    $requete = "select * FROM annonces ";
    $result = $db->query($requete);
echo "<div>";     
while($annonces = $result->fetch(PDO::FETCH_OBJ))   
{
    echo "Titre  :". $annonces ->an_titre."<br>";
    echo "Localisation :". $annonces ->an_local."<br>";
    echo "Prix :". $annonces ->an_prix."Euros"."<br>";
} 
echo "</div>"; 
?>

<!-- ******** annonce9************************************* -->
<div class = "container">
    <div>
        <img src = "annexes/redimensionner/8-1.jpg">
        <p localisation :></p>
    </div>
<?php
    
    $db = connexionBase();
    $requete = "select * FROM annonces ";
    $result = $db->query($requete);
echo "<div>";    
while($annonces = $result->fetch(PDO::FETCH_OBJ))   
{
    echo "Titre  :". $annonces ->an_titre."<br>";
    echo "Localisation :". $annonces ->an_local."<br>";
    echo "Prix :". $annonces ->an_prix."Euros"."<br>";
} 
echo "</div>"; 
?>
<!-- ******** annonce10************************************* -->
<div class = "container">
    <div>
        <img src = "annexes/redimensionner/10-1.jpg">
        <p localisation :></p>
    </div>
<?php
    
    $db = connexionBase();
    $requete = "select * FROM annonces ";
    $result = $db->query($requete);
echo "<div>";     
while($annonces = $result->fetch(PDO::FETCH_OBJ))   
{
    echo "Titre  :". $annonces ->an_titre."<br>";
    echo "Localisation :". $annonces ->an_local."<br>";
    echo "Prix :". $annonces ->an_prix."Euros"."<br>";
} 
echo "</div>"; 
?>
</div>
</section>
               
 <?php
    include ("pieddepage.php");
 ?>

    













