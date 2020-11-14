<?php
session_start();
if (empty($_SESSION['id']) ){
  header('location:index.php');
  exit();
}
if (isset($_GET['v']) and !empty($_GET['v'])) {
  $v=$_GET['v'];
include ('connexion.php');
$req=$bdd->query('select * from infos where id='.$v);
$donnee=$req->fetch();
}
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>FIMF</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/kube.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/custom.min.css" />
    <link rel="shortcut icon" href="img/favicon.jpg" />
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
  <!-- Navigation -->
  <div class="main-nav ">
    <div class="container">
      <header class="group top-nav">
        <div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">
            <span class="logo"> FIMF</span>
        </div>
          <nav id="navbar-1" class="navbar item-nav navbar-right">
            <ul>
                <li class="active"><a href="accueil.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="formulaire.php"><i class="fa fa-plus"></i> Ajouter un SFD</a></li>
                <li><a href="form.php"><i class="fa fa-file"></i> Ajouter un fichier</a></li>
                <li><a href="deconnection.php"><i class="fa fa-sign-out"></i> Deconnexion</a></li>
            </ul>
        </nav>
      </header>
    </div>
  </div>
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-8">
            <div class="p-5">
                <h1 class="h4 text-gray-900 mb-4 text-center"><i class="fa fa-envelope"></i> Formulaire de modification</h1>
              <hr>
              <form action="admin/crud.php" method="post" class="well">
                    <div class="form-group">
                      <input type="hidden" name="nom1" value="<?php echo $donnee['id']?>">
                      <label>Sigle</label>
                      <select name="nom2" required>
                <option value="">choisir un sigle</option>
                <?php 
                   include("connexion.php");
                   $result=$bdd->query("select sigle from donnee");
                  while ($donne=$result->fetch()) {
                ?>
                <option value="<?php echo $donne['sigle'] ?>"> <?php echo $donne['sigle'] ?> </option>
              <?php } ?>
              </select>
                    </div>  
              <div class="form-group">
                  <label>intitulé</label>
                <input type="text" name="nom3" class="form-control form-control-user" required value="<?php echo $donnee['intitule']?>">
                </div>
                <div class="form-group">
                  <label>source</label>
                <input type="text" name="nom4" class="form-control form-control-user" required value="<?php echo $donnee['source']?>">
                </div>
                <div class="form-group">
                  <label>Date</label>
                <input type="date" name="nom5" class="form-control form-control-user" required value="<?php echo $donnee['dater']?>">
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="envoyer"><i class="fa fa-send"></i> modifier
                </button>
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Javascript -->
  <script src="js/jquery.min.js"></script>
    <script src="js/kube.min.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>