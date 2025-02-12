<?php

    $title = "Grand Theft Auto VI";
    $description = "Grand Theft Auto VI s'installe dans l'État de Leonida, qui abrite les rues baignées par les néons de Vice City et plus encore. Cet opus, le plus imposant et le plus immersif de la série des Grand Theft Auto à ce jour, sera disponible en 2025 sur PlayStation 5 et Xbox Series X|S.";
    $image = "https://www.notebookcheck.biz/fileadmin/Notebooks/News/_nc4/GTA-VI.png";
    $link = "https://www.rockstargames.com/fr/VI";


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <div class="row container">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?= $image ?>">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><?= $title ?><i class="material-icons right">more_vert</i></span>
                <p><a href="<?= $link ?>" target="_blank">Rockstar Games</a></p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><?= $title ?><i class="material-icons right">fermer</i></span>
                <p><?= $description ?></p>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>