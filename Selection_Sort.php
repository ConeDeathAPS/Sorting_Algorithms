<?php

function array_swap($arr, $i1, $i2) {
	$temp = $arr[$i1];
	$arr[$i1] = $arr[$i2];
	$arr[$i2] = $temp;
	return $arr;
}

function selection_sort($arr) {
	$time_start = microtime(true);

	for ($x = 0; $x < count($arr); $x++) {
		$min = $arr[$x];
		$max = $arr[$x];
		for ($i = $x; $i < count($arr); $i++) {
			if ($arr[$i] < $min) {
				$min = $arr[$i];
				$arr = array_swap($arr, $i, $x);
			} else if ($arr[$i] > $max) {
				$max = $arr[$i];
				$arr = array_swap($arr, count($arr) - 1, $i);
			}
		}
	}
	var_dump($arr);
	$time_stop = microtime(true);
	echo $time_stop - $time_start;
}

$arr = array();
for ($o = 1; $o <= 10000; $o++) {
	$i = rand(1, 10000);
	$arr[] = $i;
} 

selection_sort($arr);

?>