<?php
if(isset($_GET['startDate']) && isset($_GET['endDate'])){
    echo 'Début de la date: ' . $_GET['startDate'] . '<br> ' . 'Fin de la date: ' . $_GET['endDate'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 3 php</title>
</head>
<body>

<?php

?>
<div><a href="exercice3.php?startDate=2/05/2016&endDate=27/11/2016">Lien</a></div>

</body>
</html>