<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Jean';
$_SESSION['nom'] = 'Dupont';
$_SESSION['age'] = 24;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Titre de ma page</title>
</head>

<body>
    <p>
        Attention : il faut appeler session_start() sur chacune de vos pages AVANT d'écrire le moindre code HTML (avant même la balise
        <!DOCTYPE> ;). Si vous oubliez de lancer session_start() , vous ne pourrez pas accéder aux variables superglobales $_SESSION .
    </p>
    <p>Comment sont générées les sessions en php ?</p>
    <ul>
        <li>Un visiteur arrive sur votre site. On demande à créer une session pour lui. PHP génère alors un numéro unique. Ce numéro est souvent très gros et écrit en hexadécimal ; par exemple : a02bbffc6198e6e0cc2715047bc3766f (ce numéro sert d'identifiant et est appelé « ID de session », ou PHPSESSID . PHP transmet automatiquement cet ID de page en page, en utilisant généralement un cookie).
        <li>Une fois la session générée, on peut créer une infinité de variables de session pour nos besoins. Par exemple, on peut créer une variable $_SESSION['nom'] qui contient le nom du visiteur, $_SESSION['prenom'] qui contient le prénom, etc. Le serveur conserve ces variables même lorsque la page PHP a fini d'être générée. Cela veut dire que, quelle que soit la page de votre site, vous pourrez récupérer par exemple le nom et le prénom du visiteur via la superglobale $_SESSION !
        </li>
        <li>Lorsque le visiteur se déconnecte de votre site, la session est fermée et PHP « oublie » alors toutes les variables de session que vous avez créées. Il est en fait difficile de savoir précisément quand un visiteur quitte votre site. En effet, lorsqu'il ferme son navigateur ou va sur un autre site, le vôtre n'en est pas informé. Soit le visiteur clique sur un bouton « Déconnexion » (que vous aurez créé) avant de s'en aller, soit on attend quelques minutes d'inactivité pour le déconnecter automatiquement : on parle alors de timeout. Le plus souvent, le visiteur est déconnecté par un timeout.</li>
        </li>
    </ul>
    <p>
        Salut <?php echo $_SESSION['prenom']; ?> !<br />
        Tu es à l'accueil de mon site (index.php). Tu veux aller sur une autre page ?
    </p>
    <p>
        <a href="mapage.php">Lien vers mapage.php</a><br />
        <a href="monscript.php">Lien vers monscript.php</a><br />
        <a href="informations.php">Lien vers informations.php</a>
    </p>
</body>

</html>