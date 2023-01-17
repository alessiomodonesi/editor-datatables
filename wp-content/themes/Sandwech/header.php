<?php

include_once dirname(__FILE__) . '/php/login/checkLogin.php';
session_start();
$user = checkLogin();

// utenti
$admin = "admin@gmail.com";
$vendor = "paninara@gmail.com";
$mng = "mng@gmail.com";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sandwech</title>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/default/jquery-3.6.0.min.js"></script>
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg bg-warning">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img src="http://localhost/sandwech/wp-content/themes/Sandwech/assets/img/logo.png" alt="logo" width="35" height="30" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="http://localhost/sandwech">Home</a>
                        </li>
                        <?php if ($user[0]->email == $vendor || $user[0]->email == $admin) : ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="http://localhost/sandwech/vendite">Vendite</a>
                            </li>
                        <? endif ?>
                        <?php if ($user[0]->email == $mng || $user[0]->email == $admin) : ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="http://localhost/sandwech/management">Management</a>
                            </li>
                        <? endif ?>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>