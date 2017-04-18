<!--
#----------------------------------------------------------------------------
# Manikantha Surya Rakesh Oduri
# modur2
# CSC 368 - Final Project
# May 8, 2016
#----------------------------------------------------------------------------
-->
<?php
require 'db_info.php';

// Query to fetch required data from backend.

	$sql = "Select * from registration";
	$result = mysql_query($sql);
	echo "<table  width='100%' border='2'>";
	echo "<tr>";
	 echo "<td>No</td><td>Student Id</td><td>Department</td><td>Course</td><td>Timings</td><td>Day</td><td>Term</td><td></td>";	
	 echo "</tr>";
	//way to access rows from mysql database as mysql_fetch_assoc() or mysql_fetch_array returns a single row 
	while ($row = mysql_fetch_assoc($result)) 
	{
	echo "<tr>";	
	
	
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['student_id']."</td>";
	echo "<td>".$department[$row['department']]."</td>";
	echo "<td>".$cr_name[$row['course']]."</td>";
	echo "<td>".$timings[$row['time']]."</td>";
	echo "<td>".$day[$row['day']]."</td>";
	echo "<td>".$term[$row['term']]."</td>";	 
		 
	echo "<td> <a href='editCourse.php/?id=".$row['student_id']."'>Edit</a></td>";	
	echo "</tr>";
	}
	echo "</table>";
	mysql_close($conn); 

	?>

	<?php
echo "<br/><br/><a href='index.php'>HOME PAGE</a>";
?>