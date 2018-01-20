<?php

  $emailTo = "miguelrochajr@goodrink.co";

  $subject = "Will work!";

  $body = "LETS DRINK!";

  $headers = "From: miguelsrochajr@gmail.com";

  if (mail($emailTo, $subject, $body, $headers)){

    echo "Email sent successfully!";

  } else {
    echo "The email could not be sent.";
  }

 ?>
