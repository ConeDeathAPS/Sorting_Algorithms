<?php

function insertion_sort($arr) {
	$time_start = microtime(true);

for ($i = 0; $i < count($arr) - 1; $i++) {
	if ($arr[$i] >= $arr[$i + 1]) { // if the value of the current pointer location is greater than the one to the right of it, then begin the sorting 
		$c_val = $arr[$i + 1]; //pull the lower value out and set up the sorting algorithm
		$x = $i; //Set a new variable to use for the array index so we don't lose our place overall
		while ($x > -1 && $c_val < $arr[$x]) { // move items in the array to the right as long as they are greater than the current value
			$arr[$x+1] = $arr[$x]; //move items in the array to the right
			$x--; //only decrement x if it is greater than 0			
		}
		$arr[$x + 1] = $c_val; //after sorting, and we are in the right position to insert the value, set the value.
	}
}

var_dump($arr);
$time_stop = microtime(true);
echo $time_stop - $time_start;

}

$arr = [];
for ($i = 1; $i <= 10000; $i++) {
	$arr[] = rand(1, 10000);
}

insertion_sort($arr);

?>