<?php
if (!empty($_POST)) {
    extract($_POST);
    $valider = true;

    if (empty($name)) {
        $valider = false;
        $errorname = 'veuillez saisir votre nom !!';
    }
    if (empty($email)) {
        $valider = false;
        $erroremail = 'veuillez saisir votre email !!';
    }
    if (empty($message)) {
        $valider = false;
        $errormessage = ' veuillez saisir votre message !!';
    }

    if ($valider == true) {

        require 'database.php';

        $req = $pdo->prepare('INSERT INTO membre(name, email, message, date_publication) VALUES (?, ?, ?, NOW())');
        $req->execute(array($name, $email, $message));

        $erreur = "<div class='alert alert-success'>Le formulaire à bien été envoyé !!</div>";

        unset($name);
        unset($email);
        unset($message);
        /*unset($erreur);*/
    } else {
        $erreur = "<div class='alert alert-danger'>Attention ! une erreur est survenue </div>";
        
    } 

}
