<?php 
echo "<select name=nom8>" ;
if(isset($_POST["idRegion"])){
      $idRegion=$_POST['idRegion'];
      echo $idRegion;
     include('connexion.php');
     $req=$bdd->prepare('select * from departement where id_region=?');
     $req->execute(array($idRegion));
        while($donnee=$req->fetch()){ ?>
          <option value="<?php echo $donnee['nom']?>"><?php echo $donnee['nom']?></option>
<?php 
} echo "</select>"; } 

?>
