<?php
function swap($arr, $i1, $i2) {
	$temp = $arr[$i1];
	$arr[$i1] = $arr[$i2];
	$arr[$i2] = $temp;
	return $arr;
}

function bubble_sort($arr) {
$time_start = microtime(true);
$x = count($arr) - 1;
while ($x >= 0) {
	for ($i = 0; $i < count($arr) - 1; $i++) {
		$i2 = $i + 1;
		if ($arr[$i] > $arr[$i2]) {
			$arr = swap($arr, $i, $i2);
		}
	}
	$x--;
}
$time_stop = microtime(true);
echo $time_stop - $time_start;
var_dump($arr);
}



$arr = [];
for ($i = 1; $i <= 1000; $i++) {
	$arr[] = rand(1, 10000);
}

bubble_sort($arr);

?>