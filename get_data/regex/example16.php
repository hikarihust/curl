<?php 
	/* 
	Dùng biến $match để hứng data 
	Kết quả: Lấy ra các địa chỉ email
		vudinhquangk53@gmail.com
		vudinhquangk53@yahoo.com
		vudinhquangk53@hotmail.com
	*/
	$data = 'aaaaaaaaaaaaa bbbbbbbbbbbbbbbb 123456
			 vudinhquangk53@gmail.com rrgrgr vudinhquangk53@yahoo.com asasas 
			 vudinhquangk53@hotmail.com';
	// $pattern = '/\d+/';
	$pattern = '/([0-9a-z\._])+@([a-z])+\.([a-z])+/';

	if (preg_match_all($pattern, $data, $match)) {
		echo "OK";
		var_dump($match);
	} else {
		echo "NO";
	}
?>