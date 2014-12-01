<?php

echo "Select start number: ";
$startnumber=trim(fgets(STDIN));

echo "Select ending number: ";
$endnumber=trim(fgets(STDIN));

echo "Select incrementer: ";
$incrementby = trim(fgets(STDIN));

if ($incrementby == "")
{
	$incrementby=1;
}

 for ($a = $startnumber; $a <= $endnumber; $a += $incrementby) {
     echo "\$a has a value of {$a}\n";
 }

?>