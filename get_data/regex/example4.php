<?php 
	/* 
	So sánh ==, cần phải sử dụng dấu ^ và $
	i: Không phân biệt chữ hoa hay chữ thường(ignore)
	Dùng biến $match để hứng data 
	*/
	$data = 'vudinhquang';
	$pattern = '/^VUDINHQUANG$/i';

	if (preg_match($pattern, $data, $match)) {
		echo "OK";
		var_dump($match);
	} else {
		echo "NO";
	}
?>