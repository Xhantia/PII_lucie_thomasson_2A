<?php session_start();
require_once "includes/functions.php";

if (isset($_POST['newsletter_email']) and isset($_POST['newsletter_pseudo']))
	    {
	    	/*Récupération des variables du formulaire*/
	    	$email = $_POST['newsletter_email'];
            $pseudo = $_POST['newsletter_pseudo'];

			// echo $email;
			// echo $pseudo;

	    	$requete = getDb() -> exec ('INSERT INTO newsletter (mail_abonne, pseudo_abonne) VALUES ('.$email.', '.$pseudo.')');
								
		    $requete -> bindValue ('mail_abonne', $email, PDO :: PARAM_STR);
	        $requete -> bindValue ('pseudo_abonne', $pseudo, PDO :: PARAM_STR);
		    $requete -> execute ();
        }
?>




