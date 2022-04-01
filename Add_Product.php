<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Product</title>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <form nam="add" method="post">
            <label for="nom">Name product</label><br>
            <input type="text" name="nom" id="nom" placeholder="product"><br>
            <label for="Prix">Price</label><br>
            <input type="text" name="Prix" id="Prix" placeholder="price"><br>
            <input type="submit" name="submit" value="Add">
        </form>
        <?php
        include("ConnexionDataBase.php");
        if(isset($_POST['submit']))
        {
            $nom=$_POST['nom'];
            $Prix=$_POST['Prix'];
            if($nom&&$Prix)
            {
                if(is_numeric($Prix))
                {
                    $req="INSERT INTO produit (nom_produit, prix_produit) values ('$nom' , '$Prix')";
                    //pour envoer la requette:
                    if($resultat = $connexion->query($req))
                    {
                    echo '<script>alert(\'Product added .\');</script>';
                        header('Refresh :0; url=Add_Product.php');
                    }
                    else{
                    echo '<script>alert(\'Error .\');</script>';
                        header('Refresh :0; url=Add_Product.php');
                    }
                }
            }
            mysqli_close($connexion);
        }
            ?>
            
    </body>
</html>