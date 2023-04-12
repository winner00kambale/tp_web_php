<?php
//moyenne 
$moyenne=null;
if(isset($_POST['fr']) && isset($_POST['en'])&& isset($_POST['math'])&& isset($_POST['phy'])&& isset($_POST['stat'])){
$fr=$_POST['fr'];
$en=$_POST['en'];
$math=$_POST['math'];
$phy=$_POST['phy'];
$stat=$_POST['stat'];
$moyenne= ($fr+$en+$math+$phy+$stat)/5;
// echo $moyenne;
}
$surface=null;$perim=null;$cote=null;
if(isset($_POST['cote'])){
  $cote=$_POST['cote'];
  $surface=$cote*$cote; 
  $perim=$cote*4;
}
$long=null;$larg=null;$perimetreR=null;$surfaceR=null;
// Rectangle
if(isset($_POST['long']) && isset($_POST['larg'])){
  $long=$_POST['long'];
  $larg=$_POST['larg'];
  $surfaceR=$long*$larg;
  $perimetreR=($long+$larg)*2;
}
$pi=null;$rayon=null;$aire=null;
// Cercle
if(isset($_POST['pi']) && isset($_POST['rayon'])){
  $pi=$_POST['pi'];
  $rayon=$_POST['rayon'];
  $aire=($pi*($rayon*$rayon));
}
$base=null;$hateur=null;$surf=null;
//La surface du triangle rectangle
if(isset($_POST['base']) && isset($_POST['hauteur'])){
  $base=$_POST['base'];
  $hateur=$_POST['hauteur'];
  $surf=(($base*$hateur)/2);    
}
$res=null;
if(isset($_POST['jour'])){
  
  function translate(){
    $lang = null;
    $jour=$_POST['jour'];
    if($jour=='lundi' OR $jour=='lundi' ){
      $lang='monday';
      return $lang;
    }else if($jour=='mardi' OR $jour=='MARDI'){
      $lang='tuesday';
      return $lang;
    }else if($jour=='mercredi' OR $jour=='MERCREDI'){
      $lang='wednesday';
      return $lang;
    }else if($jour=='jeudi' OR $jour=='JEUDI'){
      $lang='thursday';
      return $lang;
    }else if($jour=='vendredi' OR $jour=='VENDREDI'){
      $lang='friday';
      return $lang;
    }else if($jour=='samedi' OR $jour=='SAMEDI'){
      $lang='saturday';
      return $lang;
    }else if($jour=='DIMANCHE' OR $jour=='dimanche'){
      $lang='sunday';
      return $lang;
    }else{
      $lang='desole';
      return $lang;
    }
  } 
  $res=translate();
}
?>
<?php
$mat=null;$nom=null;$lieu=null;$date=null;$etat=null;$sexe=null;$langue=null;$nation=null;
if(isset($_POST['matricule']) && isset($_POST['nom'])
&& isset($_POST['radio']) && isset($_POST['lieu']) 
&& isset($_POST['date']) && isset($_POST['etat']) && isset($_POST['nationalite'])){
  $mat=$_POST['matricule'];
  $nom=$_POST['nom'];
  $sexe=$_POST['radio'];
  $lieu=$_POST['lieu'];
  $date=$_POST['date'];
  $etat=$_POST['etat'];
  $nation=$_POST['nationalite'];
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TP Web 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
  .col-md-3{
  background-color:#F0EDED;
}
</style>
</head>
<body>
  <div class="container mt-2">
        <div class="row">
            <div class="col-md-3">
              <h3>Resultat carre</h3>
              <?php echo"**************************" ?>
              <h4><?php echo "cote : $cote" ?></h4>
              <h5><?php echo "Le perimetre est : $surface" ?></h5>
              <h5><?php echo "La surface est : $perim" ?></h5>
              <hr>
              <h4>Resultat rectangle</h4>
              <?php echo"*****************************" ?>
              <h5><?php echo "Longueur : $long et Largeur : $larg" ?></h5>
              <h5><?php echo "Le perimetre est : $surfaceR" ?></h5>
              <h5><?php echo "La surface est : $perimetreR" ?></h5>
              <hr>
              <h4>Resultat cercle</h4>
              <?php echo"*****************************" ?>
              <h5><?php echo "PI : $pi et Rayon : $rayon" ?></h5>
              <h5><?php echo "L'aire est de : $aire" ?></h5>
              <hr>
              <h4>Resultat triangle</h4>
              <?php echo"*****************************" ?>
              <h5><?php echo "Base : $base et Hauteur : $hateur" ?></h5>
              <h5><?php echo "La surface est de : $surf" ?></h5>
            </div>
            <div class="col-md-6">
            <h2>Travail  Pratique numero 2 de Web 2</h2>  
            <hr>      
        <form action="">
            <div class="form-group">
                <select name="choix" id="myselect" class="form-control">
                    <option value="">---1. Selectionner l'exercice</option>
                    <option value="carre">carre</option>
                    <option value="rectangle">rectangle</option>
                    <option value="cercle">cercle</option>
                    <option value="triangle">rectangle_triangle</option>
                    <!-- <option value="losange">losange</option>
                    <option value="trapezze">trapezze</option> -->
                </select>
            </div>
        </form>
        <hr>
        <h4>2. Inscription des etudiants</h4>
          <div class="form-group">
            <button class="btn btn-info" data-toggle="modal" data-target="#etudiant">new etudiant</button>    
         </div>
            <br>
            <?php echo '<p>'.$langue.'</p>' ?>
            <table class="table table-sm table-bordered table-hover" table hover>
                <thead>
                  <tr><th>matricule :</th><td><?=$mat ?></td></tr>
                  <tr><th>noms :</th><td><?=$nom?></td></tr>
                  <tr><th>sexe :</th><td><?=$sexe?></td></tr>
                  <tr><th>lieu naissance :</th><td><?=$lieu ?></td></tr>
                  <tr><th>date naissance :</th><td><?=$date ?></td></tr>
                  <tr><th>nationalite :</th><td><?=$nation ?></td></tr>
                  <tr><th>etat civil :</th><td><?=$etat ?></td></tr>
                  <tr><th>lange(s) :</th>
                        <td><?php if(isset($_POST['langue'])){
                        foreach($_POST['langue'] as $lang){
                          $langue=$lang;
                          echo '<p>'.$langue.'</p>';
                        }
                      } ?></td>
                  </tr>
                </thead>
                <tbody>
  
                </tbody>
            </table>
            </div>
            <div class="col-md-3">
              <div class="container">
                <h4>4. Translate</h4>
                <form action="index.php" method="POST">
                  <div class="form-group">
                      <input type="text" name="jour" placeholder="Saisir Jour en francais" class="form-control">
                  </div>
                  <input type="submit" class="btn btn-info" value="Valider">
                </form>
                <label for="">DAY</label>
                <input type="text" class="form-control" value="<?= $res ?>">
              </div>
              <div class="container">
                <h4>5. Relever</h4>
                <hr>
                <form action="index.php" method="POST">
                    <div class="form-group">
                      <label for="fr">Francais</label>
                      <input type="number" name="fr" id="fr" min="0" oninput="this.value=Math.abs(this.value)" class="form-control" placeholder=" /10">
                      <label for="en">Anglais</label>
                      <input type="number" name="en" id="en" min="0" oninput="this.value=Math.abs(this.value)" class="form-control" placeholder=" /10">
                      <label for="math">Math</label>
                      <input type="number" name="math" id="math" min="0" oninput="this.value=Math.abs(this.value)" class="form-control" placeholder=" /20">
                      <label for="phy">Physique</label>
                      <input type="number" name="phy" id="phy" min="0" oninput="this.value=Math.abs(this.value)" class="form-control" placeholder=" /20">
                      <label for="phy">Statistique</label>
                      <input type="number" name="stat" id="stat" min="0" oninput="this.value=Math.abs(this.value)" class="form-control" placeholder=" /40">
                    </div>
                    <input type="submit" class="btn btn-info" value="Ajouter">
                    <div class="alert alert-danger"><?php echo " la moyenne est : $moyenne" ?></div>
                </form>
                </div>
            </div>
        </div>  
    </div>
  <!-- The Modal etudiant-->
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true" id="etudiant">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Inscription</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="index.php" method="POST">
            <div class="row">
              <div class="col-6">
              <div class="form-group">
              <label for="matricule">matricule</label>
                  <input type="text" name="matricule" class="form-control" placeholder="matricule" require>
                  <label for="nom">noms</label>
                  <input type="text" class="form-control" name="nom" placeholder="noms" require>
                    <div class="form-check">
                      <input type="radio" name="radio" id="masculin" value="masculin" class="form-check-input">
                      <label class="form-check-label" for="masculin">masculin</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" name="radio" id="feminin" value="feminin" class="form-check-input">
                      <label class="form-check-label" for="feminin">feminin</label>
                    </div>
                  <label for="lieu">lieu naissance</label>
                  <input type="text" class="form-control" name="lieu" require>
                  <label for="date">date naissance</label>
                  <input type="date" class="form-control" name="date" require>
              </div>
              </div>
              <div class="col-6">
              <div class="form-group">
                  <label for="nationalite">nationalite</label>
                  <input type="text" class="form-control" name="nationalite" require>
                  <label for="eta">etat civil</label>
                  <select name="etat" id="etat" class="form-control">
                    <option value="marie(e)">marie(e)</option>
                    <option value="celibataire">celibataire</option>
                    <option value="divorcee">divorcee</option>
                  </select>
                  <label for="">langue(s)</label>
                    <div class="form-check">
                      <input type="checkbox" name="langue[]" value="francais" id="francais" class="form-check-input">
                      <label class="form-check-label" for="francais">francais</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" name="langue[]" value="anglais" id="anglais" class="form-check-input">
                      <label class="form-check-label" for="anglais">anglais</label>
                    </div>
              </div>
              <input type="submit" class="btn btn-info" value="Executer">
              </div>
            </div>
               
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- The Modal -->
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">La surface et le perimetre du Carre</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="index.php" method="POST">
              <div class="form-group">
                  <label for="cote">valeur du cote</label>
                  <br>
                  <input type="number" name="cote" id="cote" min="0" oninput="this.value=Math.abs(this.value)" class="form-control">
              </div>
              <input type="submit" class="btn btn-info" value="Calculer">
          </form>
        </div>
      </div>
    </div>
  </div>
    <!-- The Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">La surface et le perimetre d'un Rectangle</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <form action="index.php" method="POST">
              <div class="form-group">
                  <label for="cote">valeur longueur</label>
                  <br>
                  <input type="number" name="long" min="0" oninput="this.value=Math.abs(this.value)" class="form-control">
                  <label for="cote">valeur largeur</label>
                  <br>
                  <input type="number" name="larg" min="0" oninput="this.value=Math.abs(this.value)" class="form-control">
              </div>
              <input type="submit" class="btn btn-info" value="Calculer">
          </form>
        </div> 
      </div>
    </div>
  </div>
  <!-- The Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">La surface du cercle</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <form action="index.php" method="POST">
              <div class="form-group">
                  <label for="cote">valeur du pi</label>
                  <br>
                  <input type="number" name="pi" min="0" oninput="this.value=Math.abs(this.value)" class="form-control">
                  <label for="cote">valeur du rayon</label>
                  <br>
                  <input type="number" name="rayon" min="0" oninput="this.value=Math.abs(this.value)" class="form-control">
              </div>
              <input type="submit" class="btn btn-info" value="Calculer">
          </form>
        </div> 
      </div>
    </div>
  </div>
  <!-- The Modal -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">La surface du triangle rectangle</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <form action="index.php" method="POST">
              <div class="form-group">
                  <label for="cote">base</label>
                  <br>
                  <input type="number" name="base" min="0" oninput="this.value=Math.abs(this.value)" class="form-control">
                  <label for="cote">hauteur</label>
                  <br>
                  <input type="number" name="hauteur" min="0" oninput="this.value=Math.abs(this.value)" class="form-control">
              </div>
              <input type="submit" class="btn btn-info" value="Calculer">
          </form>
        </div> 
      </div>
    </div>
  </div>

  <script>
      $(document).ready(function(){ //Make script DOM ready
    $('#myselect').change(function() { //jQuery Change Function
        var opval = $(this).val(); //Get value from select element
        if(opval=="carre"){ //Compare it and if true
            $('#myModal').modal("show"); //Open Modal
        }else if(opval=="rectangle"){
            $('#myModal1').modal("show"); //Open Modal
        }else if(opval=="cercle"){
            $('#myModal2').modal("show"); //Open Modal
        }else if(opval="triangle"){
            $('#myModal3').modal("show"); //Open Modal
        }
    });
});
  </script>

</body>
</html>