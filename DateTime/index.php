<?php
/**
 * Created by PhpStorm.
 * Date: 2/5/2018
 * Time: 2:01 PM
 */

//Introduction to DateTime

/*
 * Class is for manipulating with date format.
 */

//$date = new DateTime;
//
//var_dump($date);
//


//Formatting, setter and getters

/*
 * Simple show how setter and getters can do with date time,
 * How can you chain methods,
 * Working with static,
 * Get time, timezone, timestamp
 * And work with object
 */

//$date = new DateTime;

//echo $date->format('dS M Y'); //Format date

//echo  $date->getTimestamp(); //From 1st january

//var_dump($date->getTimezone()); //This is another object DateTimeZone

//echo $date->getTimezone()->getName();//Get current timezone name

//Creating date in another format using static

//$dateString = '2017-12-16';

//$date = DateTime::createFromFormat('Y-m-d', $dateString);

//echo $date->format('dS M Y');

//$date = (new DateTime)->setTimestamp('771056768'); //Saving some lines

//echo $date->format('dS M Y');

//$date = new DateTime;
//
//$date->setDate(2016, 11, 16);
//$date->setTime(12, 30, 16);
//
//var_dump($date);




//Modifying

/*
 * Set Date to modify, adding subs
 * Two ways to add a date or sub. it
 * First is harder way, more complicated
 * Second way you can direct pass in object constructor,
 * or use modify function
 * Last you can separate a current date and added date
 */

//$date = new DateTime;

//$date->add(new DateInterval('P10DT2H'));//Adding to days +10, hours by +2, Creating new object inside add function.
//$date->sub(new DateInterval('P1Y2M2DT1H'));//Subtracting same
//This P10D means, PERIOD 10 DAYS, TIME 2 HOURS. P is very important

//$hours = 1;

//$date->add(new DateInterval('PT'.$hours.'H'));

//Better way to do this is:

//$date = new DateTime('-2 days 5 hours');

//$date = new DateTime;

//$date->setDate(1980, 12, 25);

//$date->modify('+2 days 5 hours');

//Trying to use current date and added date

//$newDate = $date->modify('+2 days');//Call by reference, that means that automatic $date var is increased

//$newDate = clone $date;

//$newDate = $newDate->modify('+2 days');

//var_dump($date);


//Differences

/*
 * Get difference between two dates
 */

//$date = new DateTime;

//$myBirthday = (new DateTime)->setDate(2018, 8, 6)->setTime(06,25,00);//You can set yours date birth or any other date if it a future he count how many days till the event, if you set past it will count how many days past till that date.

//$myBirthday = (new DateTime(' 8 jun '))->setTime(06,25,00);

//$timeUntilBirthday = $date->diff($myBirthday);

//var_dump($timeUntilBirthday);
//var_dump($timeUntilBirthday->d);//date
//var_dump($timeUntilBirthday->days);

//Think how can you put in some useful format
//Example
//echo $timeUntilBirthday->format('%m moths %d days %h hours'); //%amount

//Comparisons

/*
 * Compare two dates
 */

//$date = new DateTime('2018-02-07 12:00:00');
//$date2 = new DateTime('2018-02-9');

//if ($date > $date2) {
//    echo 'Yes';
//}

//Now checking specific parts of dates

//$date = new DateTime('2018-02-07 12:00:00');

//if((int) $date->format('Y') < 2019) {
//    echo  'Yes.';
//}

//Timezones

/*
 * Can be very hard to work with, set timezone
 */

//$date = new DateTime;
//
//$date->setTimezone(new DateTimeZone('Europe/Belgrade'));

//this in short way

//$date = new DateTime('now', new DateTimeZone('Europe/London'));

//var_dump($date);

//var_dump(DateTimeZone::listIdentifiers());


//Set timezone for application

//$timezone = 'Europe/London';

//date_default_timezone_set($timezone);


//DateTime periods

/*
 * Setting start date, interval, end date
 * It is simple!
 */

//$start = new DateTime;

//$start->setTime(8, 0, 0);

//$end = clone $start;
//$end->setTime(20, 0, 0);

//$interval = new DateInterval('PT30M');

//$dateRange = new DatePeriod($start, $interval, $end);

//foreach ($dateRange as $date) {
//    var_dump($date);
//}

//Creating form
?>

<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!---->
<!--<select name="time" id="time">-->
<!--    --><?php //foreach ($dateRange as $date): ?>
<!--        <option value="--><?php //echo $date->format('H:i:s'); ?><!--">--><?php //echo $date->format('H:i:s'); ?><!--</option>-->
<!--    --><?php //endforeach; ?>
<!--</select>-->
<!---->
<!--</body>-->
<!--</html>-->

<?php

//Useful functions

/*
 *
 */

//time(); //unix timestamp
//microtime();//Microtime for generating random things, past a parameter bool true and you will get float, first is unix timestamp other is microtime

//date('d M Y');// you can use format
//checkdate(7, 31, 2018);//checking date values are true or false, always is good to check date before manipulate with it

//foreach (timezone_identifiers_list() as $timezone) {
//    echo $timezone. '<br>';
//}


//Project: Human difference calculator

/*
 * To do something and make useful of this things we just learned
 * Lets make project it is good example how can you use it for your project
 */

date_default_timezone_set('Europe/London');

function diffForHumans(DateTime $date) {

    $currentDate = new DateTime;

    $difference = $currentDate->diff($date);

    $unit = 'second';
    $count = $difference->s;

    switch (true) {

        case $difference->y > 0:
            $unit = 'year';
            $count = $difference->y;
            break;
        case $difference->m > 0:
            $unit = 'month';
            $count = $difference->m;
            break;
        case $difference->d > 0:
            $unit = 'day';
            $count = $difference->d;
            break;
        case $difference->h > 0:
            $unit = 'hour';
            $count = $difference->h;
            break;
        case $difference->i > 0:
            $unit = 'minute';
            $count = $difference->i;
            break;
    }

    if ($count === 0) {
        $count = 1;
    }

    if ($count !== 1) {
        $unit .= 's';
    }

    $inversion = $difference->invert === 0 ? 'from now' : 'ago';

    return "{$count} {$unit} {$inversion}";
}

$date = new DateTime('+2 days');

echo diffForHumans($date);





