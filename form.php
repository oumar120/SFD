<?php
session_start();
if (empty($_SESSION['id']) ){
  header('location:index.php');
  exit();
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
                <h1 class="h4 text-gray-900 mb-4 text-center"><i class="fa fa-envelope"></i> Formulaire d'ajout</h1>
              <hr>
              <form action="traiter.php" method="post" class="well" enctype="multipart/form-data" >
                    <div class="form-group">
                      <label>Sigle</label>
              <select name="nom1">
                <option value="">choisir</option>
                <?php 
                   include("connexion.php");
                   $req=$bdd->query("select sigle from donnee");
                  while ($donnee=$req->fetch()) {
                ?>
                <option value="<?php echo $donnee['sigle'] ?>"> <?php echo $donnee['sigle'] ?> </option>
              <?php } ?>
              </select>
              <div class="form-group">
                  <label>intitulé</label>
                <input type="text" name="nom2" class="form-control form-control-user" required>
                </div>
                <div class="form-group">
                  <label>source</label>
                <input type="text" name="nom3" class="form-control form-control-user" required>
                </div>
                <div class="form-group">
                  <label>Date</label>
                <input type="date" name="nom4" class="form-control form-control-user" required>
                </div>
                <div class="form-group">
                  <label>joindre un fichier</label>
                <input type="file" name="nom5" class="form-control form-control-user" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="send"><i class="fa fa-send"></i> Envoyer
                </button>
              </form>
              <hr>
               <?php
               if(isset($_GET['m'])){
                $m=$_GET['m'];
                if($m==1){?>
          <script> alert("données enregistrées avec succes")</script>
               <?php } else if($m==2){?>
           <script> alert("Attention ce numéro d'agrément existe déja")</script> 
             <?php  
              }else{?>
            <script> alert("Une erreur est survenue,veuillez réessayer s'il vous plait")</script> 
             <?php } }
              ?>
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