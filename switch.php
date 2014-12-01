<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
$dayOfWeek = date('N');

switch($dayOfWeek) {
     case 1:
         $today = "Monday";
         break;
     case 2:
         $today = "Tuesday";
        break;
     case 3:
         $today = "Wednesday";
        break;
     case 4:
         $today = "Thursday";
        break;
     case 5:
         $today = "Friday";
        break;
     case 6:
         $today = "Saturday";
        break;
     case 7:
         $today = "Sunday";
        break;
  }
echo "This is the switch case version:" . PHP_EOL;
echo "Today is " . $today .  "." . PHP_EOL;

if ($today = "Wednesday") {
	echo "Food trucks today!" . PHP_EOL;
}

if ($dayOfWeek == 1) {
	$thisday = "Monday";
}
elseif ($dayOfWeek == 2) {
	$thisday = "Tuesday";
}
elseif ($dayOfWeek == 3) {
	$thisday = "Wednesday";
}
elseif ($dayOfWeek == 4) {
	$thisday = "Thursday";
}
elseif ($dayOfWeek == 5) {
	$thisday = "Friday";
}
elseif ($dayOfWeek == 6) {
	$thisday = "Saturday";
}
elseif ($dayOfWeek == 7) {
	$thisday = "Sunday";
}
echo PHP_EOL;
echo "This is the if-elseif version:" . PHP_EOL;
echo "Today is " . $thisday .  "." . PHP_EOL;

?>