<?php 
	/* 
	Tìm các ký tự số hoặc ký tự số liên tiếp có trong biến $data
	Dùng biến $match để hứng data 
	*/
	$data = '123dwwff4343sffe54';
	// $pattern = '/\d+/';
	$pattern = '/[0-9]+/';

	if (preg_match_all($pattern, $data, $match)) {
		echo "OK";
		var_dump($match);
	} else {
		echo "NO";
	}
?>