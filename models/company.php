<?php

require_once('db.php');

function emailExist($email)
{

    $pdo = pdoConnection();

    $reqEmail = $pdo->prepare("SELECT email FROM company WHERE email=:email");
    $reqEmail->bindParam(':email', $email);
    $reqEmail->execute();

    $countEmail = $reqEmail->rowCount();
    $emailExist = $countEmail == 1 ? 1 : 0;

    return $emailExist;
}