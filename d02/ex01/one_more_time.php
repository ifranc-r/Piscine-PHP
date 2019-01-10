#!/usr/bin/php
<?php

function day_or_mouth_fr_to_eng($str_date_or_mouth_fr)
{
	$day_and_mouth_conv = array('janvier'=>'jan','février'=>'feb','mars'=>'march','avril'=>'apr','mai'=>'may','juin'=>'jun','juillet'=>'jul','août'=>'aug','septembre'=>'sep','octobre'=>'oct','novembre'=>'nov','décembre'=>'dec','lundi'=>'monday','mardi'=>'tuesday','mercredi'=>'wednesday','jeudi'=>'thursday','vendredi'=>'friday', 'samedi'=>'saturday', 'dimanche'=>'sunday');
	foreach ($day_and_mouth_conv as $french_date => $eng_date) {
		if (preg_match('/'.$french_date.'/i', $str_date_or_mouth_fr) == true)
			return $day_and_mouth_conv[$french_date];
	}
	return null;
}

if ($argc == 2) {
	if (preg_match('/(^\w*)[\s](3[0-1]|[1-2][0-9]|[1-9])[\s](\w*)[\s](0|[1-2][0-9]{0,3})[\s](0[0-9]|1[0-9]|2[0-4]):(0[0-9]|[1-5][0-9]):(0[0-9]|[1-5][0-9])$/', $argv[1], $date)){
		
		list($all_date, $day_letter_fr, $day_num, $mouth_letter_fr, $year_num, $hours, $min, $sec) = $date;
		$day_letter_eng = day_or_mouth_fr_to_eng(lcfirst($day_letter_fr));
		$mouth_letter_eng = day_or_mouth_fr_to_eng(lcfirst($mouth_letter_fr));

		ini_set('date.timezone', 'Europe/Paris');
		// echo "$day_num $mouth_letter_eng $year_num $hours:$min:$sec";
		$date = date_create_from_format("j M Y H:i:s", "$day_num $mouth_letter_eng $year_num $hours:$min:$sec");
		if ($date && checkdate($date->format('m'), $date->format('d'), $date->format('Y')) && lcfirst($date->format('l'))==$day_letter_eng){
			// echo lcfirst($date->format('l'))." ".$day_letter_eng."\n";
			echo $date->format('U')."\n";
		}
	}
	else {
		echo "Wrong Format\n";
		exit(-1);
	}
}
?>