<?php

for ($a = 1; $a <= 100; $a++) 
{

     if ($a % 15 == 0)
     {
     	$b = "FizzBuzz";
     }

     elseif ($a % 3 == 0)
     {
     	$b = "Fizz";
     }

     elseif ($a % 5 == 0)
     {
     	$b = "Buzz";
     }

     else 
     {
     	$b = $a;
     }

     echo "{$b}\n";
}
?>