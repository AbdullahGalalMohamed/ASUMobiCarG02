<?php
		
        include_once('database.php');
       
        Database::connect('epiz_22943545_school', 'epiz_22943545', '6UfLDl6crq');
	
	class ShowGrades extends Database{
			public static function show_grades($student_id){
            $sql = "SELECT courses.name,grades.degree,courses.max_degree  FROM courses LEFT JOIN grades ON courses.id = grades.course_id
            LEFT JOIN students ON students.id = grades.student_id  WHERE students.id LIKE $student_id ;";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$show_items = [];
			
			$row = $statement->fetch(PDO::FETCH_ASSOC);
			while ($row !=false){
				$show_items[] = $row;
				$row = $statement->fetch(PDO::FETCH_ASSOC);
			}

			return $show_items;
		}
	}

?>