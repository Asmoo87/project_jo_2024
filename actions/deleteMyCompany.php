<?php

session_start();

require_once('../models/company.php');

deleteCompagny($_SESSION['id']);

session_destroy();

header("Location: ../accueil/");