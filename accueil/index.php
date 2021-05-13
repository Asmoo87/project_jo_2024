<?php

session_start();

?>

<!doctype html>
<html class="h-100" lang="fr">

<head>
    <?php require_once('../includes/head.php'); ?>
    <title>Accueil</tittle>
    <link href="./style.css" rel="stylesheet">
</head>

<body id="home" class="d-flex flex-column h-100">
    <!-- NAVBAR --><?php require_once('../components/navbar.php'); ?>

    <!-- cover -->
    <div class="cover">
        <h1 class="display-4 fw-normal">Amitié Respect Excellence</h1>
        <p class="lead fw-normal">Pour des Jeux Olympiques 2024 accessibles !</p>
    </div>

    <main class="container">
        <!-- services --><?php require_once('./services.php'); ?>
        <!-- handicap --><?php require_once('./handicap.php'); ?>
        <!-- about --><?php require_once('./about.php'); ?>
        </main>
    <!-- NEWSLETTER -->
    <div id="newsletter" class="container-fluid">
        <div class="text-center">
            <h3 class="mb-4">Abonnez-vous à notre Newsletter</h3>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <button type="button" class="btn btn-light"> C'est parti !</button>
        </div>
    </div>
    </section>
    <!-- contact --><?php require_once('./contact.php'); ?>


    <!-- FOOTER --><?php require_once('../components/footer.php'); ?>

    <!--- SCRIPTS --><?php require_once('../includes/scripts.php'); ?>
</body>

</html>