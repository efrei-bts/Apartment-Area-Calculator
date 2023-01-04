<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pièces</title>
</head>
<body>
    <h1 style="color: red">Société Immobilière de Gestion.</h1>
    <form action="/" method="post">
        <table>
            <thead>
                <tr>
                    <th>Numéro</th>
                    <th>Largeur</th>
                    <th>Longueur</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for ($i = 0; $i < $_POST['room-count']; ++$i) {
                        $id = $i + 1;
                        include 'formField.php';
                    }
                ?>
            </tbody>
        </table>
        <input type="submit" value="Calculer">
    </form>
</body>
</html>