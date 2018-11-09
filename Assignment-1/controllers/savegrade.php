
<?php
	include_once("../controllers/common.php");
	include_once("../models/grade.php");
	Database::connect('epiz_22943545_school', 'epiz_22943545', '6UfLDl6crq');
	$id = safeGet("id", 0);
	if($id==0) {
		grade::add($_POST['student_id'],$_POST['course_id'],$_POST['degree'],$_POST['examine_at']);
	} else {
		$grade = new Grade($id);
		$grade->student_id = safeGet("student_id");
		$grade->save();
		
		$grade->course_id = safeGet("course_id");
		$grade->save();
		
		$grade->degree = safeGet("degree");
        $grade->save();
        
        $grade->examine_at = safeGet("examine_at");
		$grade->save();
	}
	header('Location: ../grades.php');
?>

