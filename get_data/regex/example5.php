<?php 
	/* 
	Lấy ra toàn bộ các chữ a hoặc các chuỗi a liên tiếp có trong biến $data
	Dùng biến $match để hứng data 
	*/
	$data = 'vudinhquangaa';
	$pattern = '/a+/';

	if (preg_match_all($pattern, $data, $match)) {
		echo "OK";
		var_dump($match);
	} else {
		echo "NO";
	}
?>