<?php
    include 'config/database.php';

    $queryAllAgence = "SELECT * FROM agence";

    $resultatAllAgence = mysqli_query($db,$queryAllAgence);
?>


<?php include 'views/index.views.php';?>