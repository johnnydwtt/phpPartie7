<?php
if(isset($_GET['language']) && isset($_GET['server'])){
    echo 'Language : ' . $_GET['language'] . ' <br> ' . 'Serveur : ' . $_GET['server'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 4 php</title>
</head>
<body>

<?php

?>

<div>
    <a href="exercice4.php?language=PHP&server=LAMP">lien</a>
</div>
</body>
</html>