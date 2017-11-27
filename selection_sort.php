<?php

echo "<pre> sort by smallest";
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

echo "<pre> max 3 numbers";

print_r(selectionSortMinThree([1,7, 6, 8, 9, 3, 5, 12]));


function selectionSortMinThree($numbers)
{
	$minThree = [];
	for ($i=0; $i < count($numbers); $i++) { 
		$min = $i;
		for ($x= $i + 1; $x < count($numbers); $x++) { 
			if ($numbers[$x] > $numbers[$min]) {
				$min = $x;
			}
		}

		$temp = $numbers[$i];
		$numbers[$i] = $numbers[$min];
		$numbers[$min] = $temp;

		$minThree[] = $numbers[$i];

		if (count($minThree) == 3) 
			break;
			
	}

	return $minThree;
}
