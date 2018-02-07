<?php
/**
 * Created by PhpStorm.
 * User: SOul
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
 *
 */

$date = new DateTime;

//$myBirthday = (new DateTime)->setDate(2018, 8, 6)->setTime(06,25,00);//You can set yours date birth or any other date if it a future he count how many days till the event, if you set past it will count how many days past till that date.

$myBirthday = (new DateTime(' 8 jun '))->setTime(06,25,00);

$timeUntilBirthday = $date->diff($myBirthday);

var_dump($timeUntilBirthday);
var_dump($timeUntilBirthday->d);//date
var_dump($timeUntilBirthday->days);

//Think how can you put in some useful format
//Example
echo $timeUntilBirthday->format('%m moths %d days %h hours'); //%amount

//Comparisons

/*
 *
 */


//Timezones

/*
 *
 */


//DateTime periods

/*
 *
 */



//Useful functions

/*
 *
 */


//Project: Human difference calculator

/*
 *
 */

