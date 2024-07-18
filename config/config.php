<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'alex');
define('DB_PASSWORD', 'passroot');
define('DB_NAME', 'cable');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$conn) { die('Erreur de connexion : ' . mysqli_connect_error()); }
define('BASE_URL', 'http://monapplication.com');
define('ROOT_PATH', __DIR__);
define('SECRET_KEY', '2G5J3GSn45W297GLujH5');
define('APP_NAME', 'Cable Management');
?>