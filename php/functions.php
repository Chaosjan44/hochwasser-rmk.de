<?php
function isMobile () {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function check_style() {
	if(isset($_COOKIE['style'])) {
		if ($_COOKIE['style'] == 'dark') {
			return 'dark';
		} else if ($_COOKIE['style'] == 'light') {
			return 'light';
		}
	} else {
		return 'light';
	}
}

function check_cookie() {
	//return true; // Remove this line to get the cookie modal back
	if(isset($_COOKIE['acceptCookies'])) {
		return true;
	} else {
		return false;
	}
}
?>