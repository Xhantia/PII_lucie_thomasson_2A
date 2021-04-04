
<?php session_start();
    require_once "includes/functions.php";
    $status = "";

    if( isset($_POST['email']) && isset($_POST['pseudo']) ){

        $email= $_POST['email'];
        $pseudo= $_POST['pseudo'];

        // echo $email;
        // echo $pseudo;

        $requete = getDb() -> prepare ('INSERT INTO newsletter (pseudo_abonne, mail_abonne) VALUES (:pseudo_abonne, :mail_abonne)');
        // echo $requete;

        $requete -> bindValue ('pseudo_abonne', $pseudo, PDO :: PARAM_STR);
        $requete -> bindValue ('mail_abonne', $email, PDO :: PARAM_STR);
	    $requete -> execute ();

        $status = "Success";
        echo $status;       
    }
	else {
        $status = "Failed";
		echo $status;
	}
?>




