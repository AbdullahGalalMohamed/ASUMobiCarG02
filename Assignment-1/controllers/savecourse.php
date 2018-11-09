
<?php
	include_once("../controllers/common.php");
	include_once("../models/Course.php");
	Database::connect('epiz_22943545_school', 'epiz_22943545', '6UfLDl6crq');
	$id = safeGet("id", 0);
	if($id==0) {
		course::add($_POST['name'],$_POST['max_degree'],$_POST['study_year']);
	} else {
		$course = new course($id);
		$course->name = safeGet("name");
		$course->save();
		
		$course->max_degree = safeGet("max_degree");
		$course->save();
		
		$course->study_year = safeGet("study_year");
		$course->save();
	}
	header('Location: ../courses.php');
?>