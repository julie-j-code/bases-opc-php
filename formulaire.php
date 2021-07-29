<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Formulaires</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   </head>
   <body>

   <p>
   Dans la page secrète, on vérifie d'abord si l'on a envoyé un mot de passe (avec isset  ) et si ce mot de passe correspond bien à celui que l'on attendait ( kangourou  ). Si ces deux conditions sont remplies, on affiche alors les codes d'accès.
   </p>

   <p>Veuillez entrer le mot de passe pour obtenir l'accès aux informations sensibles de la NASA :</p>
        <form action="secret.php" method="post">
            <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
            </p>
        </form>
        <p>Cette page est réservée au personnel de la NASA. Si vous ne travaillez pas à la NASA, inutile d'insister vous ne pourrez jamais accéder aux codes qui y sont divulgués ! ;-)</p>

<a target="_blank" href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913196-tp-page-protegee-par-mot-de-passe">En savoir plus...</a>
		<hr>
		<p>
			Cette page ne contient que du HTML.<br />
			Veuillez taper votre prénom :
		</p>
		
		<form action="cible.php" method="post">
			<p>
				<input type="text" name="prenom" /> <input type="submit" value="Valider" />
			</p>
		</form>

	<p>
		Dès l'instant où votre formulaire propose aux visiteurs d'envoyer un fichier, il faut ajouter l'attribut enctype="multipart/form-data"  à la balise form
	</p>

		<form action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>
</form>

<p><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-transmettez-des-donnees-avec-les-formulaires" target="_blank" rel="noopener noreferrer">En savoir plus...</a></p>


		
