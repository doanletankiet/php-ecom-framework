<?php
//Cho phép file xuất khi truy cập đúng
$main = True;

//gọi url -> file
require_once __DIR__ . "/url.php";

//xác định url
if (isset($_GET['url'])) {
	$request = $_GET['url'];
} else {
	$request = '/';
}

//path page
$path = __DIR__ . '/../pages/';

$type_load = 1;
//echo $url[$request];
//truyền file
if (isset($url[$request])) {
	if (file_exists(__DIR__ . '/../pages/' . $url[$request])) {
		$load = $path . $url[$request];
	} else {
		$load = $path . '404.php';
	}
} else {
	$url_arr = array_filter(explode('/', $request));
	if (!empty($url[$url_arr[0]])) {
		$load = $path  . $url[$url_arr[0]];
		$params = 0;
		foreach ($url_arr as $key => $value) {
			$params = $url_arr[$key];
		}
	} else {
		$load = $path . '404.php';
	}
	//echo $params;
	// echo '<pre>';
	// print_r($url_arr);
	// echo '</pre>';
	$type_load = 2;
}

//gọi file
if ($type_load == 1) {
	require $load;
} else {
	require $load;
}