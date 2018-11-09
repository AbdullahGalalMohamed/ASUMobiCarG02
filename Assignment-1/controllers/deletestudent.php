<?php
	header('Content-Type: application/json; charset=utf-8');
	include_once("../models/student.php");
	Database::connect('epiz_22943545_school', 'epiz_22943545', '6UfLDl6crq');
	$student = new Student($_GET['id']);
	$student->delete();
	echo json_encode(['status'=>1]);
?>