<?php

function breadth_first_search($name)
{
	$searched = [];
	$search = [];
	$search[] = $name;

	while ($search) {
		$person = array_pop($search);
		if(! in_array($person, $searched)){
			if (substr($person, 0, 1) == 'A') {
				return 'Yes this is person name start with A ('. $person . ')';
			} else {
				$searched[] = $person; 
				$search[] = 'Ahmed'; // add marwsan frinds (ahmed);
			}
		}
	}

	return 'No found person name start with A';

}

echo breadth_first_search('Marwan');