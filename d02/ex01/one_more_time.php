#!/usr/bin/php
<?php

function Data_fr_to_eng($date_fr)
{
	$day_and_mouth_conv = array('janvier'=>'jan','février'=>'feb','mars'=>'march','avril'=>'apr','mai'=>'may','juin'=>'jun','juillet'=>'jul','août'=>'aug','septembre'=>'sep','octobre'=>'oct','novembre'=>'nov','décembre'=>'dec','lundi'=>'monday','mardi'=>'tuesday','mercredi'=>'wednesday','jeudi'=>'thursday','vendredi'=>'friday', 'samedi'=>'saturday', 'dimanche'=>'sunday');
	$date_eng = $date_fr;
	foreach ($day_and_mouth_conv as $french_date => $eng_date) {
		$date_eng = str_replace($french_date, $eng_date, $date_eng);
		$date_eng = str_replace(ucfirst($french_date), $eng_date, $date_eng);
	}
	return $date_eng;
}
if ($argc == 2) {
	ini_set( 'date.timezone', 'Europe/Paris' ); 
	$date_eng = Data_fr_to_eng($argv[1]);
	$date = date_create_from_format("D d M Y H:i:s", $date_eng);
	if ($date){
		echo $date->format('U')."\n";
	}
	else {
		echo "Wrong Format\n";
		exit(-1);
	}
}
?>