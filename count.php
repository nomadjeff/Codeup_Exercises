<?php

// echo `say calvin what is up man`;

$i = 1;
while($i <= 3) {
	echo `say {$i}`;
	echo `say {$i} lines of redundant code`;
	echo `say hah`;
	usleep(200);
	echo `say hah`;
	usleep(200);
	echo `say hah`;
	usleep(2000);
	$i++;
}
?>