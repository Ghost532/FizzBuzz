<?php

for($i=1; $i<=100; $i++) {

	if ($i % 3 == 0 && $i % 5 == 0) {
		echo "fizzbuzz";
		echo '<hr>';
	}
	elseif ($i % 3 == 0) {
		echo "fizz";
		echo '<hr>';
	}
	elseif ($i % 5 == 0) {
		echo "buzz";
		echo '<hr>';
	}
	else {
		echo $i;
		echo '<hr>';
	}

}
