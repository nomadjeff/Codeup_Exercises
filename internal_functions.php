<?php

$nothing = null;
$something = 'stuff';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function checkit($a) {

	if (isset($a)) {
		echo "The variable is SET." . PHP_EOL;
	}
	else {
		echo "The variable is EMPTY." . PHP_EOL;
	}
}

// unset ($something);


// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

checkit($nothing);

// TEST: If var $something is set, display '$something is SET'

checkit($something);
checkit($array);

// Serialize the array $array, and output the results

$array = (serialize($array));
echo $array . PHP_EOL;

$array = (unserialize($array));
var_dump ($array) . PHP_EOL;

// Unserialize the array $array, and output the results