<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <?php
    require_once 'vendor/autoload.php';
    require_once 'route.php';
    $cssFile = "theme-dark.css";
    ?>
    <title><?=$router->getTitle()?></title>
    <link rel="stylesheet" href="./app/view/assets/theme/<?=$cssFile?>">
    <script src="main.js" />

</head>
<body>
    <?php
    use Sys\Connection\Database;

    $db = new Database();
    $pdo = $db->connect();
    $stmt = $pdo->prepare("SELECT * FROM users");
    $stmt->execute();
    $users = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($stmt);
    ?>
<!-- implementar o level 2 -->
<!-- implementar o toast -->
</body>
</html>