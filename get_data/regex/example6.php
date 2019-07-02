<?php 
	/* 
	Tìm các ký tự a, b, c có trong biến $data
	Dùng biến $match để hứng data 
	*/
	$data = 'vudinhquangb';
	$pattern = '/[abc]/';

	if (preg_match_all($pattern, $data, $match)) {
		echo "OK";
		var_dump($match);
	} else {
		echo "NO";
	}
?>