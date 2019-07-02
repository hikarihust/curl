<?php 
	/* 
	Tìm các ký tự số có trong biến $data
	Kết quả là các số dời dạc
	Dùng biến $match để hứng data 
	*/
	$data = '123dwwff4343sffe54';
	$pattern = '/\d/';

	if (preg_match_all($pattern, $data, $match)) {
		echo "OK";
		var_dump($match);
	} else {
		echo "NO";
	}
?>