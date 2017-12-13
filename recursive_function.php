<?php


function recursive(array $array)
{
	foreach ($array as $key => $value) {
		echo is_numeric($key) ? '' : $key . ' => ' ;
		if (gettype($value) != 'array') {
			 echo $value . '<br> ';
		} else {
			recursive ($value);
		}
	}
}


$array = [
	'name' => 'marwan',
	'age' => '23',
	'jobs' => ['developer', 'designer'],
	'hobbits' => ['guitar', 'gym', 'travel']
];


echo recursive($array);
