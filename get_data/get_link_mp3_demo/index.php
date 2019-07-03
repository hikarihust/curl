<?php 


	set_time_limit(0);
	$url = 'http://localhost/curl/get_data/get_link_mp3_demo/link_mp3.txt';

	/*
		Các options khi sử dụng Regex:
			i: Loại bỏ trường hợp phân biệt chữ hoa và chữ thường
			s: Xuống dòng hay không
		[, ] đều là các ký tự đặc biệt
	*/

	if (get_data($url, $html)) {
		// Get xml link
		preg_match('#data-xml="(.+?)" data-id="#is', $html, $matches);
		$xml_link = 'http://localhost/curl/get_data/get_link_mp3_demo/xml_mp3.txt';
		if (get_data($xml_link, $xml)) {
			preg_match('#<!\[CDATA\[ href="(.+?)"\]\]#is', $xml, $XMLmatches);
			print_r($XMLmatches);
		} else {
			echo "Khong the lay duoc xml";
		}
	} else {
		echo "Khong the lay duoc du lieu";
	}

	// $data: Dữ liệu tham chiếu, $data thay đổi trong hàm sẽ được ném ra 
	function get_data($link, &$data='') {
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER , TRUE);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36');
		curl_setopt($ch, CURLOPT_REFERER, 'https://www.google.com/');
		curl_setopt($ch, CURLOPT_ENCODING, '');
		curl_setopt($ch, CURLOPT_TIMEOUT, 20);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 5);

		$data = curl_exec($ch);
		$error = curl_error($ch);
		curl_close($ch);

		if (empty($error)) {
			return TRUE;
		}

		return FALSE;
	}

?>