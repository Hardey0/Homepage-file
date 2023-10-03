<?php
$name = "Ade";
echo "$name <br>";
$food ="pizza";
$price = 5.99;
$age = 20;
$gpa = 4.4;
$tax_rate = 5.1;
$online = true;
$quantity = 3;
echo "you have ordered {$quantity}x{$food}s <br> ";
$total = null;
$total = $quantity *  $price;
echo " Your total is: \${$total}";
echo "<br>";
$x = 6;
$y = 3;
$z = null;
 $z = $x / $y;
 echo $z;
 //increment and decrement operators
 echo "<br>";
 $counter = 10;
  $counter++;
  echo $counter;
  echo "<br>";

  //operator precedence
  // ()
  // ** 
  // * / %
 // + -

 $total = 1 + 2 - 3 + 6 / 2 * 3;
 echo "$total";


