<?php
	$internship = array(
		"Year" =>
		array("2011", "2012", "2013"),

		"Name" => 
		array("Rocky Liu", "Hao Zhou")
	);

	foreach ($internship as $key => $name) {
		foreach ($name as $value) {
			echo $value ."</br>";
		}	
	}
?>