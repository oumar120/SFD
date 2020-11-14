<?php
session_start(); 

if (isset($_POST['envoyer'])) {
  if (!empty($_POST['login'] and !empty($_POST['password']))) {
    $login=htmlspecialchars($_POST['login']);
    $password=htmlspecialchars($_POST['password']);
    include('connexion.php');
    $req=$bdd->prepare('select niveau from user where login=? and password=?');
    $req->execute(array($login,$password));
    $donnee=$req->fetch();
    if(!empty($donnee)){
      $_SESSION['id']=$donnee['niveau'];
      if ($_SESSION['id']=="maximum") {
        header('location:admin/index.php');
        exit();
      }else{
      header('location:accueil.php');
           exit();
      }
    }else echo "<span style='color:white;'>login ou mot de passe incorrect!</span>";
  }
}
  ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Connexion</title>

  <!-- Custom fonts for this template-->

  <link href="vendor/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="vendor/sb-admin-2.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="css/font-awesome.min.css" />
</head>

<body style="background-image: url('img/background.jpg')">

  <div class="container">
<div class="row">  
        
            <img src="img/logo.jpg" class="col-lg-5 pt-5 d-none d-lg-block" style="padding-right:0px;height: 440px;">
              <div class="col-lg-7 pt-5 d-none d-lg-block" style="padding-left:0px;">
               <div class="card shadow mb-4">
                <div class="card-body " style="background-color: gray;">
            <!-- Nested Row within Card Body -->
                <div class="p-5 ">
                  <div class="text-center">
                    <h2 class="mb-4" style="color: white;"><i class="fa fa-user"></i> Bienvenue!</h2>
                  </div>
                  <form class="user" action="index.php" method="post">
                    <div class="form-group">
                      <input type="text" name="login" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="login">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" placeholder="mot de passe">
                    </div>
                    <div class="form-group">
                      <button type="submit" name="envoyer" class="btn btn-primary btn-user btn-block">
                        <span style="font-size: 1.4em;"> <i class="fa fa-sign-in"></i> se connecter</span>
                      </button>
                    </div>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 pt-5 d-lg-none">
               <div class="card shadow mb-4">
                <div class="card-body " style="background-color: gray;">
            <!-- Nested Row within Card Body -->
                <div class="p-5 ">
                  <div class="text-center">
                    <h2 class="mb-4" style="color: white;"><i class="fa fa-user"></i> Bienvenue!</h2>
                  </div>
                  <form class="user" action="index.php" method="post">
                    <div class="form-group">
                      <input type="text" name="login" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="login">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" placeholder="mot de passe">
                    </div>
                    <div class="form-group">
                      <button type="submit" name="envoyer" class="btn btn-primary btn-user btn-block">
                        <span style="font-size: 1.4em;"> <i class="fa fa-sign-in"></i> se connecter</span>
                      </button>
                    </div>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

</body>

</html>
