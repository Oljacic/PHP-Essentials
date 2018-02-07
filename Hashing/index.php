<?php
/**
 * Created by PhpStorm.
 * Date: 2/7/2018
 * Time: 1:29 PM
 */

//Hashing problems

/*
 * Security is very important, and this are not secure ways to do hash and salt
 */

//echo md5('ilovetojump');
//echo sha1('ilovetojump');
//echo hash('sha256', 'ilovetojump');

//$password = 'ilovetojump';
//$salt = 'abcdef';
//$randomSalt = 'xyz';

//$dbpass = '1343884169866c62234a056c55908755';

//if ($dbpass === md5($password . $salt . $randomSalt)) {
//    echo 'Die motherfucker. Die' . '<br>';
//}

//This is not secure way to do, a lot problem

//$password = 'ilovetojump';

//$dbpassword = '862487a6b3824da8c9aaae9d8d96311d';

//if ($dbpassword === md5($password)) {
//    echo 'You are in!';
//}



//Generating and checking hashes

/*
 * This is part about what we should do to increase security of our password
 */

//$password = password_hash('ilovetojump', PASSWORD_DEFAULT, [
//    'cost' => 12
//]); //This is going to be much improved. It actually use yor password and find the most secure algorithm available

//$pass = 'ilovetojump';
//$dbpass = '$2y$12$QSM/sbCycic4GZiBOcSr5ehPRRCI.EjKaLeuBBwbNAzrdklObIveK';

//if (password_verify($pass, $dbpass)) {
//    echo 'You are in';
//}

//Rehashing

/*
 * Because this mighty function constantly recreate hash, we must for update for database to use new algorithm
 */

$pass = 'ilovetojump';
$dbpass = '$2y$10$bBhi2LtraY1eGwS8rsZbouztHByRvKcGDEpBBJ6yZiVoXo.inZn.S';

if ( password_verify($pass, $dbpass) ) {

    if(password_needs_rehash($dbpass, PASSWORD_DEFAULT)) {
        echo 'Needs rehash';
        echo $newHash = password_hash($pass, PASSWORD_DEFAULT);
        //store the new hash
    }
    //sigh them in
    echo 'Sign in.';
}