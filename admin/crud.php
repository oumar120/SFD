<?php
session_start();
include_once '../connexion.php';

$nom1 = (isset($_POST['nom1'])) ? $_POST['nom1'] : '';
$nom2 = (isset($_POST['nom2'])) ? $_POST['nom2'] : '';
$nom3 = (isset($_POST['nom3'])) ? $_POST['nom3'] : '';
$nom4 = (isset($_POST['nom4'])) ? $_POST['nom4'] : '';
$nom5 = (isset($_POST['nom5'])) ? $_POST['nom5'] : '';
$nom6 = (isset($_POST['nom6'])) ? $_POST['nom6'] : '';
$nom7 = (isset($_POST['nom7'])) ? $_POST['nom7'] : '';
$nom8 = (isset($_POST['nom8'])) ? $_POST['nom8'] : '';
$nom9 = (isset($_POST['nom9'])) ? $_POST['nom9'] : '';
$nom10 = (isset($_POST['nom10'])) ? $_POST['nom10'] : '';

$option = (isset($_POST['option'])) ? $_POST['option'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$intitule = (isset($_POST['intitule'])) ? $_POST['intitule'] : '';
$sigle = (isset($_POST['sigle'])) ? $_POST['sigle'] : '';
$contenu = (isset($_POST['contenu'])) ? $_POST['contenu'] : '';

if (isset($_POST['envoyer'])) {
$req=$bdd->prepare("update infos set intitule=?,source=?,dater=?,id_donnee=? where id=?");
$req->execute(array($nom3,$nom4,$nom5,$nom2,$nom1));
   if($req){
    header('location:../accueil.php?m=1');
   }else
   header('location:../accueil.php?m=0');
}



switch($option){ 
    case 1:  
    $consulter = "SELECT DISTINCT id_donnee,intitule FROM infos WHERE id_donnee='$id'";
        $resultat = $bdd->prepare($consulter);
        $resultat->execute();        
        $data=$resultat->fetchAll(PDO::FETCH_ASSOC);
        print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
        $bdd=null;
                break;
    case 5:
     ?>    
        <div class="table-responsive">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <tr>
                <th>source</th>
                <th>date</th>
                <th>fichier</th>
                <div id="colonne"></div>
                </tr>
            </thead>
    <?php  
    $req=$bdd->prepare("select * from infos where id_donnee=? and intitule=? ");
    $req->execute(array($sigle,$intitule));
    while($donnee=$req->fetch()) { ?>
            <tbody>
                <tr>
            <td> <?php echo $donnee['source']; ?> </td>
            <td> <?php echo $donnee['dater']; ?> </td>
<td> <a href="fichier/<?php echo $donnee['fichier']; ?>" type="btn" class="btn btn-primary" target="_blank">
 <i class="fa fa-file"></i> </a></td>
 <?php if (!empty($_SESSION['id']) and $_SESSION['id']=="fort"){?>
 <td> <a href="modifier.php?v=<?php echo $donnee['id']; ?>" type="btn" class="btn btn-success" target="_blank">
 <i class="fa fa-edit"></i> </a> </td>
<?php } ?>
                </tr>
            </tbody>
    <?php } ?>
        </table>
        </div>
<?php  
                break;
    case 2:        
        $req=$bdd->prepare("UPDATE donnee SET numero=?,nom_develope=?,sigle=?,region=?,departement=?,tel=?,gerant=?,tel_pca=?,type=?,situation=? WHERE id=?");		
        $req->execute(array($nom1,$nom2,$nom3,$nom4,$nom5,$nom6,$nom7,$nom8,$nom9,$nom10,$id));      
        $consulter = "SELECT * FROM donnee WHERE $id='$id' order by id desc ";       
        $resultat = $bdd->prepare($consulter);
        $resultat->execute();
        $data=$resultat->fetchAll(PDO::FETCH_ASSOC);
        print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
        $bdd=null;
        break;
    case 3:        
        $consulter = "DELETE FROM donnee WHERE sigle='$id'";		
        $resultat = $bdd->prepare($consulter);
        $resultat->execute(); 
                        $req=$bdd->query('select fichier from infos where id_donnee="$id"');
                        while ($donnee=$req->fetch()) {
                            $chemin='../fichier/<?php echo $donnee["fichier"]?>';
                          if (file_exists($chemin))
                              unlink($chemin);
                        }
                        $consult = "DELETE FROM infos WHERE id_donnee='$id'";        
                        $result = $bdd->prepare($consult);
                        $result->execute(); 

                                        
        break;
    case 4:    
        $consulter = "SELECT * FROM donnee order by id desc";
        $resultat = $bdd->prepare($consulter);
        $resultat->execute();        
        $data=$resultat->fetchAll(PDO::FETCH_ASSOC);
        print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
        $bdd=null;
        break;
    case 6:
    $contenu=str_replace(" ","",$contenu);
    $req=$bdd->prepare('select * from donnee where numero=?');
    $req->execute(array($contenu));
    $donnee=$req->fetch();
        if (!empty($donnee)) {
            $data="<span class='text-danger'><i class='fa fa-warning'></i> Attention ce numéro d'agrément existe déja</span>";
        }else{
            $data="ok";
        }
        print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
        $bdd=null;
        break;
}


