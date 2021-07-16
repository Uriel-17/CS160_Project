<?php
function isYoutube($url) {
	$url_parsed_arr = parse_url($url);
	if (!isset($url_parsed_arr['host'])) {
		return false;
	}

	if ($url_parsed_arr['host'] == "www.youtube.com" && $url_parsed_arr['path'] == "/watch" && substr($url_parsed_arr['query'], 0, 2) == "v=" 
		&& substr($url_parsed_arr['query'], 2) != "") {
		return true;
	}
	return false;
}

function isEmbedYoutube($url) {
	$url_parsed_arr = parse_url($url);
	if (!isset($url_parsed_arr['host'])) {
		return false;
	}

	if ($url_parsed_arr['host'] == "www.youtube.com" && substr($url_parsed_arr['path'], 0, 6) == "/embed" && substr($url_parsed_arr['path'], 6) != "") {
		return true;
	}
	return false;
}

function toEmbed($url){
	if (!isYoutube($url)) {
		return false;
	}
	$url_parsed_arr = parse_url($url);

	$embed_url = "https://".$url_parsed_arr['host']."/embed/".substr($url_parsed_arr['query'], 2);
	return $embed_url;
}
?>