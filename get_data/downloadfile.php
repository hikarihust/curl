<?php 
	error_reporting(E_ERROR);  // disable các đoạn text hiển thị thông báo warning

	set_time_limit(0);

	// Khởi tạo
	$url = 'https://mp3.zing.vn/';
	$proxy = trim(file_get_contents('proxy.txt'));

	//echo get_data($url, $proxy);

	$r = download_file('https://image-us.24h.com.vn/upload/2-2019/images/2019-06-30/Truc-tiep-tu-ket-Copa-America-Uruguay---Peru-su-1561829281-340-width660height371.jpg', 'data/abc.jpg');
	if (empty($r)) {
		echo "download success";
	}else{
		echo "download fail: " . $r;
	}

	/*	function name: download_file 
		$url: link để download
		$path: Đường dẫn để download
		return string
	*/
	function download_file($url, $path){
		$f = fopen($path, 'w');
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_FILE, $f); // Luu file
		curl_setopt($ch, CURLOPT_TIMEOUT, 28800); // 8 hours

		curl_exec($ch);

		$e = curl_errno($ch); // '': success; string: download fail
		curl_close($ch);
		fclose($f);

		return $e;
	}

	function get_data($link, $proxy = null, $proxy_type = null){
		$ch = curl_init();
		// Set option
		curl_setopt($ch, CURLOPT_URL, $link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);	// Tắt chế độ tự in kết quả ra
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36');
		curl_setopt($ch, CURLOPT_REFERER, 'https://www.google.com/');
		curl_setopt($ch, CURLOPT_ENCODING, '');
		curl_setopt($ch, CURLOPT_TIMEOUT, 20);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 5);

		//proxy
		if ((isset($proxy) && $proxy) && check_proxy_live($proxy)) {
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
			if (isset($proxy_type) && $proxy_type) {
				curl_setopt($ch, CURLOPT_PROXYTYPE, $proxy_type);
			}
			// curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
		}

		// Tiến hành exec
		$data = curl_exec($ch);
		// Đóng
		curl_close($ch);

		return $data;
	}

	// Check proxy có còn sống hay không
	function check_proxy_live($proxy){
		$waitTimeoutInSeconds = 10;

		$proxy_split = explode(':', $proxy);
		$ip = $proxy_split[0];
		$port = $proxy_split[1];

		$result = FALSE;
		if ($fp = fsockopen($ip, $port, $errCode, $errStr, $waitTimeoutInSeconds)) {
			$result = TRUE;
			fclose($fp);
		}

		return $result;
	}
?>