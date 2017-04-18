<!--
#----------------------------------------------------------------------------
# Manikantha Surya Rakesh Oduri
# modur2
# CSC 368 - Final Project
# May 8, 2016
#----------------------------------------------------------------------------
-->
<?php
require 'db_info.php'; // to include external files 

//all the form submitted fields can be accessed by $_POST when the form submit method is POST
$studentid=$_POST['studentid'];
$term=$_POST['term'];
$cr_name=$_POST['cr_name'];
$day=$_POST['day'];
$timings=$_POST['timings'];
$department=$_POST['department'];

	//update query to modify and save the edit records
	$sql = "Update registration set department='{$department}',course='{$cr_name}',time='{$timings}',day='{$day}',term ='{$term}' where student_id='{$studentid}'";
    	
	$result = mysql_query($sql);
	if($result){
		echo "Record updated successfully <br/>";		
	}else{
		echo "Record update Failed  <br/>";
	}
	mysql_close($conn); 
	
	echo "<a href='index.php'>HOME PAGE</a>";

?>