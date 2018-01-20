<?php

  // echo "Hi there ".$_GET["name"]."!";
  // print_r($_GET);

  // echo "<br>";

  // if exists
  if (is_numeric($_GET['number']) && $_GET['number'] > 0 &&
      $_GET['number']==round($_GET['number'], 0)) {

    $i = 2;
    $isPrime = true;

    while($i < $_GET['number']){

      echo "i = ".$i."<br>";

      if ($_GET['number'] % $i == 0){
        //Number is not prime!

        break;
        $isPrime = false;
      }

      $i++;
    }

    if ($isPrime){

      echo "<p>".$_GET['number']." is a prime number! </p>";

    } else {

      echo "<p>".$_GET." is not prime number! </p>";
    }
  } else if($_GET) {
    // User enter something which is not a positive whole Number
    echo "<p>Please enter a positive whole number.</p>";
  }

 ?>

 <p>Please enter a whole number.</p>

 <form>

   <input type="text" name="number">
   <input type="submit"value="Go!">

 </form>
