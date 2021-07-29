<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        Dans php.ini, recherchez la ligne qui contient pdo_mysql (comme à la ligne 3 dans l'exemple ci-dessous).
    <p>
        Enlevez le point-virgule devant, s'il y en a un, pour activer l'extension :
        <code>
            <br>
            ;extension=php_pdo_firebird.dll <br>
            ;extension=php_pdo_mssql.dll <br>
            extension=php_pdo_mysql.dll <br>
            ;extension=php_pdo_oci.dll <br>
            ;extension=php_pdo_odbc.dll <br>
        </code>

    </p>


    Je vous recommande, tant qu'à y être, de passer la ligne display_errors à "On", pour que les erreurs s'affichent ; ça va grandement nous aider :

    display_errors = On
    </p>
    <hr>
    <p>On se connecte à MySQL.
        <br>
        // En cas d'erreur, on affiche un message et on arrête tout
    </p>
    <code>
        try {
        $bdd = new PDO('mysql:host=localhost;dbname=testOpcPdo;charset=utf8', 'root', '');
        } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
        }
    </code>
    <p>
        Si tout va bien, on peut continuer. On récupère tout le contenu de la table jeux_video.

    </p>
    <code>$reponse = $bdd->query('SELECT * FROM jeux_video');
    </code>
    <p>On affiche chaque entrée une à une</p>
    <code>
        while ($donnees = $reponse->fetch()) {
        ...}
    </code>

</body>

</html>

<?php
try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=testOpcPdo;charset=utf8', 'root', '');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM jeux_video');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch()) {
?>
    <p>
        <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
        Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />
        Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
        <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
    </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>