#!/usr/bin/php
<?php

function moyen_all_students($array_students){
	$number_of_note = 0;
	$sum_of_all_note = 0;
	foreach ($array_students as $one_student) {
		$number_of_note = $number_of_note + count($one_student["notes"]);
		$sum_of_all_note = $sum_of_all_note + array_sum($one_student["notes"]);
	}
	return $sum_of_all_note / $number_of_note;
}

function moyen_student_by_student($array_students){
	foreach ($array_students as $one_student => $student){
		$moyenne = array_sum($student["notes"]) / (count($student["notes"]));
		echo "$one_student:$moyenne\n";
	}
}

function ecart_moyen_student_by_student($array_students){
	foreach ($array_students as $one_student => $student){
		$ecart_moyenne = (array_sum($student["notes"]) / (count($student["notes"])) - $student["moulinette"]);
		echo "$one_student:$ecart_moyenne\n";
	}
}

function csv_to_array($f){
	$rows = array();
	while ($f && !feof($f))
	{
		$lines = trim(fgets( $f ));
		foreach (explode("\n", $lines) as $line) {
			$rows[] = $line;
		}
		$rows =  array_filter($rows);
	}
	$first_line = array_shift($rows);
	$header = explode(";", $first_line);
	$csv = array();
	foreach($rows as $row) { 
		$separeted_row = explode(";", $row);
		$csv[] = array_combine($header, $separeted_row);
	}
	return $csv;
}

if ($argc == 2){
	$f = fopen( 'php://stdin', 'r' );
	$csv = csv_to_array($f);
	$users =  array();
	foreach ($csv as $i => $arrayNote)
	{
		if ((!empty($arrayNote["Note"]) || $arrayNote["Note"]== "0" ))
		{
			if ($arrayNote["Noteur"] != "moulinette")
			{
				if (array_key_exists($arrayNote["User"], $users))
				{
					$users[$arrayNote["User"]]["notes"][] = $arrayNote["Note"];
				}
				else{
					$users[$arrayNote["User"]]["notes"] = array($arrayNote["Note"]);
				}
			}
			else{
				$users[$arrayNote["User"]]["moulinette"] = $arrayNote["Note"];
			}
		}
	}
	ksort($users);
	switch ($argv[1]) {
		case 'moyenne':
			echo moyen_all_students($users)."\n";
		break;

		case 'moyenne_user':
			moyen_student_by_student($users);
		break;

		case 'ecart_moulinette':
			ecart_moyen_student_by_student($users);
		break;
	}
}
?>