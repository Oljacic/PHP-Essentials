<?php
/**
 * Created by PhpStorm.
 * User: SOul
 * Date: 2/14/2018
 * Time: 12:08 PM
 */

//Introduction and file_get_contents

/*
 *
 */


//cURL basic

/*
 *
 */

//$ch = curl_init();
//
//curl_setopt($ch, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/topstories.json');
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//
//$result = curl_exec($ch);
//
//if (curl_getinfo($ch)['http_code'] !== 200) {
//    echo 'Something went wrong!';
//    die();
//}
//
//$topStoryIds = array_slice(json_decode($result), 0, 5);
//
//foreach ($topStoryIds as $id) {
//    curl_setopt($ch, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/item/'.$id.'.json');
//
//    $result = curl_exec($ch);
//
//    if (curl_getinfo($ch)['http_code'] === 200) {
//        $story = json_decode($result);
//
//        echo '<a href="'.$story->url.'">'.$story->title.'</a> by '.$story->by.'<br>';
//    }
//}


// Posting with cURL

/*
 * Post request with cURl
 */

//$ch = curl_init();
//
//curl_setopt($ch, CURLOPT_URL, "http://localhost/PHP-Essentials/API's/server.php");
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//
//curl_setopt($ch, CURLOPT_POST, true);
//
//curl_setopt($ch, CURLOPT_POSTFIELDS, [
//   'text' => 'cURL is fun!',
//]);
//
//$result = curl_exec($ch);
//
////var_dump(curl_getinfo($ch));
//
//if (curl_getinfo($ch)['http_code'] !== 200) {
//    $result = json_decode($result);
//    echo $result->data->error;
//    die();
//}
//
//$response = json_decode($result);
//
//echo $response->data->text;



// Using Guzzle

/*
 *
 */

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

$client = new Client();

try {
    $response = $client->request('POST', 'http://localhost/PHP-Essentials/API\'s/server.php', [
        'form_params' => [
            'text' => 'Guzzle is great',
        ]
    ]);
}
catch (RequestException $e) {
    echo json_decode($e->getResponse()->getBody())->data->error;
    return;
}

echo json_decode($response->getBody())->data->text;

// Project: Currency conversion API

/*
 *
 */