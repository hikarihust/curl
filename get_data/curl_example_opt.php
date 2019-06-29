<?php 
	// for ($i=1; $i <100 ; $i++) { 
	// 	echo $i;
	// }
	// var_dump($argv);

	// if (isset($argv[1])) {
	// 	echo "Hello" . $argv[1];
	// }
	
	set_time_limit(0);

	// Khởi tạo
	$url = 'https://dantri.com.vn/';
	$ch = curl_init();
	// Set option
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);	// Tắt chế độ tự in kết quả ra
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36');
	curl_setopt($ch, CURLOPT_REFERER, 'https://www.google.com/');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_MAXREDIRS, 5);

	// $headers = array();
	// $headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
	// $headers[] = 'accept-encoding: gzip, deflate, br';
	// $headers[] = 'accept-language: en,en-US;q=0.9';
	// $headers[] = 'cache-control: max-age=0';
	// $headers[] = 'upgrade-insecure-requests: 1';
	// $headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36';

	curl_setopt($ch, CURLOPT_HEADER, TRUE);    // Dùng trong debug
	// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	// Tiến hành exec
	$data = curl_exec($ch);
	// Đóng
	curl_close($ch);

	echo htmlspecialchars($data);
?>