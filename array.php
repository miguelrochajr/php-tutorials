<?php

// How to crete an array
$myArray = array("Miguel", "Maria", "Monica", "Clara");

$myArray[] = "Lindinalda"; // Pushes the variable to the end

print_r($myArray);

echo $myArray[1];

echo "<br><br>";

$anotherArray[0] = "pizza";
$anotherArray[1] = "yougurt";
$anotherArray[5] = "coffee";
$anotherArray["myFavouriteFood"] = "Rapadura Burger"; // Note that the arrays maps the index to the value

print_r($anotherArray);

echo "<br><br>";


$thirdArray = array(

    "France" => "French",
    "USA" => "English",
    "Germany" => "German");


unset($thirdArray["France"]); // Popping "Farnce" out of the Array

print_r($thirdArray);

echo sizeof($thirdArray);

 ?>
