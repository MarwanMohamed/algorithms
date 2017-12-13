<?php

function sumNum($nums)
{

	if (empty($nums))
		return 0;

	return array_shift($nums) + sumNum($nums);
}


echo 'sum : ' . sumNum([3,2,1,4]). '<br>';


function getCount($nums)
{
	if (empty($nums))
		return 0;

	array_shift($nums);
	return 1 + getCount($nums);
}


echo 'count : ' . getCount([3,2,1,4,1]). '<br>';