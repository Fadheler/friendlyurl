<?php
		$url = strtolower($_SERVER["REQUEST_URI"]);
		while(preg_match("/\/\//",$url)) {
		    $url = str_replace("//","/",$url);
		}
		$url = explode("?",$url);
		$url = explode("/",$url[0]);
		array_shift($url);
?>
