<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	include_once("./controllers/common.php");
	$id = safeGet('id');
	//$id=Request.Form("id");
	//echo $id;
		include_once("./models/show_grade_table.php");
		Database::connect('epiz_22943545_school', 'epiz_22943545', '6UfLDl6crq');
        $result = ShowGrades::show_grades($id);
	?>

     
	<table style border="2px">
		<tr>
			<th>Course_name</th>
			<th>Grade</th>
            <th>Max_grade</th>

		</tr>
		<?php
			foreach($result as $row){
                echo "<tr>";
				echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["degree"]."</td>";
                echo "<td>".$row["max_degree"]."</td>";
				echo "</tr>";
            }
            		?>
	</table>
</body>
</html>