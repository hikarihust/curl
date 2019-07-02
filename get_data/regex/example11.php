<?php 
	/* 
	Tìm các ký tự(lấy cả khoảng trắng) mà không phải là các ký tự a->z có trong biến $data
	Dùng biến $match để hứng data 
	*/
	$data = '123  adwwff4343s  ffe 54';
	// $pattern = '/\d+/';
	$pattern = '/[0-9]{3}/';

	if (preg_match_all($pattern, $data, $match)) {
		echo "OK";
		var_dump($match);
	} else {
		echo "NO";
	}
?>