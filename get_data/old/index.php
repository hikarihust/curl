<?php 
	// for ($i=1; $i <100 ; $i++) { 
	// 	echo $i;
	// }
	// var_dump($argv);

	// if (isset($argv[1])) {
	// 	echo "Hello" . $argv[1];
	// }
	
	// Khởi tạo
	$url = 'http://ketqua.net/';
	$ch = curl_init();
	// Set option
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);	// Tắt chế độ tự in kết quả ra
	// Tiến hành exec
	$data = curl_exec($ch);
	// Đóng
	curl_close($ch);

	echo htmlspecialchars($data);
?>