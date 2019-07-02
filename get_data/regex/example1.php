<?php 
	// Kiểm tra chuỗi $data có được bắt đầu bởi ký tự a hay không
	// Dùng biến $match để hứng data
	$data = 'abac';
	$pattern = '/^a/';

	if (preg_match($pattern, $data, $match)) {
		echo "OK";
		var_dump($match);
	} else {
		echo "NO";
	}
?>