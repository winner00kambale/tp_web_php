<?php
require_once('connexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="container">
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="saisir le nom">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="saisir le postnom">
                </div>
                <input type="submit" name="add_sub" class="btn btn-primary" value="enregistrer">
            </form>
            </div>
        </div>
    </div> 
</body>
</html>