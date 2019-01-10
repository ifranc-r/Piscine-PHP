#!/usr/bin/php
<?php

function callback_hypertext($match){
	print_r($match);
	$match[0] = preg_replace_callback('/(title=)\"(.*)\"/i', 'callback_in_title', $match[0]);
	$match[0] = preg_replace_callback('/(>)(.*?)(<)/si', 'callback_in_htext', $match[0]);
	return ($match[0]);
}

function callback_in_htext($match){
	return ($match[1].strtoupper($match[2]).$match[3]);
}

function callback_in_title($match){
	return ($match[1]."\"".strtoupper($match[2])."\"");
}

if ($argc == 2 && file_exists($argv[1])){
	$file = fopen($argv[1], 'r');
	$string_file = "";
	while ($file && !feof($file)){
		$string_file .= fgets($file);
	}
	fclose($file);
	$string_file = preg_replace_callback('/<a.*>(.*?)(<\/a>)/is', 'callback_hypertext', $string_file);
	echo $string_file;
}
?>