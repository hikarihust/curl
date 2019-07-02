<?php 
	// Kiểm tra chuỗi $data có chứa ký tự j ở cuối chuỗi hay không
	// Dùng biến $match để hứng data
	$data = 'abacfesfefgaj';
	$pattern = '/j$/';

	if (preg_match($pattern, $data, $match)) {
		echo "OK";
		var_dump($match);
	} else {
		echo "NO";
	}
?>