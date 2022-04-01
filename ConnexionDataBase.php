<?php
$connexion = mysqli_connect("localhost","root","");
if(!$connexion){
    echo("Connexion impossible, veuillez essayer .");
    exit;
}
if(!mysqli_select_db($connexion , 'commerce')){
    echo("Acces a la base commerce impossible");
    exit;
}
?>