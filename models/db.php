<?php

function pdoConnection()
{
    try {

        $DB_NAME = 'arex';
        $DB_DSN = "mysql:host=localhost;dbname=$DB_NAME;charset:utf8";
        $DB_USER = 'root';
        $DB_PASSWORD = '';

        $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        return $pdo;

    } catch (exception $e) {
        die('Erreur' .$e->getMessage());
    }
}