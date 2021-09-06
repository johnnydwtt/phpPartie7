<?php
if(isset($_GET['lastname']) && isset($_GET['firstname'])){
    echo $_GET['firstname'] . $_GET['lastname'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1 php</title>
</head>
<body>

<?php

?>

<a href="exercice1.php?lastname=Nemare&firstname=Jean">Lien</a>

</body>
</html>