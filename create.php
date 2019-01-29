<?php
    include 'config/database.php';

    $queryVille = "SELECT * FROM ville";

    $resultatVille = mysqli_query($db,$queryVille);


    if(isset($_POST['enregister'])){
        $nom = addslashes($_POST['ville']);
        $description = addslashes($_POST['description']);
        $longitude = 0;
        $latitude = 0;

        // die($nom);

        // check if ville existe et recuperation des coordonnee geographique

        $getVilleQuery = "SELECT * FROM ville WHERE ville='$nom'";

        $getVilleResultat = mysqli_query($db,$getVilleQuery);

        

        while($ville = mysqli_fetch_assoc($getVilleResultat)){
            $latitude = $ville['lat'];
            $longitude = $ville['lng'];
        }

        $queryAddAgence = "INSERT INTO agence(ville,longitude,latitude,description)
                            VALUES('$nom','$longitude','$latitude','$description')";

        $resultatAddAgence = mysqli_query($db,$queryAddAgence);

        if($resultatAddAgence){
            echo '<script language="Javascript">';
            echo 'document.location.replace("./index.php")'; // -->
            echo ' </script>';
        }

        
    }

?>


<?php include 'views/create.views.php';?>