<?php

function humanizedList($array, $alpha=false) {

	if ($alpha == true) {
		sort($array);
	}

	$lastName = array_pop($array);

	$string = implode(', ', $array);

	return $string . ", and" . $lastName;
}

$physicistsString="Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark";

$physicistsArray = explode(', ', $physicistsString);

$famousFakePhysicists = humanizedList($physicistsArray, true);

echo "\nSome of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n" . PHP_EOL;

?>