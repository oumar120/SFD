
	<!-- Navigation -->
	<div class="main-nav ">
		<div class="container_fluid">
			<header class="group top-nav">
				<div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">
				    <span class="logo"> FIMF</span>
				</div>
			    <nav id="navbar-1" class="navbar item-nav navbar-right">
				    <ul>
				        <li class="active"><a href="accueil.php"><i class="fa fa-home"></i> Home</a></li>
				        <li><a href="formulaire.php"><i class="fa fa-plus"></i> Ajouter un SFD</a></li>
                <li><a href="form.php"><i class="fa fa-file"></i> Ajouter un Fichier</a></li>
				        <li><a href="deconnection.php"><i class="fa fa-sign-out"></i> Deconnexion</a></li>
				    </ul>
				</nav>
			</header>
		</div>
	</div>
	<div class="container-fluid" style="padding-top:30px;">
              <div class="table-responsive">
                <table class="table table-bordered table-condensed table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>numéro agrément</th>
                      <th>nom développé</th>
                      <th>sigle</th>
                      <th>région</th>
                      <th>département</th>
                      <th>contact</th>
                      <th>gérant</th>
                      <th>PCA</th>
                      
                      <th>type</th>
                      <th>situation</th>
                      <th>dossier</th>
                    </tr>
                  </thead>
                </table>
              </div>
          </div>
      </div>
  <div class="modal fade" id="modalTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
             <div class="table-responsive">
                <table class="table table-bordered table-striped table-condensed" width="100%" cellspacing="0" id="dataTable1">
                  <thead style="background-color: white;color: black;">
                    <tr>
                      <th>sigle</th>
                      <th>intitulé</th>
                      <th>dossier</th>
                    </tr>
                  </thead>
                </table>
              </div>
          <div class="modal-footer">
          <button type="button" data-dismiss="modal" aria-label="close" class="btn btn-primary">fermer</button>
        </div>                   
        </div>

    </div>
</div>  
      <div class="modal fade" id="modalTable1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
             <div id="reponse" class="p-3">
                                   
             </div> 
          <div class="modal-footer">
          <button type="button" data-dismiss="modal" aria-label="close" class="btn btn-primary">fermer</button>
        </div>                   
        </div>

    </div>
</div>  
<script src="js/jquery.min.js"></script>
<script src="js/kube.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="js/dataTables.buttons.min.js"></script>
  <script src="js/buttons.bootstrap4.min.js"></script>
  <script src="js/jszip.min.js"></script>
  <script src="js/buttons.html5.min.js"></script>
  <script src="js/buttons.print.min.js"></script>
  <script src="js/main2.js"></script>