#!/usr/bin/php
<?php

function Data_fr_to_eng($date_fr)
{
	$day_and_mouth_conv = array('janvier'=>'jan','février'=>'feb','mars'=>'march','avril'=>'apr','mai'=>'may','juin'=>'jun','juillet'=>'jul','août'=>'aug','septembre'=>'sep','octobre'=>'oct','novembre'=>'nov','décembre'=>'dec','lundi'=>'monday','mardi'=>'tuesday','mercredi'=>'wednesday','jeudi'=>'thursday','vendredi'=>'friday', 'samedi'=>'saturday', 'dimanche'=>'sunday');
	$date_eng = $date_fr;
	$count = 0;
	foreach ($day_and_mouth_conv as $french_date => $eng_date) {
		if (preg_match('/'.$french_date.'/i', $date_fr) == true)
			++$count;
		$date_eng = preg_replace('/'.$french_date.'/i', $eng_date, $date_eng);
	}
	return ($count == 2) ? $date_eng: 0;
}
if ($argc == 2) {
	ini_set( 'date.timezone', 'Europe/Paris' ); 
	$date_eng = Data_fr_to_eng($argv[1]);
	$date = date_create_from_format("!D !j M Y H:i:s", $date_eng);
	echo $date->format('j m Y');
	if (checkdate($date->format('m'), $date->format('d'), $date->format('Y'))){
		echo $date->format('U')."\n";
	}
	else {
		echo "Wrong Format\n";
		exit(-1);
	}
}
?>