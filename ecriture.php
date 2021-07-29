<?php
$monfichier = fopen('compteur.txt', 'r+');

$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues

fclose($monfichier);

echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Lire et écrire dans un fichier</title>
</head>

<body>
    <p>
        Le fonctionnement d'un fichier est assez étrange…
    </p>
    <p>
        Vous l'ouvrez avec fopen .
    </p>
    <p>
        Vous lisez par exemple la première ligne avec fgets .

        Oui, mais voilà : maintenant, le « curseur » de PHP se trouve à la fin de la première ligne (vu qu'il vient de lire la première ligne), comme dans la figure suivante.

        Le curseur de PHP est à la fin de la première ligne
        Le curseur de PHP est à la fin de la première ligne
        Si vous faites un fputs juste après, il va écrire à la suite ! Pour éviter ça, on va utiliser la fonction fseek qui va replacer le curseur où l'on veut dans le fichier. En l'occurrence, on va replacer le curseur au début du fichier en faisant :
        fseek($monfichier, 0);
        Notre curseur sera alors repositionné au début, voyez donc la figure suivante.
    </p>
    <p>
        Si vous avez ouvert le fichier avec le mode 'a' ou 'a+' , toutes les données que vous écrirez seront toujours ajoutées à la fin du fichier. La fonction fseek n'aura donc aucun effet dans ce cas.
    </p>

    <p><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913492-lisez-et-ecrivez-dans-un-fichier"></a></p>