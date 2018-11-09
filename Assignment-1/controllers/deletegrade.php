<?php
	header('Content-Type: application/json; charset=utf-8');
	include_once("../models/grade.php");
	Database::connect('epiz_22943545_school', 'epiz_22943545', '6UfLDl6crq');
	$grade = new Grade($_GET['id']);
	$grade->delete();
	echo json_encode(['status'=>1]);
?>