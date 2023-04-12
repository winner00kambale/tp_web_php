<?php
// Carre
if(isset($_POST['cote'])){
    $cote=$_POST['cote'];
    $surface=$cote*$cote; 
    $perim=$cote*4;
    echo " <h3>La surface et le perimetre d'un carre </h3>";
    echo "<p>Cote : ".$cote."</p>";
    echo " <p>- la surface de ce carre est : ".$surface." </p> ";
    echo " <p>- le perimetre de ce carre est : ".$perim." </p> ";
}
// Rectangle
if(isset($_POST['long']) && isset($_POST['larg'])){
    $long=$_POST['long'];
    $larg=$_POST['larg'];
    $perimetre=($long+$larg)*2;
    echo " <h3>La surface et le perimetre du rectangle </h3>";
    echo "<p>Longueur : ".$long."</p>";
    echo "<p>Largeur : ".$larg."</p>";
    echo " <h4>- la surface de ce rectanlge est : ".$long*$larg." </h4> ";
    echo " <h4>- le perimetre de ce rectanlge est : ".$perimetre." </h4> ";
}
// Cercle
if(isset($_POST['pi']) && isset($_POST['rayon'])){
    $pi=$_POST['pi'];
    $rayon=$_POST['rayon'];
    echo " <h3>L'aire du cercle</h3>";
    echo "<p>PI : ".$pi."</p>";
    echo "<p>Rayon : ".$rayon."</p>";
    echo " <h4>- L'aire du cercle est de : ".($pi*($rayon*$rayon))."</h4>";
}
//La surface du triangle rectangle
if(isset($_POST['base']) && isset($_POST['hauteur'])){
    $base=$_POST['base'];
    $hateur=$_POST['hauteur'];
    echo " <h3>La surface du triangle rectangle</h3>";
    echo "<p>La base : ".$base."</p>";
    echo "<p>La hauteur : ".$hateur."</p>";
    echo " <h4>- La surface est de : ".(($base*$hateur)/2)."</h4>";    
}
    
?>




