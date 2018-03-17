<?php
/**
 * Created by PhpStorm.
 * User: SOul
 * Date: 2/14/2018
 * Time: 11:33 AM
 */

$db = new PDO('mysql:host=localhost;dbname=project', 'root', '');


$users = $db->query('SELECT * FROM users')->fetchAll(PDO::FETCH_OBJ);

echo json_encode($users);