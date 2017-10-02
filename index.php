<?php
  echo 'les chiffres impairs jusqu\'à 300 sont : ';
  for($number=0;$number < 300;$number++) {
    if ($number%2 == 1){
      echo $number . ' ';
    }
  }
  echo 'ou alors : ';
  $number2 = 0;
  while ($number2 < 300) {
    if ($number2%2 == 1){
      echo $number2 . ' ';
    }
    $number2++;
  }
?>
