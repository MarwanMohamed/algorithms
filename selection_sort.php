<?php

echo "<pre>";
print_r(selectionSort([1,7, 4, 6, 8, 2, 3, 5]));


function selectionSort($numbers)
{
	for ($i=0; $i < count($numbers); $i++) { 
		$min = $i;
		for ($x= $i + 1; $x < count($numbers); $x++) { 
			if ($numbers[$x] < $numbers[$min]) {
				$min = $x;
			}
		}

		$temp = $numbers[$i];
		$numbers[$i] = $numbers[$min];
		$numbers[$min] = $temp;
	}

	return $numbers;
}
