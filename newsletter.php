
<?php session_start();
    require_once "includes/functions.php";

    if( isset($_POST['email']) && isset($_POST['pseudo']) ){

        $email= $_POST['email'];
        $pseudo= $_POST['pseudo'];

        // echo $email;
        // echo $pseudo;

        $requete = getDb() -> exec ('INSERT INTO newsletter (pseudo_abonne, mail_abonne) VALUES ('$pseudo', '$email')');
        echo $requete;

        // $requete -> bindValue ('mail_abonne', $email, PDO :: PARAM_STR);
        // $requete -> bindValue ('pseudo_abonne', $pseudo, PDO :: PARAM_STR);
	    // $requete -> execute ();



       
    }
	else {
		echo "Failed";
	}
?>




