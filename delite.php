<?php
include("ConnexionDataBase.php");
$select = "delete from produit where id_produit='".$_GET['id']."'";
if($query = mysqli_query($connexion,$select))
{
echo '<script>alert(\'Suppression avec succes\');</script>';
header('Refresh: 0; url=afficherproduct.php');
}
else
{
echo '<script>alert(\'Erreur \');</script>';

header('Refresh: 0; url=afficherproduct.php');
}
?>