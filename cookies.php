<?php
setcookie('pseudo', 'J@ulie34', time() + 365*24*3600, null, null, false, true); // On écrit un cookie
setcookie('pays', 'France', time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...

// Et SEULEMENT MAINTENANT, on peut commencer à écrire du code html
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Titre de ma page</title>
</head>

<body>
    <p>La superglobale  $_COOKIE  représente le contenu de tous les cookies stockés par votre site sur l'ordinateur du visiteur. Les cookies sont de petits fichiers que l'on peut écrire sur la machine du visiteur pour retenir par exemple son nom.</p>
    <p>
        Pour écrire un cookie, on utilise la fonction PHP setcookie (qui signifie « Placer un cookie » en anglais).
        On lui donne en général trois paramètres, dans l'ordre suivant :
    <ul>
        <li>Le nom du cookie (ex. : pseudo ).</li>
        <li>
        La valeur du cookie (ex. : M@teo21 ).  </li>
        <li>
        La date d'expiration du cookie, sous forme de timestamp (ex. : 1090521508 ).Le paramètre correspondant à la date d'expiration du cookie mérite quelques explications. Il s'agit d'un timestamp, c'est-à-dire du nombre de secondes écoulées depuis le 1er janvier 1970. Le timestamp est une valeur qui augmente de 1 toutes les secondes. Pour obtenir le timestamp actuel, on fait appel à la fonction  time() . Pour définir une date d'expiration du cookie, il faut ajouter au « moment actuel » le nombre de secondes au bout duquel il doit expirer.Le dernier paramètre  true  permet d'activer le mode  httpOnly  sur le cookie, et donc de le rendre en quelque sorte plus sécurisé. Ça ne coûte rien, et vous diminuez le risque qu'un jour l'un de vos visiteurs puisse se faire voler le contenu d'un cookie à cause d'une faille XSS.</p>
        </li>
    </ul>
    <p>
    Hé ! Je me souviens de toi !<br />
    Tu t'appelles <?php echo $_COOKIE['pseudo']; ?> et tu viens de <?php echo $_COOKIE['pays']; ?> c'est bien ça ?
</p>
</body>

</html>