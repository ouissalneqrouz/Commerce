<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>modify Product</title>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<?php   
        include ('ConnexionDataBase.php');
        echo '<div id="Add_Product">';
        echo '<table border="0" cellspacing="0" class="tab">';
        echo '<caption><h1>Products</h1></caption>';
            echo '<tr class="class1">';
            echo '<th>Product</th>';
            echo' <th> Price</th>';
            echo '<th><a href="Add_Product.php" class="ajt"><i class="fa fa-plus"></i></a></th>';
            echo '</tr>';
        $resultat1 = mysqli_query($connexion ,"SELECT id_produit , nom_produit,prix_produit FROM produit");
        while($ligne = mysqli_fetch_object($resultat1)) {
        echo '<tr align="center"><td class="class2">'. $ligne->nom_produit.'</td> <td class="class2">'. $ligne->prix_produit.'</td><td class="class3">
        <button onclick="deleteme('.$ligne->id_produit.')"  name="Delete" class="cc1"><i class="fa fa-trash-o"></i></button>
        <button onclick="updateme('.$ligne->id_produit.')"  name="update" class="cc2"><i class="fa fa-pencil"></i></button></td>
        <script language="javascript">
        function deleteme(delid)
        {
        if(confirm("Vous voulez supprimez ce produit ?")){
            window.location.href="delite.php?id="+delid+" ";
            return true;
        }
        }   
        function updateme(upid)
        {
        if(confirm("Vous voulez modifier ce produit ?")){
            window.location.href="modifier.php?id="+upid+" ";
            return true;
        }
        }   
        </script></tr>';}
            echo'</table>';
            echo'</div>';
    ?>