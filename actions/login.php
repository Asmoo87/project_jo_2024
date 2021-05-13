<?php

session_start();

require_once('../models/company.php');

//XSS Attack
$_POST['email'] = htmlspecialchars($_POST['email']);
$_POST['password'] = htmlspecialchars($_POST['password']);

if (
        !empty($_POST['email'])
    &&  !empty($_POST['password'])
){
    // Si email existant
    if (emailExist($_POST['email'])) {

        // Si le Mot de passe est correcte
        if(correctPassword($_POST['email'], $_POST['password'])) {
            login($_POST['email']);
            header("Location: ../mon-entreprise?success-login");
        } else {
            header("Location: ../connexion/index.php?error");
        }
    } else {
        header("Location: ../connexion/index.php?error");
    }
} else {
    header("Location: ../connexion?empty-fields");
}