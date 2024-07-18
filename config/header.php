<?php
// Inclure le fichier de configuration
require_once 'config.php';

// Démarrer la session si ce n'est pas déjà fait
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/styles.css">
    <!-- Inclure d'autres feuilles de style ou fichiers JS ici -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?php echo BASE_URL; ?>/index.php">Accueil</a></li>
                <li><a href="<?php echo BASE_URL; ?>/about.php">À propos</a></li>
                <li><a href="<?php echo BASE_URL; ?>/contact.php">Contact</a></li>
                <li><a href="<?php echo BASE_URL; ?>/connexion.php">Connexion</a></li>
                <li><a href="<?php echo BASE_URL; ?>/inscription.php">Inscription</a></li>
                <!-- Ajouter d'autres éléments de navigation ici -->
            </ul>
        </nav>
    </header>
