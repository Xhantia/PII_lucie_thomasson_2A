<?php session_start();
require_once "../includes/functions.php";

if (isset($_POST['newsletter_email']) and isset($_POST['newsletter_pseudo']))
	    {
	    	/*Récupération des variables du formulaire*/
	    	$email = $_POST['newsletter_email'];
            $pseudo = $_POST['newsletter_pseudo'];

            /* Vérification qu'aucun des champs n'est vide*/
    	    if(empty($_POST['newsletter_email']) or empty($_POST['newsletter_pseudo']))
            {
    	    	$erreur= "Vous vous êtes déjà inscrit avec cette adresse mail.</p>";
	        }

	    	$requete = getDb() -> exec ('INSERT INTO newsletter (mail_abonne, pseudo_abonne) VALUES (:mail_abonne, :pseudo_abonne)');
								
		    $requete -> bindValue ('mail_abonne', $email, PDO :: PARAM_STR);
	        $requete -> bindValue ('pseudo_abonne', $pseudo, PDO :: PARAM_STR);
		    $requete -> execute ();
        }
?>




