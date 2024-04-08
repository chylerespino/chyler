<?php

	require_once 'student.php';
	require_once 'letter.php';

	$students = array();

	$student1 = new Student("Kevin", "Slonka", "1001", array("CPSC222" => 98, "CPSC111" => 76, "CPSC333" => 82));
	$student2 = new Student("Joe", "Schmoe", "1005", array("CPSC122" => 88, "CPSC411" => 46, "CPSC323" => 72)); 
	$student3 = new Student("Stewie", "Griffin", "1009", array("CPSC244" => 68, "CPSC116" => 96, "CPSC345" => 82));

	$students[] = $student1;
	$students[] = $student2;
	$students[] = $student3;	

	echo "<h1><b>Chapters 5 & 6</b></h1>";

	for ($i = 0; $i < count($students); $i++) {
		$student = $students[$i];
		echo "\t<table border = 1>";
		echo "\t\t\t<tr\n>";
		echo "\t\t\t\t<td><b><center>Name</b></td>";
		echo "\t\t\t\t<td>".$student->getName()."</td>\n";
		echo "\t\t\t</tr>\n";

		echo "\t\t\t</tr>\n";
		echo "\t\t\t\t<td><b><center>Student ID</b></td>";
		echo "\t\t\t\t<td>".$student->getId()."</td>\n";
		echo "\t\t\t</tr>\n";

		echo "\t\t\t</tr>\n";
		echo "\t\t\t\t<td><b><center>Grades</b></td>";

		echo "\t\t\t</tr>\n";
		echo "<ul>";
		foreach($student->getCourses() as $courseName => $courseGrade) {
			echo "<li>".$courseName." - ".$courseGrade." ".letter($courseGrade)."</li>";
		}

		echo "</ul>";
		echo "</td>";
		echo "\t\t\t</tr>";
		echo "</table>";
		echo "<br>";
	}	
?>

