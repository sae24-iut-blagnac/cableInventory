<?php
$config_file_path = '../config/config.php';

if (file_exists($config_file_path)) {
    die('L\'installation a déjà été effectuée. <a href="setup.php"> Continuer</a>');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db_host = $_POST['db_host'];
    $db_user = $_POST['db_user'];
    $db_password = $_POST['db_password'];
    $db_name = $_POST['db_name'];

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if (!$conn) {
        $error = 'Erreur de connexion : ' . mysqli_connect_error();
    } else {
        $config_content = "<?php\n";
        $config_content .= "define('DB_HOST', '$db_host');\n";
        $config_content .= "define('DB_USER', '$db_user');\n";
        $config_content .= "define('DB_PASSWORD', '$db_password');\n";
        $config_content .= "define('DB_NAME', '$db_name');\n";
        $config_content .= "define('DB_CHARSET', 'utf8');\n";
        $config_content .= "define('DB_COLLATE', '');\n";
        $config_content .= "\$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);\n";
        $config_content .= "if (!\$conn) { die('Erreur de connexion : ' . mysqli_connect_error()); }\n";
        $config_content .= "define('BASE_URL', 'http://monapplication.com');\n";
        $config_content .= "define('ROOT_PATH', __DIR__);\n";
        $config_content .= "define('SECRET_KEY', '2G5J3GSn45W297GLujH5');\n";
        $config_content .= "define('APP_NAME', 'Cable Management');\n";
        $config_content .= "?>";

        if (file_put_contents($config_file_path, $config_content)) {
            header('Location: setup.php');
            exit;
        } else {
            $error = 'Erreur lors de la création du fichier config.php.';
        }
    }
}

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
?>

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
    <?php if (!empty($missing_extensions)): ?>
        <p class="error">Les modules PHP suivants sont manquants :</p>
        <ul>
            <?php foreach ($missing_extensions as $missing): ?>
                <li class="error"><?php echo htmlspecialchars($missing); ?></li>
            <?php endforeach; ?>
        </ul>
        <p class="error">Veuillez installer les modules manquants et réessayer.</p>
    <?php else: ?>
        <p class="success">Tous les modules PHP requis sont installés.</p>
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="post" action="">
            <label for="db_host">Hôte de la base de données :</label>
            <input type="text" id="db_host" name="db_host" required><br><br>
            <label for="db_user">Nom d'utilisateur :</label>
            <input type="text" id="db_user" name="db_user" required><br><br>
            <label for="db_password">Mot de passe :</label>
            <input type="password" id="db_password" name="db_password" required><br><br>
            <label for="db_name">Nom de la base de données :</label>
            <input type="text" id="db_name" name="db_name" required><br><br>
            <input type="submit" value="Configurer">
        </form>
    <?php endif; ?>
</body>
</html>
