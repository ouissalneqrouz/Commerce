<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <title>List Product</title>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <?php 
        include ('ConnexionDataBase.php');
        echo '<div>';
        echo '<table border="0" cellspacing="0" class="tab">';
        echo '<caption> <h1> Products </h1></caption>';
        echo '<tr class= "class1">';
        echo '<th>Product</th>';
        echo '<th>Price</th>';
        echo '<th><a href ="Add_Product.php"></th>';
        $resultat1 = mysqli_query($connexion , "SELECT id_produit ,nom_produit,prix_produit FROM produit");
        while($ligne = mysqli_fetch_object($resultat1)) {
            echo '<tr align="center"><td class="class2">'. $ligne->nom_produit.'</td> <td class="class2">'. $ligne->prix_produit.'</td><td class="class3">
            </tr>';}
                echo'</table>';
                echo'</div>';
        ?>

    </body>



    <!--
        <script language="javascript">
            function deleteme(delid)
            {
            if(confirm("Vous voulez supprimez ce produit ?")){
                window.location.href="SupprimerProduit.php?id="+delid+" ";
                return true;
            }
            }   
            function updateme(upid)
            {
            if(confirm("Vous voulez modifier ce produit ?")){
                window.location.href="ModifierProduit.php?id="+upid+" ";
                return true;
            }
            }   
            </script> -->