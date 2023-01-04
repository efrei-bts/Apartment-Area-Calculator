<?php
/**
 * Cette première partie permet de vérifier à quelle étape nous sommes:
 * - Demander le nombre de salles.
 * - Remplir le formulaire.
 * - Afficher le résultat.
 */

/**
 * Dans cette première condition pour vérifier à quelle étape nous sommes en regardant dans le tableau contenant
 * les valeurs de post si les valeurs d'une étape sont présentes avec en priorité le résultat, le formulaire des surfaces puis le formulaire du nombre de salles:
 *
 * Si les champs "room-largeur' et "room-longueur" sont présents alors c'est que le formulaire des surfaces a renvoyé ses valeurs
 * alors je dois donc afficher le résultat.
 *
 * Si le champ "room-count' est présent alors c'est que le formulaire du nombre de salles a renvoyé sa valeur
 * alors je dois donc générer et afficher le formulaire des surfaces.
 *
 * Si aucune des 2 conditions précédentes n'est valide, alors j'affiche le formulaire du nombre de pièces.
 *
 *
 *
 * Bonus: Pour éviter tout problème dans ma prémère condition je vérifie que les 2 champs contiennent bien le même nombre de valeurs
 *        sinon je reviens au formulaire du nombre de salles.
 */
if (!array_key_exists('room-largeur', $_POST) || !array_key_exists('room-longueur', $_POST)
|| count($_POST['room-largeur']) != count($_POST['room-longueur'])) {
    if (array_key_exists('room-count', $_POST)) {
        $_POST['room-count'] = intval($_POST['room-count']);
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
