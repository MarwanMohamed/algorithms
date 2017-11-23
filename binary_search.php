<?php

function binarySearch($numbers, $value) 
{
	$min = 0;
	$max = count($numbers)-1;
 	sort($numbers);
 	
	while ($min <= $max) {
		$mid = ($min + $max) >> 1;
 
		if ($numbers[$mid] > $value) {
			$max = $mid - 1;
		} elseif ($numbers[$mid] < $value) {
			$min = $mid + 1;
		} else{
			return "$value found";
		}
	}
 
	return "$value not found";
}

$nums = [];

for ($i=0; $i <= 100 ; $i++) { 
	$nums[] = $i;
}

echo binarySearch($nums, 68). "<br>";
