<?php

function findIt ($mysearch, $myarray) {

	echo "Searching for $mysearch:" . PHP_EOL;

	if (array_search($mysearch, $myarray)!==false) {
		echo "TRUE" . PHP_EOL;
	}
	else {
		echo "FALSE" . PHP_EOL;
	}
}

function compareArrays ($array1, $array2) {

	$count=0;

	foreach ($array1 as $value) {
		if (array_search($value, $array2) !== false) {

			++$count;
		}
	}
	return $count;
}

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// findIt("Bob", $names);
// findIt("Tina", $names);
// findIt("Dana", $names);

echo compareArrays($names, $compare) . " matched names! \n Ah Ah Ah!" . PHP_EOL;
?>