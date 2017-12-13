<?php

function quickSorting($numbers)
{
	if(count($numbers) <= 1)
		return $numbers;

	$pivot = $numbers[0];
	$left = $right = [];
		
	for($i = 1; $i < count($numbers); $i++)
	{
		if($numbers[$i] < $pivot){
			$left[] = $numbers[$i];
		}
		else{
			$right[] = $numbers[$i];
		}
	}
	

	return array_merge(quickSorting($left), [$pivot], quickSorting($right));
}

print_r(quickSorting([7, 3, 10, 6, 9, 4, 8]));