<?php
/**
 * Created by PhpStorm.
 * User: SOul
 * Date: 2/15/2018
 * Time: 5:11 PM
 */

$currencies = require 'config/currencies.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currency conversion</title>
</head>
<body>
    <form action="convert.php" method="get">
        <input type="text" class="text" name="value" id="value">

        <select name="from" id="from">
            <?php foreach ($currencies as $currency): ?>
                <option value="<?php echo $currency ?>"><?php echo $currency ?></option>
            <?php  endforeach ?>
        </select>
        to
        <select name="to" id="to">
            <?php foreach ($currencies as $currency):?>
            <option value="<?php echo $currency ?>"><?php echo $currency ?></option>
            <?php endforeach ?>
        </select>
        <button type="submit">Convert</button>
    </form>
</body>
</html>

