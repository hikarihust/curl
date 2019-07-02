<?php 
	// Kiểm tra chuỗi $data có chứa ký tự a hay không
	// Lấy tất cả các chữ a có trong chuỗi data
	// Dùng biến $match để hứng data
	$data = 'abacfesfefga';
	$pattern = '/a/';

	if (preg_match_all($pattern, $data, $match)) {
		echo "OK";
		var_dump($match);
	} else {
		echo "NO";
	}
?>