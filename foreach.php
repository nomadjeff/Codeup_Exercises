<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thingamajig) {
	if (is_scalar($thingamajig)) {
		echo $thingamajig . PHP_EOL;
	}
	elseif (is_array($thingamajig)) {
		foreach ($thingamajig as $value) {
			echo $value . PHP_EOL;
		}
	}
}

?>