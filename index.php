<?php
  echo 'les chiffres impairs jusqu\'à 300 sont :';
  for($number=0;$number<=300;$number=$number++) {
    $number++;
    echo $number. ' ';
  }

  echo '<br /> ou <br />';
  $number2 = 0;

  while ($number2 < 300) {
    if ($number2%2 != 0){
      echo $number2 . ' ';
    }
    $number2++;
  }
?>
