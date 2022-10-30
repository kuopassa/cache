<?php

declare(strict_types=1);

function cache(string $key,string $data = ''):string {
	
	$key .= '.txt';

	if (empty($data)) {
	
		$response = file_get_contents($key);
	}
	else {
		
		$response = file_put_contents(
			$key,
			$data,
			LOCK_EX
		);
	}
	
	return (string) $response;
}

$test = 'Lorem ipsum dolor sit amet.';

$put = cache('test',$test);

$get = cache('test');