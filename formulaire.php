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
              <form action="traiter.php" method="post" class="well">
                    <div class="form-group">
                      <label>numéro d'agrément</label>
                <input type="text" name="nom1" id="numero" class="form-control" required placeholder="ex SL1-98-00156" value=""><p id="info"><p/>
                <div class="form-group">
                  <label>nom développé</label>
                  <input type="text" name="nom2" class="form-control form-control-user" required
                  placeholder="ex mutuelle d'epargne">
                </div>

                <div class="form-group">
                  <label>sigle</label>
              <input type="text" name="nom3" class="form-control form-control-user" required placeholder="ex COOPEC-RESOPP">
                </div>

                 <div class="form-group">
                  <label>contact</label>
                <input type="text" name="nom4" class="form-control form-control-user" required placeholder="ex 786932541">
                </div>

                <div class="form-group">
                  <label>gérant</label>
                <input type="text" name="nom5" class="form-control form-control-user" required placeholder="prénom/tel/email">
                </div>

                 <div class="form-group">
                  <label>PCA</label>
                <input type="text" name="nom6" class="form-control form-control-user" required placeholder="prénom/tel/email">
                </div>

                 <div class="form-group">
                  <label>région</label>
                <select name="nom7" id="region" onchange="go()">
                  <option value="">choisir</option>}
                  <?php
              include('connexion.php');
              $req=$bdd->query('select * from region order by nom');
              while ($donnee=$req->fetch()){
              ?>
                <option value="<?php echo $donnee['nom']?>"><?php echo $donnee['nom']?></option>
                <?php } ?>
                </select>
                </div>
                 <div class="form-group">
                  <label>département</label>
                  <div id="departement" style="display: inline;">
                    <select name="nom8">
                  <option value="">aucun</option>}
                   </select>
                  </div>
                </div>

                <div class="form-group">
                  <label>type</label>
                <select name="nom9" class="form-control" required>
                  <option value="">choisir</option>
                  <option value="affilie">affilie</option>
                  <option value="nom affilie">non affilie</option>
                </select>
                </div>

                 <div class="form-group">
                  <label>situation</label>
                <select name="nom10" class="form-control" required>
                  <option value="">choisir</option>
                  <option value="sain">sain</option>
                  <option value="difficulte">difficulté</option>
                  <option value="non definit">non définit</option>
                </select>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary btn-block" name="envoyer"><i class="fa fa-send"></i> Envoyer
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