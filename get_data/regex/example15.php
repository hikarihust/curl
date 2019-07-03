<?php 
	/* 
	Ký tự sau $ không được là ký tự số
	Dùng biến $match để hứng data 
	Kết quả: 
		Full match: $variable
		Group 1: variable
	*/
	$data = '$variable';
	// $pattern = '/\d+/';
	$pattern = '/^\$([a-zA-Z_][a-zA-Z_0-9]*)$/';

	if (preg_match_all($pattern, $data, $match)) {
		echo "OK";
		var_dump($match);
	} else {
		echo "NO";
	}
?>