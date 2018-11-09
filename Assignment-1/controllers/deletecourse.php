<?php
	header('Content-Type: application/json; charset=utf-8');
	include_once("../models/Course.php");
	Database::connect('epiz_22943545_school', 'epiz_22943545', '6UfLDl6crq');
	$course = new course($_GET['id']);
	$course->delete();
	echo json_encode(['status'=>1]);
?>