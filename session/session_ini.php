<?php
if (session_name() == null || session_name() == "") {
	session_start();
}

function getUserIpAddress() {
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		// ip from share internet
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		// ip pass from proxy
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else{
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

if (isset($_SESSION['currentIP'])) {
	if ($_SESSION['currentIP'] != getUserIpAddress()) {
		header("Location: logout.php");
	}
}
else {
	$_SESSION['currentIP'] = getUserIpAddress();
}

?>
