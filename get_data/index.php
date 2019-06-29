<?php 
	include 'libs/Curl/ArrayUtil.php';
	include 'libs/Curl/CaseInsensitiveArray.php';
	include 'libs/Curl/Curl.php';
	include 'libs/Curl/Decoder.php';
	include 'libs/Curl/Encoder.php';
	include 'libs/Curl/MultiCurl.php';
	include 'libs/Curl/StringUtil.php';
	include 'libs/Curl/Url.php';
	use \Curl\Curl;

	$curl = new Curl();
	$curl->setOpt(CURLOPT_ENCODING, '');
	$html = $curl->get('https://mp3.zing.vn/');

	if ($curl->error) {
	    echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";
	} else {
		var_dump(htmlspecialchars($html));
	}

	$curl->close();

?>