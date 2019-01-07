#!/usr/bin/php
<?php

function moyen_all_students($array_students){
	$number_of_note = 0;
	$sum_of_all_note = 0;
	foreach ($array_students as $one_student) {
		$number_of_note = $number_of_note + count($one_student);
		$sum_of_all_note = $sum_of_all_note + array_sum($one_student);
	}
	return $sum_of_all_note / $number_of_note;
}

function moyen_student_by_student($array_students){
	foreach ($array_students as $one_student => $studen_notes) {
		$moyenne = array_sum($studen_notes) / count($studen_notes);
		echo "$one_student:$moyenne\n";
	}
}

if ($argc > 1){
	$file = file('php://stdin', FILE_SKIP_EMPTY_LINES);
	$array_students = array();
	foreach ($file as $line) {
		$array_line = explode(";", trim($line));
		$array_line_student = array($array_line[0] => $array_line[1], $array_line[2] => $array_line[3]);
		foreach ($array_line_student as $students => $note){
	
			if (!empty($note)){
				if (array_key_exists($students, $array_students)){
					$array_students[$students][] = $note;
				}
				else{
					$array_students[$students] = array($note);
				}
			}
		}
	}
	switch ($argv[1]) {
		case 'moyenne':
			echo moyen_all_students($array_students)."\n";
			break;

		case 'moyenne_user':
			moyen_student_by_student($array_students);
			break;
		case 'ecart_moulinette':
			break;
		default:
			# code...
			break;
	}
}
?>