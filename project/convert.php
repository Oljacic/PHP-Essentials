<?php

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'https://api.fixer.io/latest', [
    'query' => [
        'base' => $_GET['from'],
        'symbols' => $_GET['to'],
    ]
]);

$result = json_decode($response->getBody());

$converted = number_format($result->rates->{$_GET['to']} * $_GET['value'], 2);



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currency conversion</title>
</head>
<body>

    <?php echo htmlspecialchars($_GET['value'], ENT_QUOTES, 'UTF-8'); ?>
    <?php echo htmlspecialchars($_GET['from'], ENT_QUOTES, 'UTF-8'); ?> is
    <?php echo $converted; ?>
    <?php echo htmlspecialchars($_GET['to'], ENT_QUOTES, 'UTF-8'); ?>

</body>
</html>
