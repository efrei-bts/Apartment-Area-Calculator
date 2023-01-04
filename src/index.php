<?php
if (!array_key_exists('room-largeur', $_POST) || !array_key_exists('room-longueur', $_POST)
|| count($_POST['room-largeur']) != count($_POST['room-longueur'])) {
    if (array_key_exists('room_count', $_POST)) {
        $_POST['room_count'] = intval($_POST['room_count']);
        include 'formPieces.php';
    } else
        include 'form.php';
    exit(0);
}
$nbRoom = count($_POST['room-longueur']);
$largeurs = $_POST['room-largeur'];
$longueurs = $_POST['room-longueur'];
$total = 0;
for ($i = 0; $i < $nbRoom; ++$i)
    $total += intval($largeurs[$i]) * intval($longueurs[$i]);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultat</title>
</head>
<body>
    <h1 style="color: red">Société Immobilière de Gestion.</h1>
    <a>Les pièces de l'appartement ont une surface totale de <strong><?php echo "$total m²"?></strong></a>
</body>
</html>
