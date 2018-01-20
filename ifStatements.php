<?php

$user = "Miguel";

if ($user == "Miguel") {
  echo "Hello, Miguel!";
} else {
  echo "You are not Miguel!";
}

echo "<br><br>";

$age = 25;

// OR is ||
if ($age >= 18 && $user == "Miguel") {
  echo "You are an andult!";
} else {
  echo "You are too young, dude!";
}

 ?>
