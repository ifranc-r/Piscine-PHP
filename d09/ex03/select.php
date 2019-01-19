<?php

$files = file("list.csv", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$to_list = [];
foreach ($files as $line) {
	list($id, $text) = explode(";", $line);
	$to_list[$id] = $text;
}
echo(json_encode($to_list));
?>