<?php

$test=5;

while ($test <= 15)
{
	echo $test . "\n";
	$test += 1;
}
echo "This is my number\n";
$mynumber=0;
do
{
	echo "$mynumber\n";
	$mynumber += 2;
}
while ($mynumber <= 100);

echo "\nThis is my other number\n";
$myothernumber=100;
do
{
	echo "$myothernumber\n";
	$myothernumber -= 5;
}
while ($myothernumber >= -10);

echo "\nThis is my last number set\n";
$mylastnumber=2;
do
{
	echo "$mylastnumber\n";
	$mylastnumber *= $mylastnumber; 

}
while ($mylastnumber < 1000000);


?>