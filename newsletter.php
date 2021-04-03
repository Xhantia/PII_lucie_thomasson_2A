<?php session_start();
	
	// $email = 'aaa';
	// $pseudo = 'bbb';

    if( isset($_POST['email']) && isset($_POST['pseudo']) ){
		echo "Success";

		// if($_POST['email'] == $email && $_POST['pseudo'] == $pseudo){ // Si les infos correspondent...
        //     session_start();
        //     $_SESSION['email'] = $email;
        //     echo "Success";    
        // }
        // else{ // Sinon
        //     echo "Failed";
        // }
    }
	else {
		echo "Failed";
	}



// require_once "includes/functions.php";

// if (isset($_POST['newsletter_email']) and isset($_POST['newsletter_pseudo']))
// 	    {
// 	    	/*Récupération des variables du formulaire*/
// 	    	$email = $_POST['newsletter_email'];
//             $pseudo = $_POST['newsletter_pseudo'];

// 			echo $email;
// 			echo $pseudo;

// 	    	// $requete = getDb() -> exec ('INSERT INTO newsletter (mail_abonne, pseudo_abonne) VALUES ('.$email.', '.$pseudo.')');
								
// 		    // $requete -> bindValue ('mail_abonne', $email, PDO :: PARAM_STR);
// 	        // $requete -> bindValue ('pseudo_abonne', $pseudo, PDO :: PARAM_STR);
// 		    // $requete -> execute ();
//         }
?>




