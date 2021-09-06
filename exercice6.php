<?php
if(isset($_GET['building']) && isset($_GET['room'])){
    echo 'Batiment : ' . $_GET['building'] . ' <br> ' . 'Chambre : ' . $_GET['room'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 6 php</title>
</head>
<body>

<?php

?>

<div>
<a href="exercice6.php?building=12&room=101">Lien</a>
</div>

</body>
</html>