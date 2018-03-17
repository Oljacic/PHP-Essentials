<?php
/**
 * Created by PhpStorm.
 * User: SOul
 * Date: 2/15/2018
 * Time: 3:28 PM
 */

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    return;
}

if (!isset($_POST['text'])) {
    http_response_code(400);

    echo json_encode([
        'data' => [
            'error' => 'Text is required.',
        ]
    ]);

    die();
}

$text = strrev($_POST['text']);

http_response_code(200);

echo json_encode([
    'data' => [
        'text' => $text,
    ]
]);