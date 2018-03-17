<?php
/**
 * Created by PhpStorm.
 * User: SOul
 * Date: 2/13/2018
 * Time: 2:40 PM
 */

//Decoding JSON + Hacker news example

/*
 * Reading json and decoding.
 */

//$topStoryIds = array_slice(json_decode(file_get_contents('https://hacker-news.firebaseio.com/v0/topstories.json')), 0, 10);

//foreach ($topStoryIds as $id) {
//    $story = json_decode(file_get_contents('https://hacker-news.firebaseio.com/v0/item/'.$id.'.json'));
//
//    echo "<a href='{$story->url}'>{$story->title}</a> by {$story->by} <br>";
//}

//var_dump($topStoryIds);

//Encoding JSON

/*
 *
 */

//$db = new PDO('mysql:host=localhost;dbname=project', 'root', '');
//
//
//$users = $db->query('SELECT * FROM users')->fetchAll(PDO::FETCH_OBJ);
//
//echo json_encode($users);



$response = file_get_contents('http://localhost/PHP-Essentials/JSON/users.php');

$users = json_decode($response);

foreach ($users as $user) {
    echo $user->name . ' ('. $user->email .')<br>';
}