<?php

function checkforerrors($userinput) {
	if (!is_numeric($userinput)) {
		echo $userinput . " is not a number! Try again.\n";
		return 1;
	}
	elseif ($userinput==0) {
		echo "You cannot enter zero for this input.\n";
		return 2;
	}
	else {
		return 0;
	}
}

do {
	echo "Enter your first number: ";
	$input1=trim(fgets(STDIN));
	
	//
	$error = checkforerrors($input1);
		// if (!is_numeric($input1)) {
		// 	echo $input1 . " is not a number! Try again.\n";
		// 	$error=1;
		// }
		// else {
		// 	$error=0;
		// }
}
while($error <> 0);

do {
	echo "Enter your second number: ";
	$input2=trim(fgets(STDIN));

	if (!is_numeric($input2)) {
		echo $input2 . " is not a number! Try again.\n";
		$error=1;
	}
	elseif ($input2==0) {
		echo "You cannot enter zero for this input.\n";
		$error=2;
	}
	else {
		$error=0;
	}
}
while($error <> 0);

function add($a, $b) {
    echo $a + $b . PHP_EOL;
}
echo "\nTesting Add Function: " . PHP_EOL;
echo "$input1 plus $input2 = ";
add ($input1, $input2);

function subtract($a, $b) {
    echo $a - $b . PHP_EOL;
}
echo "\nTesting Subtract Function: " . PHP_EOL;
echo "$input1 minus $input2 = ";
subtract ($input1, $input2);

function multiply($a, $b) {
    echo $a * $b . PHP_EOL;
}
echo "\nTesting Multiply Function: " . PHP_EOL;
echo "$input1 multiplied by $input2 = ";
multiply ($input1, $input2);

function divide($a, $b) {
    echo $a / $b . PHP_EOL;
}
echo "\nTesting Divide Function: " . PHP_EOL;
echo "$input1 divided by $input2 = ";
divide ($input1, $input2);

function modulus($a, $b) {
    echo $a % $b . PHP_EOL;
}
echo "\nTesting Modulus Function: " . PHP_EOL;
echo "$input1 modulus $input2 = ";
modulus ($input1, $input2);


?>