<?php 
	/* 
	Tìm các ký tự(lấy cả khoảng trắng) mà không phải là các ký tự a->z có trong biến $data
	Dùng biến $match để hứng data 
	*/
	$data = 'vudinhquang';
	// $pattern = '/\d+/';
	$pattern = '/(vu)d/';

	if (preg_match_all($pattern, $data, $match)) {
		echo "OK";
		var_dump($match);
	} else {
		echo "NO";
	}
?>