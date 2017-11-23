<?php

function binary($numbers, $value)
{
	$min = 0;
	$max = count($numbers) -1;
	$result = false;

	while ($min < $max) {
		$mid = $max + ($min - $max) / 2;

		if ($numbers[$mid] < $value) {
			$min = $mid + 1;
		} elseif ($numbers[$mid] > $value) {
			$max = $mid - 1;
		} else {
			$result = true;
			return "$value found";
		}
	}

	if (!$result) 
		return "$value not found";
}

echo binary([1, 2, 3, 4, 6, 7, 8, 9], 2);
