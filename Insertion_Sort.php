<?php

function insertion_sort($arr) {

	for ($i = 0; $i < count($arr) ; $i++) { 
		$val = $arr[$i];
		$x = $i + 1;
	}

var_dump($arr);

}


$arr = array(5, 4, 3, 2, 1);

insertion_sort($arr);

?>