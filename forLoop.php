<?php


$family = array("Miguel", "MiguelJr", "Nalda", "Gabriella");

foreach ($family as $key => $value) {

  $family[$key] = $value." Rocha";
  echo "Array item ".$key." is ".$value."<br>";
}

echo "<br><br>";

for ($i = 0; $i <sizeof($family); $i++) {
  echo $family[$i]."<br>";
}

echo "<br><br>";

for ($i = 10; $i >= 0 ; $i = $i - 1){
  echo $i."<br>";
}


 ?>
