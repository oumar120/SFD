<?php
session_start();
if (empty($_SESSION['id']) ){
  header('location:../index.php');
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
    <link rel="stylesheet" href="../css/kube.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/custom.min.css" />
    <link rel="shortcut icon" href="../img/favicon.jpg" />
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/buttons.datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../css/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
  <!-- Navigation -->
  <?php
   include('menu.php');
  ?>
  <div class="container_fluid" style="padding-top:30px;">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-condensed" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                       <th>ID</th>
                      <th>numéro agrément</th>
                      <th>nom développé</th>
                      <th>sigle</th>
                      
                      <th>contact</th>
                      <th>gerant</th>
                      <th>PCA</th>
                      <th>région</th>
                      <th>département</th>
                      <th>type</th>
                      <th>situation</th>
                      <th>supprimer</th>
                    </tr>
                  </thead>
                  </tbody>
                </table>
              </div>
  <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formUsuarios">    
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">numero:</label>
                    <input type="text" class="form-control" id="nom1">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">nom develope</label>
                    <input type="text" class="form-control" id="nom2">
                    </div> 
                    </div>    
                </div>
                <div class="row"> 
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">sigle</label>
                    <input type="text" class="form-control" id="nom3">
                    </div>               
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">contact</label>
                    <input type="text" class="form-control" id="nom4">
                    </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="" class="col-form-label">gerant</label>
                        <input type="text" class="form-control" id="nom5">
                        </div>
                    </div>    
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">PCA</label>
                        <input type="text" class="form-control" id="nom6">
                        </div>            
                    </div>    
                </div> 
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="" class="col-form-label">region</label>
                        <input type="text" class="form-control" id="nom7">
                        </div>
                    </div>    
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">departement</label>
                        <input type="text" class="form-control" id="nom8">
                        </div>            
                    </div>    
                </div> 
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="" class="col-form-label">type</label>
                        <input type="text" class="form-control" id="nom9">
                        </div>
                    </div>    
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">situation</label>
                        <input type="text" class="form-control" id="nom10">
                        </div>            
                    </div>    
                </div>                          
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Sauvegarder</button>
            </div>
        </form>    
        </div>
    </div>
</div>  

  <!-- Javascript -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/kube.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="../js/dataTables.buttons.min.js"></script>
  <script src="../js/buttons.bootstrap4.min.js"></script>
  <script src="../js/jszip.min.js"></script>
  <script src="../js/pdfmake.min.js"></script>
  <script src="../js/vfs_fonts.min.js"></script>
  <script src="../js/buttons.html5.min.js"></script>
  <script src="../js/buttons.print.min.js"></script>
  <script src="../js/main.js"></script>
  <!-- Page level custom scripts -->
</body>
</html>