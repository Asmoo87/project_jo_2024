<?php

require_once('../models/company.php');

// Security XSS Attack
$_POST['name'] = htmlspecialchars($_POST['name']);
$_POST['email'] = htmspecialchars($_POST['email']);
$_POST['password'] = htmspecialchars($_POST['password']);
$_POST['password2'] = htmspecialchars($_POST['password2']);
$_POST['adress'] = htmspecialchars($_POST['adress']);
$_POST['zone'] = htmspecialchars($_POST['zone']);
$_POST['category'] = htmspecialchars($_POST['category']);
$_POST['description'] = htmspecialchars($_POST['description']);

// Condition ternaire _ true/false
$_POST['visual'] = isset($_POST['visual']) ? 1 : 0;
$_POST['hearing'] = isset($_POST['hearing']) ? 1 : 0;
$_POST['motor'] = isset($_POST['motor']) ? 1 : 0;
$_POST['cognitive'] = isset($_POST['cognitive']) ? 1 : 0;

// verifier que TOUS les champs sont remplis
if (
        !empty($_POST['name'])
    &&  !empty($_POST['email'])
    &&  !empty($_POST['password'])
    &&  !empty($_POST['password2'])
    &&  !empty($_POST['adress'])
    &&  !empty($_POST['zone'])
    &&  !empty($_POST['category'])
    &&  !empty($_POST['description'])
) {
    // Si email pas encore existant / utilisé
    if (!emailExist($_POST['email'])) {
        // si les 2 mots de passe son identiques
        if ($_POST['password'] == $_POST['password2']) {
            register($_POST);
            header("Location: ../connexion?success-register");
        }
    } else {
        header("Location: ../inscription-entreprise?exist-email");
    } 
} else {
    header("Location: ../inscription-entreprise?empty-fields");
}