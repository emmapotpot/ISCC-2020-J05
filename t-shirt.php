<?php
$nom_produit="T-shirt simple";
$couleur="Blanc";
$prix= 10.50;
$disponible= true;
$quantite= 10;

echo "<h3>".$nom_produit."<h3>";
echo "<p>Le nom du produit est".$nom_produit."<p>"
echo "<p>Il reste".$quantite."<p>";

echo "<p>Acheter 3 produits coûterait".$prix*3."<p>";
?>