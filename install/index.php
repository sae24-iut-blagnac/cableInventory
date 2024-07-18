<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installation de l'application</title>
    <style>
        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Bienvenue dans l'installation de l'application</h1>
    <p>Cliquez sur le bouton ci-dessous pour commencer l'installation.</p>

    <?php
    // Liste des modules PHP requis
    $required_extensions = [
        'mysqli',
        'pdo_mysql',
        'curl',
        'json',
        'mbstring'
    ];

    $missing_extensions = [];

    // Vérifier les extensions
    foreach ($required_extensions as $extension) {
        if (!extension_loaded($extension)) {
            $missing_extensions[] = $extension;
        }
    }

    if (empty($missing_extensions)) {
        echo '<p class="success">Tous les modules PHP requis sont installés.</p>';
        echo '<a href="database.php">Commencer l\'installation</a>';
    } else {
        echo '<p class="error">Les modules PHP suivants sont manquants :</p>';
        echo '<ul>';
        foreach ($missing_extensions as $missing) {
            echo '<li class="error">' . htmlspecialchars($missing) . '</li>';
        }
        echo '</ul>';
        echo '<p class="error">Veuillez installer les modules manquants et réessayer.</p>';
    }
    ?>
</body>
</html>
