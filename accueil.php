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
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php
 if(!empty($_SESSION['id'])){
  if ($_SESSION['id']=="faible") {
    include('faible.php');
 }
 else if ($_SESSION['id']=="moyen") {
   include('gestion.php');
 }
 else{
  include('fort.php');
 }    
 }
 if(isset($_GET['m'])){
                $m=$_GET['m'];
                if($m==1){?>
          <script> alert("données modifiées avec succes")</script> 
             <?php  
              }else{?>
            <script> alert("Une erreur est survenue,veuillez réessayer s'il vous plait")</script> 
<?php }} ?>
</body>
</html>